# Portfolio Website

Portfolio website yang telah dikonversi dari PHP ke HTML statis untuk deployment di Vercel.

## 🚀 Deployment ke Vercel

### Cara Deploy:

1. **Install Vercel CLI** (jika belum):
   ```bash
   npm install -g vercel
   ```

2. **Login ke Vercel**:
   ```bash
   vercel login
   ```

3. **Deploy Project**:
   ```bash
   vercel
   ```
   
   Atau untuk production:
   ```bash
   vercel --prod
   ```

### Alternatif: Deploy via Vercel Dashboard

1. Buka [vercel.com](https://vercel.com)
2. Login dengan GitHub/GitLab/Bitbucket
3. Klik "Add New Project"
4. Import repository ini
5. Vercel akan otomatis detect sebagai static site
6. Klik "Deploy"

## 📁 Struktur File

```
PORFOLIO/
├── index.html          # Halaman utama
├── projects.html       # Halaman projects
├── viewer.html         # Project viewer
├── vercel.json         # Konfigurasi Vercel
├── .vercelignore       # File yang diabaikan saat deploy
├── assets/
│   ├── css/
│   │   ├── style.css
│   │   └── github_style.css
│   ├── js/
│   │   ├── script.js
│   │   └── github_api.js
│   └── images/
└── legacy_php/         # Folder PHP lama (tidak di-deploy)
```

## ✨ Fitur

- ✅ Fully responsive design
- ✅ Modern UI dengan Inter font
- ✅ GitHub API integration
- ✅ Project viewer dengan device preview
- ✅ SEO optimized
- ✅ Fast loading dengan static HTML

## 🔧 Perubahan dari PHP ke HTML

- Konversi semua file `.php` menjadi `.html`
- Replace PHP includes dengan HTML langsung
- Replace `<?php echo date('Y'); ?>` dengan JavaScript
- Update semua link internal dari `.php` ke `.html`
- Konfigurasi Vercel untuk static site deployment

## 📝 Notes

- Folder `legacy_php/` berisi file PHP original (tidak akan di-deploy)
- Semua assets sudah disalin ke folder `assets/` di root
- Website sekarang 100% static dan siap di-deploy ke Vercel

## 🌐 Live Demo

Setelah deploy, website akan tersedia di:
`https://your-project-name.vercel.app`
