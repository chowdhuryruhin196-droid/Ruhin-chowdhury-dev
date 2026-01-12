# Ruhin's Web Development Portfolio

A modern, responsive, and professionally designed web development portfolio website built with clean HTML, CSS, and JavaScript.

## 📁 Project Structure

```
portfolio/
├── index.html              # Home page
├── styles.css             # Main stylesheet
├── script.js              # JavaScript functionality
├── pages/
│   ├── about.html         # About page
│   └── services.html      # Services & Contact page
└── images/                # Folder for image assets
```

## 🎨 Design Features

- **Minimal & Aesthetic**: Clean, professional design with a monochromatic color scheme
- **Fully Responsive**: Optimized for mobile, tablet, and desktop devices
- **Semantic HTML**: Properly structured HTML5 for accessibility and SEO
- **Modern CSS**: Grid layout, flexbox, and CSS variables for easy customization
- **Interactive Features**: Smooth scrolling, form validation, animations, and more
- **Accessibility**: WCAG compliant with keyboard navigation and proper ARIA labels

## 📄 Pages

### 1. **Home Page (index.html)**
- Hero section with main tagline
- "Why Choose Me" guarantee section with 3 key benefits
- Featured projects showcase
- Skills demonstration section
- Call-to-action sections
- Professional footer

### 2. **About Page (pages/about.html)**
- Personal biography with profile image
- Journey timeline
- Expertise grid (6 areas of expertise)
- Tools & Technologies section
- Personal values section
- CTA to services

### 3. **Services Page (pages/services.html)**
- Comprehensive service offerings (6 services)
- Step-by-step process breakdown
- Service packages (Starter, Professional, Enterprise)
- Contact form with validation
- Contact information
- FAQ section
- Why choose me benefits

## 🎯 Getting Started

### 1. Set Up Images
Create placeholder or actual images in the `images/` folder with these filenames:
- Hero & Featured Work:
  - `hero-banner.jpg`
  - `quality-guarantee.jpg`
  - `responsive-design.jpg`
  - `performance.jpg`
  - `project-1.jpg`, `project-2.jpg`, `project-3.jpg`

- About Page:
  - `profile-photo.jpg`
  - Various icons for expertise, values, etc.

- Services Page:
  - `services-hero.jpg`
  - Various service and benefit icons
  - `contact-image.jpg`

**Recommended Image Sizes:**
- Hero images: 1200x600px
- Card images: 400x300px
- Icons: 100x100px or 80x80px
- Profile photo: 500x500px

### 2. Customize Content
Edit the following in each HTML file:

**Contact Information:**
- Replace `hello@ruhin.dev` with your email
- Replace `+1 (234) 567-890` with your phone
- Update location information

**Personal Details:**
- Update name and descriptions in about.html
- Modify service descriptions
- Update package pricing and features
- Add your actual expertise areas

**Social Media Links:**
- Update social media URLs in the footer (LinkedIn, GitHub, Twitter, etc.)

### 3. Color Customization
Edit the CSS variables in `styles.css` (lines 6-16):

```css
:root {
    --primary-color: #1a1a1a;        /* Main dark color */
    --secondary-color: #ffffff;      /* Main light color */
    --accent-color: #4a4a4a;         /* Accent/hover color */
    --light-gray: #f5f5f5;           /* Light background */
    --text-dark: #2c2c2c;            /* Dark text */
    --text-light: #666666;           /* Light text */
}
```

## 🎬 Interactive Features

### Form Handling
- Contact form with validation
- Success/error notifications
- Email validation
- Required field checking

### Animations
- Fade-in animations for cards on scroll
- Hover effects on buttons and cards
- Smooth page transitions
- Header shadow on scroll

### Responsive Design
- Three breakpoints: 1024px, 768px, 480px
- Mobile-first approach
- Touch-friendly buttons
- Optimized navigation for mobile

## 📱 Responsive Breakpoints

- **Desktop**: 1024px and above
- **Tablet**: 768px to 1023px
- **Mobile**: Below 768px
- **Small Mobile**: Below 480px

## ⚙️ Customization Guide

### Change Color Scheme
1. Open `styles.css`
2. Modify CSS variables in `:root` selector
3. Changes apply throughout the site

### Add More Services
1. Duplicate a `.service-card` div in `services.html`
2. Update the service title, description, and features
3. CSS will automatically adjust the grid

### Modify Typography
1. Change font sizes in the typography section of `styles.css`
2. Update line heights and font weights as needed
3. Responsive typography is already built in

### Add New Sections
1. Create a new `<section>` with semantic HTML
2. Add corresponding CSS styles
3. Maintain the existing grid layout patterns

## 🔧 JavaScript Features

### Contact Form Validation
- Checks for required fields
- Validates email format
- Shows success/error messages

### Smooth Scrolling
- Internal anchor links scroll smoothly
- Skip to main content link for accessibility

### Scroll Effects
- Header shadow appears on scroll
- Fade-in animations for elements
- Dynamic navigation highlighting

### Lazy Loading
- Images load as they come into view
- Improves performance

## 📊 Browser Support

- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🚀 Deployment

### Using GitHub Pages
1. Create a GitHub repository
2. Push the portfolio folder to the repository
3. Enable GitHub Pages in repository settings
4. Select the main branch as source
5. Your site will be live at `username.github.io/portfolio`

### Using Web Hosting
1. Upload all files to your web hosting server
2. Ensure the folder structure is maintained
3. Access your portfolio via your domain

### Using Netlify
1. Connect your GitHub repository to Netlify
2. Set build command: (leave blank for static site)
3. Set publish directory: (root or portfolio folder)
4. Deploy!

## 📝 SEO Optimization

The portfolio includes:
- Semantic HTML structure
- Proper heading hierarchy (h1, h2, h3)
- Meta tags and viewport settings
- Alt text for images (add your descriptions)
- Fast loading with optimized images
- Mobile-responsive design
- Clean URL structure

### Enhance SEO Further:
1. Add descriptive alt text to all images
2. Update meta descriptions in each page
3. Add OpenGraph tags for social sharing
4. Create a sitemap.xml
5. Add robots.txt file

## 🐛 Troubleshooting

### Images Not Displaying
- Check file paths are correct
- Ensure images are in the `images/` folder
- Verify image file names match the code

### Styling Not Applied
- Clear browser cache (Ctrl+Shift+Del)
- Verify `styles.css` path is correct
- Check for typos in class names

### JavaScript Not Working
- Open browser console for errors (F12)
- Verify `script.js` path is correct
- Check file permissions

## 📞 Support & Customization

For further customization:
1. Modify CSS variables for colors
2. Edit HTML content directly
3. Expand JavaScript for additional features
4. Add more pages by following the existing structure

## 📄 License

This portfolio template is free to use and modify for personal and commercial purposes.

---

**Happy coding! Your portfolio is ready to impress clients and showcase your web development skills!** 🎉
