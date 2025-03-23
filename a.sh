find . -type f -name "*.php" | while read file; do
    mv "$file" "${file%.php}.php"
done
