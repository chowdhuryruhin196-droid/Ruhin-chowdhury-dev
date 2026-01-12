# 🚀 Quick Start Guide

## Step 1: Open the Portfolio

Open `index.html` in your web browser to view the portfolio locally.

### Using Different Methods:

**Option A: Direct File Opening**
- Locate `portfolio/index.html` on your computer
- Double-click to open in your default browser

**Option B: Python Server (Recommended)**
- Open terminal/command prompt
- Navigate to portfolio folder: `cd path/to/portfolio`
- Run: `python -m http.server 8000` (Python 3) or `python -m SimpleHTTPServer 8000` (Python 2)
- Visit: `http://localhost:8000`

**Option C: Live Server (VS Code)**
- Install "Live Server" extension in VS Code
- Right-click on `index.html`
- Select "Open with Live Server"

## Step 2: Customize Content

### Update Contact Information
1. Open files in text editor (VS Code, Notepad, etc.)
2. Search for:
   - `hello@ruhin.dev` → Replace with your email
   - `+1 (234) 567-890` → Replace with your phone
   - `Ruhin's Web Development` → Replace with your name

**Files to update:**
- `index.html`
- `pages/about.html`
- `pages/services.html`

### Add Your Images
1. Create or gather your images
2. Place them in the `images/` folder
3. Use the filenames suggested in README.md

**Recommended free image resources:**
- Unsplash (https://unsplash.com)
- Pexels (https://www.pexels.com)
- Pixabay (https://pixabay.com)
- Placeholder: (https://via.placeholder.com)

### Edit Page Content

**Home Page (index.html):**
- Change hero tagline
- Update guarantee descriptions
- Modify project showcase details

**About Page (pages/about.html):**
- Update biography
- Edit expertise descriptions
- Customize values section

**Services Page (pages/services.html):**
- Modify service descriptions
- Update pricing and packages
- Edit FAQ questions and answers

## Step 3: Customize Colors

### Change Theme Colors

1. Open `styles.css`
2. Find the `:root` section (around line 6)
3. Modify color values:

```css
:root {
    --primary-color: #1a1a1a;        /* Change main color */
    --secondary-color: #ffffff;      /* Change text color */
    --accent-color: #4a4a4a;         /* Change hover color */
    --light-gray: #f5f5f5;           /* Change background */
}
```

**Example Color Schemes:**

**Modern Blue:**
```css
--primary-color: #0066cc;
--secondary-color: #ffffff;
--accent-color: #0052a3;
--light-gray: #f0f4ff;
```

**Professional Red:**
```css
--primary-color: #c41e3a;
--secondary-color: #ffffff;
--accent-color: #a01730;
--light-gray: #fff5f5;
```

**Green Tech:**
```css
--primary-color: #2d7e3f;
--secondary-color: #ffffff;
--accent-color: #1e5a2a;
--light-gray: #f0f8f2;
```

## Step 4: Test Responsiveness

### Test on Different Devices

1. **Desktop:** View at 1920x1080 or larger
2. **Tablet:** Resize browser to 768px width
3. **Mobile:** Resize browser to 375px width

### Using Browser DevTools

- Open: `F12` or `Right-click → Inspect`
- Click device icon (top-left of DevTools)
- Select different devices from dropdown
- Rotate to test landscape/portrait modes

## Step 5: Deploy Your Portfolio

### Deploy to GitHub Pages (Free)

```bash
# 1. Create GitHub account (if not already)
# 2. Create new repository named "portfolio"

# 3. In terminal, navigate to portfolio folder
cd path/to/portfolio

# 4. Initialize git
git init

# 5. Add all files
git add .

# 6. Commit files
git commit -m "Initial portfolio commit"

# 7. Add remote
git remote add origin https://github.com/YOUR_USERNAME/portfolio.git

# 8. Push to GitHub
git branch -M main
git push -u origin main

# 9. Go to GitHub repository settings
# 10. Scroll to "GitHub Pages"
# 11. Set source to "main" branch
# 12. Your site will be live at: https://YOUR_USERNAME.github.io/portfolio
```

### Deploy to Netlify (Easier)

1. Go to https://netlify.com
2. Sign up (free)
3. Drag and drop your `portfolio` folder
4. Your site is instantly live!

### Deploy to Traditional Hosting

1. Contact your hosting provider
2. Upload all files via FTP/SFTP to `public_html` folder
3. Access via your domain

## Step 6: Add More Content

### Add Another Service

1. Open `pages/services.html`
2. Find the `.services-grid` section
3. Copy a `.service-card` div
4. Paste and update:
   - Service icon image
   - Service title (h3)
   - Service description (p)
   - Service features (ul > li)

### Add Another Project

1. Open `index.html`
2. Find the `.work-grid` section
3. Copy a `.work-item` div
4. Paste and update:
   - Project image
   - Project title
   - Project description

### Add FAQ Items

1. Open `pages/services.html`
2. Find the `.faq-grid` section
3. Copy a `.faq-item` div
4. Paste and update question and answer

## Useful File Locations

```
portfolio/
├── index.html                    ← Home page content
├── pages/about.html             ← About page content
├── pages/services.html          ← Services & contact
├── styles.css                   ← All styling (colors, fonts, layout)
├── script.js                    ← JavaScript (animations, form)
├── config.json                  ← Configuration reference
├── README.md                    ← Full documentation
└── images/                      ← Your images here
```

## Common Tasks Cheatsheet

| Task | Location | Action |
|------|----------|--------|
| Change colors | `styles.css` line 6 | Modify CSS variables |
| Update name | All HTML files | Search/replace text |
| Add image | `images/` folder | Place file, update HTML src |
| Edit services | `pages/services.html` | Edit content in cards |
| Change fonts | `styles.css` line 33 | Update font-family |
| Update email | All HTML files | Find/replace email address |
| Add new page | Create new `.html` | Copy structure from existing page |
| Adjust spacing | `styles.css` | Modify `padding`/`margin` values |

## Troubleshooting

**Q: Images not showing?**
- A: Check path spelling and file exists in `images/` folder

**Q: Styling looks wrong?**
- A: Clear browser cache (Ctrl+Shift+Del) and reload

**Q: Form not working?**
- A: Open browser console (F12) to check for errors

**Q: Site not responsive?**
- A: Check meta viewport tag exists in `<head>`

**Q: Links not working?**
- A: Verify file paths (use `../` to go up directories)

## Next Steps

1. ✅ Add your actual images
2. ✅ Update contact information
3. ✅ Customize colors to match your brand
4. ✅ Add your real project examples
5. ✅ Deploy to the web
6. ✅ Share with clients and employers!

---

**Need help? Check README.md for detailed documentation.**

**Your portfolio is now complete and ready to showcase your skills!** 🎉
