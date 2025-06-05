#!/bin/bash

# 支持的图片扩展名
EXTENSIONS=("jpg" "jpeg" "png")

# 检查是否安装 cwebp
command -v cwebp >/dev/null 2>&1 || {
    echo >&2 "请先安装 cwebp 工具，例如：brew install webp 或 apt install webp"
    exit 1
}

# 遍历每种扩展名
for ext in "${EXTENSIONS[@]}"; do
    find . -type f -iname "*.${ext}" | while read -r img; do
        webp="${img}.webp"
        if [[ -f "$webp" ]]; then
            echo "已存在，跳过: $webp"
        else
            echo "转换: $img → $webp"
            cwebp -q 80 "$img" -o "$webp"
        fi
    done
done

echo "全部完成。"
