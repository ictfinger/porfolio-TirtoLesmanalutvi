# GitHub SSH Setup Script
# Run this once to setup SSH authentication

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "   GitHub SSH Key Setup" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Check if SSH key already exists
$sshKeyPath = "$env:USERPROFILE\.ssh\id_rsa"
if (Test-Path "$sshKeyPath.pub") {
    Write-Host "✓ SSH key already exists!" -ForegroundColor Green
    Write-Host ""
    Write-Host "Your public key:" -ForegroundColor Yellow
    Get-Content "$sshKeyPath.pub"
    Write-Host ""
}
else {
    Write-Host "Generating new SSH key..." -ForegroundColor Yellow
    
    # Get email
    $email = Read-Host "Enter your GitHub email"
    
    # Generate SSH key
    ssh-keygen -t rsa -b 4096 -C $email -f $sshKeyPath -N '""'
    
    Write-Host ""
    Write-Host "✓ SSH key generated!" -ForegroundColor Green
    Write-Host ""
    Write-Host "Your public key:" -ForegroundColor Yellow
    Get-Content "$sshKeyPath.pub"
    Write-Host ""
}

# Copy to clipboard
Get-Content "$sshKeyPath.pub" | Set-Clipboard
Write-Host "✓ Public key copied to clipboard!" -ForegroundColor Green
Write-Host ""

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Next Steps:" -ForegroundColor Yellow
Write-Host "1. Go to: https://github.com/settings/ssh/new" -ForegroundColor White
Write-Host "2. Title: 'Portfolio PC'" -ForegroundColor White
Write-Host "3. Paste the key (already in clipboard)" -ForegroundColor White
Write-Host "4. Click 'Add SSH key'" -ForegroundColor White
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Ask to open browser
$open = Read-Host "Open GitHub SSH settings in browser? (y/n)"
if ($open -eq "y" -or $open -eq "Y") {
    Start-Process "https://github.com/settings/ssh/new"
}

Write-Host ""
Write-Host "After adding SSH key to GitHub, run:" -ForegroundColor Yellow
Write-Host "  git remote set-url origin git@github.com:ictfinger/porfolio-TirtoLesmanalutvi.git" -ForegroundColor Green
Write-Host "  git push origin main" -ForegroundColor Green
Write-Host ""
