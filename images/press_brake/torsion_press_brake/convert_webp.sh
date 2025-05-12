for file in *.{jpg,jpeg,png}; do
  echo $file
  [ -f "$file" ] || continue
  cwebp "$file" -o "${file%.*}.webp"
done
