import os
import re
import requests
from urllib.parse import urlparse, urljoin
from bs4 import BeautifulSoup
import time
from concurrent.futures import ThreadPoolExecutor
import logging
from queue import Queue
import threading

# 配置日志
logging.basicConfig(
    level=logging.INFO,
    format='%(asctime)s - %(levelname)s - %(message)s',
    handlers=[
        logging.FileHandler('cdn_downloader.log'),
        logging.StreamHandler()
    ]
)

class CDNDownloader:
    def __init__(self, start_url, save_dir, max_workers=5):
        self.start_url = start_url.rstrip('/')
        self.base_domain = urlparse(start_url).netloc
        self.save_dir = save_dir
        self.max_workers = max_workers
        self.visited_urls = set()
        self.resource_urls = set()
        self.page_queue = Queue()
        self.lock = threading.Lock()
        
        # 确保基础目录存在
        os.makedirs(save_dir, exist_ok=True)
        
        # 初始化线程池
        self.executor = ThreadPoolExecutor(max_workers=max_workers)
        
    def get_full_url(self, url):
        """将相对URL转换为完整URL"""
        if not url:
            return None
        if not url.startswith(('http://', 'https://')):
            return urljoin(self.start_url, url)
        return url

    def is_same_domain(self, url):
        """检查URL是否属于同一域名"""
        try:
            return urlparse(url).netloc == self.base_domain
        except:
            return False

    def is_cdn_url(self, url):
        """检查URL是否来自目标CDN"""
        return url and 'cdn.xuansiwei.com' in url

    def download_file(self, url, save_path):
        """下载文件并保存到指定路径"""
        try:
            # 检查文件是否已存在
            if os.path.exists(save_path):
                logging.info(f"File already exists: {save_path}")
                return True

            response = requests.get(url, stream=True, timeout=30)
            response.raise_for_status()
            
            # 确保目录存在
            os.makedirs(os.path.dirname(save_path), exist_ok=True)
            
            with open(save_path, 'wb') as f:
                for chunk in response.iter_content(chunk_size=8192):
                    if chunk:
                        f.write(chunk)
            logging.info(f"Successfully downloaded: {url}")
            return True
        except Exception as e:
            logging.error(f"Failed to download {url}: {str(e)}")
            return False

    def extract_urls(self, html_content, current_url):
        """从HTML内容中提取所有URL"""
        soup = BeautifulSoup(html_content, 'html.parser')
        page_urls = set()
        resource_urls = set()
        
        # 提取页面链接
        for a in soup.find_all('a', href=True):
            url = self.get_full_url(a['href'])
            if url and self.is_same_domain(url):
                page_urls.add(url)
        
        # 提取资源URL
        for tag in soup.find_all(['link', 'script', 'img', 'source']):
            if tag.name == 'link' and tag.get('href'):
                url = self.get_full_url(tag['href'])
                if self.is_cdn_url(url):
                    resource_urls.add(url)
            elif tag.name in ['script', 'img', 'source'] and tag.get('src'):
                url = self.get_full_url(tag['src'])
                if self.is_cdn_url(url):
                    resource_urls.add(url)
        
        # 提取CSS中的URL
        for style in soup.find_all('style'):
            if style.string:
                for url in re.findall(r'url\([\'"]?(.*?)[\'"]?\)', style.string):
                    full_url = self.get_full_url(url)
                    if self.is_cdn_url(full_url):
                        resource_urls.add(full_url)
        
        return page_urls, resource_urls

    def process_page(self, url):
        """处理单个页面"""
        try:
            # 检查是否已访问
            with self.lock:
                if url in self.visited_urls:
                    return
                self.visited_urls.add(url)
            
            logging.info(f"Processing page: {url}")
            
            # 下载页面
            response = requests.get(url, timeout=30)
            response.raise_for_status()
            
            # 提取所有URL
            page_urls, resource_urls = self.extract_urls(response.text, url)
            
            # 处理资源URL
            for resource_url in resource_urls:
                if resource_url and resource_url not in self.resource_urls:
                    with self.lock:
                        self.resource_urls.add(resource_url)
                    
                    # 构建保存路径
                    parsed_url = urlparse(resource_url)
                    path_parts = parsed_url.path.strip('/').split('/')
                    if path_parts:
                        save_path = os.path.join(self.save_dir, *path_parts)
                        self.executor.submit(self.download_file, resource_url, save_path)
            
            # 将新发现的页面URL加入队列
            for page_url in page_urls:
                if page_url not in self.visited_urls:
                    self.page_queue.put(page_url)
            
        except Exception as e:
            logging.error(f"Error processing page {url}: {str(e)}")

    def start(self):
        """开始爬取过程"""
        # 将起始页面加入队列
        self.page_queue.put(self.start_url)
        
        while not self.page_queue.empty():
            url = self.page_queue.get()
            logging.info(f"Processing page: {url}")
            self.process_page(url)
            time.sleep(1)  # 添加延迟以避免请求过快
        
        # 等待所有下载任务完成
        self.executor.shutdown(wait=True)
        logging.info("All downloads completed!")

def main():
    # 配置
    start_url = 'http://localhost:8000'   # 起始URL
    save_dir = 'cdn_resources'             # 保存目录
    max_workers = 5                        # 并发下载数
    
    # 创建下载器实例
    downloader = CDNDownloader(start_url, save_dir, max_workers)
    
    # 开始下载
    downloader.start()

if __name__ == '__main__':
    main()