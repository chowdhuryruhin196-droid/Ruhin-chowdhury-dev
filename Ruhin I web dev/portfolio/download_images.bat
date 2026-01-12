@echo off
REM Download portfolio images from Unsplash
REM Created for portfolio image setup

setlocal enabledelayedexpansion

set "imagedir=C:\Users\User\Desktop\Ruhin I web dev\portfolio\images"

if not exist "!imagedir!" (
    mkdir "!imagedir!"
    echo Created images directory
)

echo Downloading images...

REM Hero & Banner Images
powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=1200&h=600&fit=crop' -OutFile '!imagedir!\hero-banner.jpg'"
echo Downloaded: hero-banner.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=600&fit=crop' -OutFile '!imagedir!\services-hero.jpg'"
echo Downloaded: services-hero.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=600&fit=crop' -OutFile '!imagedir!\contact-image.jpg'"
echo Downloaded: contact-image.jpg

REM Feature Card Images
powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1550355291-bbee04a92027?w=400&h=400&fit=crop' -OutFile '!imagedir!\quality-guarantee.jpg'"
echo Downloaded: quality-guarantee.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=400&h=400&fit=crop' -OutFile '!imagedir!\responsive-design.jpg'"
echo Downloaded: responsive-design.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=400&h=400&fit=crop' -OutFile '!imagedir!\performance.jpg'"
echo Downloaded: performance.jpg

REM Project Images
powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=400&h=300&fit=crop' -OutFile '!imagedir!\project-1.jpg'"
echo Downloaded: project-1.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=400&h=300&fit=crop' -OutFile '!imagedir!\project-2.jpg'"
echo Downloaded: project-2.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=300&fit=crop' -OutFile '!imagedir!\project-3.jpg'"
echo Downloaded: project-3.jpg

REM Profile Images
powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=500&fit=crop' -OutFile '!imagedir!\profile-photo.jpg'"
echo Downloaded: profile-photo.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=500&h=500&fit=crop' -OutFile '!imagedir!\profile-photo-alt.jpg'"
echo Downloaded: profile-photo-alt.jpg

REM Icon Images
powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=100&h=100&fit=crop' -OutFile '!imagedir!\responsive-website-icon.jpg'"
echo Downloaded: responsive-website-icon.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=100&h=100&fit=crop' -OutFile '!imagedir!\ui-ux-design-icon.jpg'"
echo Downloaded: ui-ux-design-icon.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=100&h=100&fit=crop' -OutFile '!imagedir!\ecommerce-icon.jpg'"
echo Downloaded: ecommerce-icon.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1460925895917-adf4e565db7d?w=100&h=100&fit=crop' -OutFile '!imagedir!\seo-icon.jpg'"
echo Downloaded: seo-icon.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=100&h=100&fit=crop' -OutFile '!imagedir!\security-icon.jpg'"
echo Downloaded: security-icon.jpg

powershell -Command "Invoke-WebRequest -Uri 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=100&h=100&fit=crop' -OutFile '!imagedir!\support-icon.jpg'"
echo Downloaded: support-icon.jpg

echo.
echo All images downloaded successfully!
echo Images saved to: !imagedir!
pause
