# Quick Push Script - Run this after making changes

Write-Host "🚀 Pushing updates to GitHub and Vercel..." -ForegroundColor Cyan
Write-Host ""

# Check for changes
$status = git status --short
if (-not $status) {
    Write-Host "✅ No changes to push" -ForegroundColor Green
    exit 0
}

# Show what will be pushed
Write-Host "📝 Changes to push:" -ForegroundColor Yellow
git status --short
Write-Host ""

# Push to GitHub
Write-Host "📤 Pushing to GitHub..." -ForegroundColor Yellow
git push origin main

if ($LASTEXITCODE -eq 0) {
    Write-Host ""
    Write-Host "✅ SUCCESS! Changes pushed to GitHub" -ForegroundColor Green
    Write-Host "🌐 Vercel will auto-deploy in ~30 seconds" -ForegroundColor Cyan
    Write-Host ""
    Write-Host "Check deployment status at:" -ForegroundColor White
    Write-Host "https://vercel.com/dashboard" -ForegroundColor Blue
}
else {
    Write-Host ""
    Write-Host "❌ Push failed!" -ForegroundColor Red
    Write-Host "Run: .\push-to-github.ps1 (if you need to re-authenticate)" -ForegroundColor Yellow
}

Write-Host ""
