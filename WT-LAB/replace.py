# File path
file_path = r'TASK-1/gitcommands.md'

# Read the file
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Replace text
content = content.replace("jpg", "png")
content = content.replace("220615", "220148")

# Write back to file
with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Replacements completed successfully!")