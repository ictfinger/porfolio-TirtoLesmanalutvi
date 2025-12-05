# 🔑 Panduan Push ke GitHub dengan Personal Access Token

## Error yang Terjadi:
```
remote: Permission denied
fatal: unable to access 'https://github.com/...': The requested URL returned error: 403
```

Ini karena GitHub tidak lagi menerima password untuk authentication. Kita perlu menggunakan **Personal Access Token**.

---

## 📋 Langkah-Langkah:

### **1. Buat Personal Access Token di GitHub**

Browser sudah terbuka ke halaman token, atau buka manual:
👉 https://github.com/settings/tokens/new

**Di halaman tersebut:**
1. **Note**: Isi dengan `Portfolio Deployment`
2. **Expiration**: Pilih `90 days` atau `No expiration`
3. **Select scopes**: ✅ Centang **`repo`** (full control of private repositories)
4. Scroll ke bawah, klik **"Generate token"**
5. **PENTING**: COPY token yang muncul (contoh: `ghp_xxxxxxxxxxxxxxxxxxxx`)
   - Token hanya muncul SEKALI!
   - Simpan di tempat aman

---

### **2. Push dengan Token**

Setelah dapat token, jalankan command ini di PowerShell:

```powershell
# Ganti YOUR_TOKEN_HERE dengan token yang Anda copy
git push https://YOUR_TOKEN_HERE@github.com/ictfinger/porfolio-TirtoLesmanalutvi.git main
```

**Contoh:**
```powershell
git push https://ghp_abc123xyz789@github.com/ictfinger/porfolio-TirtoLesmanalutvi.git main
```

---

### **3. (Optional) Simpan Credential Permanent**

Agar tidak perlu input token setiap kali push:

```powershell
# Set credential helper
git config --global credential.helper store

# Push sekali dengan token (seperti step 2)
git push https://YOUR_TOKEN@github.com/ictfinger/porfolio-TirtoLesmanalutvi.git main

# Setelah ini, git push origin main akan otomatis menggunakan token tersimpan
```

---

### **4. Alternatif: Update Remote URL dengan Token**

```powershell
# Update remote URL dengan token embedded
git remote set-url origin https://YOUR_TOKEN@github.com/ictfinger/porfolio-TirtoLesmanalutvi.git

# Setelah ini, bisa langsung:
git push origin main
```

---

## ⚡ Quick Command (Copy-Paste Ready)

Setelah dapat token dari GitHub, jalankan ini:

```powershell
# Ganti YOUR_TOKEN dengan token Anda
$token = "YOUR_TOKEN"
git push https://$token@github.com/ictfinger/porfolio-TirtoLesmanalutvi.git main
```

---

## 🎯 Checklist:

- [ ] Buka https://github.com/settings/tokens/new
- [ ] Buat token dengan scope `repo`
- [ ] Copy token (ghp_xxxxx...)
- [ ] Jalankan: `git push https://TOKEN@github.com/ictfinger/porfolio-TirtoLesmanalutvi.git main`
- [ ] Verifikasi di GitHub bahwa code sudah ter-push

---

## 🆘 Troubleshooting:

**Q: Token tidak muncul setelah generate?**
A: Token hanya muncul sekali. Buat token baru jika hilang.

**Q: Masih error 403?**
A: Pastikan token memiliki scope `repo` dan belum expired.

**Q: Tidak mau simpan token di command?**
A: Gunakan credential helper: `git config --global credential.helper store`

---

## ✅ Setelah Berhasil Push:

1. Buka repository: https://github.com/ictfinger/porfolio-TirtoLesmanalutvi
2. Verifikasi file baru sudah ada
3. Lanjut deploy ke Vercel!
