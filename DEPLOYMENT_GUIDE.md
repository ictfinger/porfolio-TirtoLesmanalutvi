# 🚀 Panduan Deploy Portfolio ke Vercel

## ✅ Persiapan Selesai!

Portfolio Anda sudah dikonversi dari PHP ke HTML statis dan siap di-deploy ke Vercel.

## 📋 Perubahan yang Telah Dilakukan:

1. ✅ Konversi `index.php` → `index.html`
2. ✅ Konversi `projects.php` → `projects.html`
3. ✅ Konversi `viewer.php` → `viewer.html`
4. ✅ Update semua link internal dari `.php` ke `.html`
5. ✅ Replace PHP date dengan JavaScript
6. ✅ Copy semua assets (CSS, JS, images) ke folder root
7. ✅ Buat konfigurasi `vercel.json` untuk static site
8. ✅ Buat `.vercelignore` untuk exclude file PHP

## 🌐 Cara Deploy ke Vercel

### Metode 1: Via Vercel CLI (Recommended)

1. **Install Vercel CLI**:
   ```bash
   npm install -g vercel
   ```

2. **Login ke Vercel**:
   ```bash
   vercel login
   ```
   - Pilih metode login (GitHub, GitLab, Bitbucket, atau Email)
   - Ikuti instruksi di browser

3. **Deploy Project**:
   ```bash
   cd c:\xampp\htdocs\PORFOLIO
   vercel
   ```
   
   Jawab pertanyaan:
   - Set up and deploy? → **Y**
   - Which scope? → Pilih account Anda
   - Link to existing project? → **N**
   - Project name? → **porfolio** (atau nama lain)
   - In which directory? → **./** (tekan Enter)
   - Override settings? → **N**

4. **Deploy ke Production**:
   ```bash
   vercel --prod
   ```

### Metode 2: Via GitHub + Vercel Dashboard

1. **Push ke GitHub**:
   ```bash
   git add .
   git commit -m "Convert to static HTML for Vercel"
   git push origin main
   ```

2. **Connect ke Vercel**:
   - Buka [vercel.com](https://vercel.com)
   - Login dengan GitHub
   - Klik "Add New Project"
   - Import repository `PORFOLIO`
   - Klik "Deploy"

### Metode 3: Via Vercel Dashboard (Upload Manual)

1. Buka [vercel.com](https://vercel.com)
2. Login ke account Anda
3. Klik "Add New Project"
4. Pilih "Browse" atau drag & drop folder project
5. Upload folder `PORFOLIO`
6. Klik "Deploy"

## 🔍 Verifikasi Deployment

Setelah deploy berhasil, Anda akan mendapat URL seperti:
```
https://porfolio-xxx.vercel.app
```

Test halaman-halaman berikut:
- ✅ Homepage: `https://porfolio-xxx.vercel.app/`
- ✅ Projects: `https://porfolio-xxx.vercel.app/projects.html`
- ✅ Viewer: `https://porfolio-xxx.vercel.app/viewer.html`

## 🎨 Custom Domain (Optional)

Jika ingin menggunakan domain sendiri:

1. Buka project di Vercel Dashboard
2. Klik "Settings" → "Domains"
3. Tambahkan domain Anda
4. Update DNS records sesuai instruksi Vercel

## 🐛 Troubleshooting

### Error: "No such file or directory"
- Pastikan Anda berada di folder `c:\xampp\htdocs\PORFOLIO`
- Jalankan `cd c:\xampp\htdocs\PORFOLIO`

### Error: "Vercel CLI not found"
- Install ulang: `npm install -g vercel`
- Atau gunakan: `npx vercel`

### Halaman 404 setelah deploy
- Periksa `vercel.json` sudah benar
- Pastikan file `index.html` ada di root folder

### Assets tidak muncul
- Periksa path di HTML: harus `assets/css/style.css` bukan `/assets/css/style.css`
- Clear cache browser (Ctrl + Shift + R)

## 📞 Support

Jika ada masalah:
1. Check Vercel deployment logs
2. Periksa browser console (F12)
3. Vercel Documentation: https://vercel.com/docs

## 🎉 Selesai!

Portfolio Anda sekarang siap di-deploy ke Vercel dan bisa diakses dari mana saja!
