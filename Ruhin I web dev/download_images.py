import urllib.request
import os

# Image URLs and filenames
images = {
    "hero-banner.jpg": "https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=1200&h=600&fit=crop",
    "services-hero.jpg": "https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=600&fit=crop",
    "contact-image.jpg": "https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=600&fit=crop",
    "quality-guarantee.jpg": "https://images.unsplash.com/photo-1550355291-bbee04a92027?w=400&h=400&fit=crop",
    "responsive-design.jpg": "https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=400&h=400&fit=crop",
    "performance.jpg": "https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=400&h=400&fit=crop",
    "project-1.jpg": "https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=400&h=300&fit=crop",
    "project-2.jpg": "https://images.unsplash.com/photo-1561070791-2526d30994b5?w=400&h=300&fit=crop",
    "project-3.jpg": "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=300&fit=crop",
    "profile-photo.jpg": "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=500&fit=crop",
    "responsive-website-icon.jpg": "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=100&h=100&fit=crop",
    "ui-ux-design-icon.jpg": "https://images.unsplash.com/photo-1561070791-2526d30994b5?w=100&h=100&fit=crop",
    "ecommerce-icon.jpg": "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=100&h=100&fit=crop",
    "seo-icon.jpg": "https://images.unsplash.com/photo-1460925895917-adf4e565db7d?w=100&h=100&fit=crop",
    "security-icon.jpg": "https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=100&h=100&fit=crop",
    "support-icon.jpg": "https://images.unsplash.com/photo-1552664730-d307ca884978?w=100&h=100&fit=crop",
}

# Create images folder if it doesn't exist
folder = r"c:\Users\User\Desktop\Ruhin I web dev\portfolio\images"
os.makedirs(folder, exist_ok=True)

# Download each image
for filename, url in images.items():
    filepath = os.path.join(folder, filename)
    try:
        print(f"Downloading {filename}...", end=" ")
        urllib.request.urlretrieve(url, filepath)
        print("✓ Done")
    except Exception as e:
        print(f"✗ Error: {e}")

print("\nAll images downloaded successfully!")
