<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/github_style.css">
</head>

<body>

    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    $homeLink = ($currentPage == 'index.php') ? '#home' : 'index.php#home';
    $aboutLink = ($currentPage == 'index.php') ? '#about' : 'index.php#about';
    $servicesLink = ($currentPage == 'index.php') ? '#services' : 'index.php#services';
    $portfolioLink = ($currentPage == 'index.php') ? '#portfolio' : 'index.php#portfolio';
    ?>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">PORTFOLIO.</a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>"
                            href="<?php echo $homeLink; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $aboutLink; ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $servicesLink; ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $portfolioLink; ?>">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'projects.php') ? 'active' : ''; ?>"
                            href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="https://wa.me/6281363364465" target="_blank"><i
                                class="fab fa-whatsapp me-2"></i>WhatsApp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>