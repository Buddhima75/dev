<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - TechSphere</title>
    <meta name="description" content="Learn more about TechSphere - Our mission, vision, and team.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/hero-styles.css">
    <link rel="stylesheet" href="css/typing-animation.css">
    <link rel="stylesheet" href="css/landing-animation.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <div class="hero-circle circle-1"></div>
            <div class="hero-circle circle-2"></div>
            <div class="hero-circle circle-3"></div>
        </div>
        <div class="hero-flex-container">
            <div class="hero-content">
                <div class="hero-headline">
                    <div class="hero-tag">
                        <span>Innovative</span>
                        <span>Passionate</span>
                        <span>Expert</span>
                    </div>
                    <h1>About Us
                        <span class="gradient-text">Our Story</span>
                    </h1>
                </div>
                <div class="hero-description">
                    <div class="accent-line"></div>
                    <p>We are a team of passionate innovators, designers, and developers dedicated to transforming your digital vision into reality. With years of experience and a commitment to excellence, we deliver cutting-edge solutions that drive business growth.</p>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">8+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Happy Clients</span>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="particles-container" id="particles-js"></div>
    </section>

    <!-- About Section -->
    <section class="section animate-on-scroll">
        <div class="container">
            <div class="section-title animate-item">
                <div class="title-row">
                    <span class="subtitle">FEATURES</span><br>
                    <h2>Empowering Digital Innovation</h2>
                </div>
                <p class="section-subtitle">Transforming ideas into powerful digital solutions</p>
            </div>
            <div class="about-content">
                <div class="about-text animate-item">
                    <h3>Delivering AI-Powered Solutions</h3>
                    <p>Transform your business with our innovative approach to AI-Powered Solutions. We specialize in delivering cutting-edge artificial intelligence applications that enhance efficiency, drive insights, and propel your organization into the future.</p>
                    <p>Unlock the full potential of advanced technology with our tailored solutions, shaping a smarter and more competitive landscape for your industry.</p>
                    <div class="about-features">
                        <div class="feature-item animate-item">
                            <i class="fas fa-code"></i>
                            <div class="feature-text">
                                <h4>Expert Development Team</h4>
                                <p>Skilled software engineers and designers</p>
                            </div>
                        </div>
                        <div class="feature-item animate-item">
                            <i class="fas fa-cogs"></i>
                            <div class="feature-text">
                                <h4>Custom Solutions</h4>
                                <p>Tailored to your business needs</p>
                            </div>
                        </div>
                        <div class="feature-item animate-item">
                            <i class="fas fa-rocket"></i>
                            <div class="feature-text">
                                <h4>Agile Methodology</h4>
                                <p>Fast and efficient development</p>
                            </div>
                        </div>
                        <div class="feature-item animate-item">
                            <i class="fas fa-headset"></i>
                            <div class="feature-text">
                                <h4>Ongoing Support</h4>
                                <p>Continuous maintenance and updates</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image animate-item">
                    <img src="images/ab.png" alt="Team working together on software development">
                    <div class="experience-badge animate-item">
                        <span class="years">8+</span>
                        <span class="text">Years of<br>Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <img src="images/dev.png" alt="TechSphere Logo">
                    </div>
                    <p>We create innovative digital solutions that help businesses grow and succeed in today's competitive market.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li>Custom Software Development</li>
                        <li>Web Development</li>
                        <li>Mobile App Development</li>
                        <li>Cloud Solutions</li>
                        <li>Data Analytics</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="team.php">Our Team</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Subscribe</h3>
                    <p>Subscribe to our newsletter to receive updates on our latest projects and tech insights.</p>
                    <div class="subscribe-form">
                        <input type="email" placeholder="Your Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2023 TechSphere. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a href="#" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
    <script>
        // Navigation handling
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const page = this.getAttribute('data-page');
                    window.location.href = page;
                });
            });
        });
    </script>
</body>

</html>