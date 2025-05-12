import re
import requests

def replace_img_src(html_text, new_path="/a/b/c"):
    # 匹配 src="//cdn.xuansiwei.com/.../filename.jpg|png|..."
    pattern = r'src=["\'](?:https?:)?//cdn\.xuansiwei\.com/[^"\']*/([^"\']+\.(?:jpg|jpeg|png|gif|webp))["\']'

    def replacer(match):
        filename = match.group(1)
        return f'src="{new_path}/{filename}"'

    return re.sub(pattern, replacer, html_text, flags=re.IGNORECASE)

def fetch_and_replace(url, new_path, output_file="output.html"):
    try:
        resp = requests.get(url)
        resp.raise_for_status()
    except Exception as e:
        print(f"请求失败: {e}")
        return

    html = resp.text
    updated_html = replace_img_src(html, new_path)

    with open(output_file, "w", encoding="utf-8") as f:
        f.write(updated_html)

    print(f"已保存替换后的 HTML 到 {output_file}")

if __name__ == "__main__":
    url = input("请输入要处理的网页链接：").strip()
    custom_path = input("请输入图片的新路径：").strip() 
    output_file = input("输出文件名（默认 output.html）：").strip() or "output.html"
    
    fetch_and_replace(url, new_path=custom_path, output_file=output_file)
