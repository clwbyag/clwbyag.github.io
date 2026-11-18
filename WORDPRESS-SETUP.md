# WordPress Setup Guide — CLW: The Changing Tracks

You already have a **complete working website** in this folder (`index.html` and linked pages). Open `index.html` in a browser to preview immediately.

Use this guide when you are ready to publish on WordPress (WordPress.com or self-hosted).

---

## Option A — Fastest for university submission (recommended first)

1. Keep using the HTML site in `Desktop/tua`.
2. Replace placeholders with your photos, audio and video in `assets/`.
3. Zip the `tua` folder or host it on Netlify / GitHub Pages / your college server.
4. Present the live URL or open `index.html` offline.

This already meets the multimedia journalism brief: multiple pages, navigation, interviews, photo essay, data placeholders, SEO meta tags, responsive layout.

---

## Option B — WordPress.com (like the reference site)

The reference project uses WordPress.com. You can recreate the same structure with pages + a clean theme + Custom CSS.

### 1. Create the site
- Go to [wordpress.com](https://wordpress.com) → Create site.
- Site title: **CLW: The Changing Tracks**
- Pick a free theme close to editorial style (e.g. **Twenty Twenty-Four**, **Rockfield**, or **Schrift**), then restyle with CSS below.

### 2. Create these Pages (Pages → Add New)

| Page title | Slug suggestion |
|---|---|
| Home | (set as homepage) |
| The Story | `the-story` |
| History of CLW | `history-of-clw` |
| The Changing Tracks | `the-changing-tracks` |
| Voices from CLW | `voices-from-clw` |
| Multimedia | `multimedia` |
| Photo Story | `photo-story` |
| Data Story | `data-story` |
| About the Project | `about-the-project` |
| From Manufacturing Hub to Assembly Unit? | `manufacturing-to-assembly` |
| The Privatisation Debate | `privatisation-debate` |
| Workers' Concerns and the Future of Employment | `workers-concerns` |
| The Changing Face of Indigenous Railway Manufacturing | `indigenous-manufacturing` |

Copy text from the matching `.html` files in this folder into each page (Gutenberg blocks).

### 3. Settings → Reading
- Your homepage displays: **A static page**
- Homepage: **Home**

### 4. Appearance → Menus
Create menu **Primary** with all navigation items in this order:
Home · The Story · History of CLW · The Changing Tracks · Voices from CLW · Multimedia · Photo Story · Data Story · About the Project

### 5. Gutenberg homepage layout (blocks)

1. **Cover** block (full width) — upload locomotive/factory photo  
   - Heading: `CLW: A LEGACY ON THE LINE`  
   - Paragraph: subheadline from the brief  
   - Button: `Explore the Story` → link to `#intro` or The Story page  

2. **Spacer**

3. **Columns** (60/40) for Introduction + “How to read this project” note

4. **Heading** — Featured Stories  

5. **Query Loop** or five **Media & Text / Group** cards linking to story pages

6. Upload Media → Audio / Video for Voices and Multimedia pages  
   Use **Audio** and **Video** blocks (or YouTube embed).

### 6. Custom CSS (Appearance → Customize → Additional CSS)

Paste a shortened version of brand colours if you cannot upload the full theme:

```css
:root {
  --charcoal: #141414;
  --rail-red: #a83a3a;
  --off-white: #f3f1ee;
}
body { background: #faf9f7; color: #141414; }
.wp-block-cover { min-height: 85vh; }
.wp-block-button__link {
  background: #a83a3a !important;
  border-radius: 0 !important;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}
```

For the full editorial look, use **Option C** (custom theme) on self-hosted WordPress or LocalWP.

---

## Option C — Self-hosted / LocalWP / Hostinger (full theme)

1. Install WordPress locally (LocalWP) or on hosting.
2. Zip the folder `wordpress-theme/clw-changing-tracks`.
3. WP Admin → Appearance → Themes → Add New → Upload Theme → Activate.
4. Create the pages listed above; set Home as front page.
5. Appearance → Menus → assign **Primary** and **Footer**.
6. Media Library: upload photos/audio/video; insert into pages.
7. Edit page content in Gutenberg — theme wraps header/footer automatically.

Theme files expect CSS/JS at:
`wp-content/themes/clw-changing-tracks/assets/css/style.css`
`wp-content/themes/clw-changing-tracks/assets/js/main.js`

(These are already copied into the theme folder.)

---

## SEO checklist (every page)

- Unique title (already drafted in HTML `<title>` tags)
- Meta description (HTML already includes them; on WP use an SEO plugin or page excerpt)
- Descriptive image `alt` text
- Compress images before upload
- Prefer MP3 for audio; H.264 MP4 for video

---

## Neutrality reminder

When pasting content into WordPress, keep the attribution boxes:
- Verified facts
- Workers’ allegations
- Official statements
- Open questions

Do not present privatisation as confirmed unless you add documentary evidence.
