for file in *.{jpg,jpeg,png}; do
  [ -f "$file" ] || continue
  cwebp "$file" -o "${file%.*}.webp"
done
