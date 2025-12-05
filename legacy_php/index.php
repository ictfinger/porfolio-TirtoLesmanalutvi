<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="home" class="hero-section d-flex align-items-center">
    <div class="hero-bg-glow"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-3 fw-bold mb-4">Creative <br><span class="text-gradient">Developer</span> & <span
                        class="text-gradient">Designer</span></h1>
                <p class="hero-subtitle mb-5">I build digital experiences that blend design and technology to create
                    impactful solutions.</p>
                <div class="d-flex gap-3">
                    <a href="#portfolio" class="btn btn-primary btn-lg">View My Work</a>
                    <a href="https://wa.me/6281363364465" target="_blank" class="btn btn-outline-light btn-lg"><i
                            class="fab fa-whatsapp me-2"></i>WhatsApp</a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="hero-img-wrapper position-relative">
                    <img src="assets/images/hero.png" alt="Hero Image"
                        class="img-fluid rounded-4 shadow-lg position-relative z-1">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative p-4">
                    <div
                        class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary rounded-4 opacity-10 blur-3xl">
                    </div>
                    <img src="assets/images/profile.jpg" alt="About Me"
                        class="img-fluid rounded-4 position-relative z-1 border border-white border-opacity-10 shadow-lg">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2 class="section-title">About Me</h2>
                <p class="section-subtitle mb-4">Passionate Full Stack Developer & UI/UX Enthusiast</p>

                <p class="text-muted mb-4">With over 5 years of experience in building web applications, I specialize in
                    creating seamless, user-centric digital products. My expertise spans across modern frontend
                    frameworks and robust backend systems.</p>

                <div class="row g-4 mb-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-sm-square rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Clean Code</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-sm-square rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Modern Design</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-sm-square rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Responsive</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-sm-square rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">SEO Optimized</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title">My Services</h2>
            <p class="section-subtitle mx-auto">I offer a wide range of services to help you build your digital
                presence.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h4>Web Development</h4>
                    <p class="text-muted mt-3">Building fast, responsive, and secure websites using the latest
                        technologies.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h4>UI/UX Design</h4>
                    <p class="text-muted mt-3">Creating intuitive and beautiful interfaces that provide great user
                        experiences.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4>Mobile Apps</h4>
                    <p class="text-muted mt-3">Developing cross-platform mobile applications for iOS and Android.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section (GitHub Repos) -->
<section id="portfolio" class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Open Source</h2>
            <p class="section-subtitle mx-auto">My contributions to the open source community.</p>
        </div>

        <div class="row g-4" id="github-repos-container">
            <!-- Repos will be loaded here -->
            <div class="col-12 text-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="https://github.com/" target="_blank" id="github-profile-link"
                class="btn btn-outline-light rounded-pill">View All Repositories</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle mx-auto">Have a project in mind? Let's talk about it.</p>

                <form class="row g-4 mt-4 text-start">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>