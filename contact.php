<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TechSphere</title>
    <meta name="description" content="Get in touch with TechSphere for your software development needs. We're here to help bring your ideas to life.">

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

    <!-- Contact Section -->
    <section class="section contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-card">
                    <div class="contact-header">
                        <h2>Let's Create Something Amazing Together</h2>
                        <p class="contact-subtitle">Have an idea? We're here to help bring it to life.</p>
                    </div>

                    <div class="contact-content">
                        <div class="contact-info">
                            <div class="contact-info-grid">
                                <div class="contact-info-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h4>Visit Us</h4>
                                        <p>Malabe, Colombo, Sri Lanka</p>
                                    </div>
                                </div>

                                <div class="contact-info-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h4>Email Us</h4>
                                        <p>info@devlk.com</p>
                                        <p>rasika@devlk.com</p>
                                    </div>
                                </div>

                                <div class="contact-info-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h4>Call Us</h4>
                                        <p>+94 76 979 1233</p>
                                        <p>+94 74 209 9194</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contact-form-wrapper">
                            <form class="contact-form">
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                        <span class="focus-border"></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    <span class="focus-border"></span>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Tell us about your project..." required></textarea>
                                    <span class="focus-border"></span>
                                </div>

                                <button type="submit" class="btn btn-submit">
                                    <span>Send Message</span>
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
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