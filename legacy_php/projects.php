<?php include 'includes/header.php'; ?>

<section class="hero-section pt-5 pb-5">
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">My <span class="text-primary-gradient">Projects</span></h1>
            <p class="text-muted lead">Explore my latest work and applications.</p>
        </div>

        <div class="row g-4">
            <!-- Attendance App -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/images/project_attendance.png" alt="Attendance App">
                    <div class="portfolio-overlay">
                        <h4>Attendance App</h4>
                        <p>HC Management System</p>
                        <div class="d-flex gap-2 mt-3">
                            <a href="viewer.php?url=https://attendance-pgasol.vercel.app/&title=Attendance App"
                                class="btn btn-sm btn-primary rounded-pill">
                                <i class="fas fa-eye me-1"></i> Live Preview
                            </a>
                            <a href="https://attendance-pgasol.vercel.app/" target="_blank"
                                class="btn btn-sm btn-light rounded-pill">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All System App -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/images/project_inv_app.png" alt="All System App">
                    <div class="portfolio-overlay">
                        <h4>All System App</h4>
                        <p>Portal Event & Maintenance</p>
                        <div class="d-flex gap-2 mt-3">
                            <a href="viewer.php?url=https://inv-app-kappa.vercel.app/&title=All System App" class="btn btn-sm btn-primary rounded-pill">
                                <i class="fas fa-eye me-1"></i> Live Preview
                            </a>
                            <a href="https://inv-app-kappa.vercel.app/" target="_blank" class="btn btn-sm btn-light rounded-pill">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>