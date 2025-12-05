# GitHub Push Helper Script
# Jalankan script ini setelah mendapat Personal Access Token dari GitHub

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "   GitHub Push Helper - Portfolio" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Cek apakah ada changes yang sudah di-commit
$gitStatus = git status --short
if ($gitStatus) {
    Write-Host "⚠️  Ada perubahan yang belum di-commit!" -ForegroundColor Yellow
    Write-Host "Jalankan dulu: git add . && git commit -m 'your message'" -ForegroundColor Yellow
    Write-Host ""
}

# Minta token dari user
Write-Host "📋 Langkah-langkah:" -ForegroundColor Green
Write-Host "1. Buka: https://github.com/settings/tokens/new" -ForegroundColor White
Write-Host "2. Note: Portfolio Deployment" -ForegroundColor White
Write-Host "3. Scope: Centang 'repo'" -ForegroundColor White
Write-Host "4. Generate token dan COPY" -ForegroundColor White
Write-Host ""

$token = Read-Host "Paste Personal Access Token Anda di sini"

if ([string]::IsNullOrWhiteSpace($token)) {
    Write-Host "❌ Token tidak boleh kosong!" -ForegroundColor Red
    exit 1
}

Write-Host ""
Write-Host "🚀 Pushing to GitHub..." -ForegroundColor Yellow

# Push dengan token
$repoUrl = "https://$token@github.com/ictfinger/porfolio-TirtoLesmanalutvi.git"
git push $repoUrl main

if ($LASTEXITCODE -eq 0) {
    Write-Host ""
    Write-Host "✅ BERHASIL! Code sudah di-push ke GitHub!" -ForegroundColor Green
    Write-Host ""
    Write-Host "🔗 Cek repository: https://github.com/ictfinger/porfolio-TirtoLesmanalutvi" -ForegroundColor Cyan
    Write-Host ""
    Write-Host "📌 Next Step: Deploy ke Vercel" -ForegroundColor Yellow
    Write-Host "   Jalankan: vercel --prod" -ForegroundColor White
    Write-Host ""
    
    # Tanya apakah mau simpan credential
    $save = Read-Host "Simpan credential untuk push berikutnya? (y/n)"
    if ($save -eq "y" -or $save -eq "Y") {
        git config --global credential.helper store
        git remote set-url origin $repoUrl
        Write-Host "✅ Credential tersimpan. Next time bisa langsung: git push origin main" -ForegroundColor Green
    }
} else {
    Write-Host ""
    Write-Host "❌ Push gagal! Periksa token Anda." -ForegroundColor Red
    Write-Host "Pastikan token memiliki scope 'repo' dan belum expired." -ForegroundColor Yellow
}

Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
