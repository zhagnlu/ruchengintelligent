#!/bin/bash

# 删除所有 .webp 文件
echo "开始删除 .webp 文件..."

find . -type f -name "*.webp" | while read -r file; do
    echo "删除: $file"
    rm -f "$file"
done

echo "删除完成！"
