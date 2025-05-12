import requests
from bs4 import BeautifulSoup
import os
from urllib.parse import urljoin, urlparse

def is_image_url(url):
    return url.lower().endswith(('.jpg', '.jpeg', '.png', '.gif', '.bmp', '.webp'))

def download_images_from_url(page_url, output_dir="downloaded_images"):
    headers = {
        "User-Agent": "Mozilla/5.0"
    }

    # 获取网页 HTML
    response = requests.get(page_url, headers=headers)
    response.raise_for_status()
    soup = BeautifulSoup(response.text, "html.parser")

    # 创建下载目录
    os.makedirs(output_dir, exist_ok=True)

    image_urls = set()

    # 1. 提取所有 <img src=...>
    for img in soup.find_all("img"):
        src = img.get("src")
        if src:
            full_url = urljoin(page_url, src)
            image_urls.add(full_url)

    # 2. 提取所有 <a href=...> 指向图片的
    for a in soup.find_all("a"):
        href = a.get("href")
        if href and is_image_url(href):
            full_url = urljoin(page_url, href)
            image_urls.add(full_url)

    print(f"发现 {len(image_urls)} 张图片，开始下载...")

    filename_list = []
    for idx, img_url in enumerate(image_urls):
        print(img_url)
        filename = os.path.basename(urlparse(img_url).path)
        if not filename:
            filename = f"image_{idx}.jpg"
        if filename in filename_list:
            name, ext = os.path.splitext(filename)
            filename = f"{name}_{idx}{ext}"
        save_path = os.path.join(output_dir, filename)
        filename_list.append(filename)
        try:
            img_data = requests.get(img_url, headers=headers).content
            with open(save_path, "wb") as f:
                f.write(img_data)
            print(f"✔ 下载成功: {filename}")
        except Exception as e:
            print(f"✘ 下载失败: {img_url}, 错误: {e}")

# 使用方式
if __name__ == "__main__":
    url = input("请输入网页链接：")
    download_images_from_url(url)
