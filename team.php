<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - TechSphere</title>
    <meta name="description" content="Meet the talented team behind TechSphere - Our experts in software development, design, and digital solutions.">

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

    <!-- Team Section -->
    <section class="section team-section">
        <div class="container">
            <div class="section-title">
                <h2>Meet Our Team</h2>
                <p>Our talented team of experts is ready to bring your ideas to life</p>
            </div>

            <div class="team-grid">
                <!-- Team Member 1 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team-1.jpg" alt="Team Member 1">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>John Doe</h3>
                        <p class="position">CEO & Founder</p>
                        <p class="bio">With over 15 years of experience in software development, John leads our team with vision and expertise.</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team-2.jpg" alt="Team Member 2">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Jane Smith</h3>
                        <p class="position">Lead Developer</p>
                        <p class="bio">Jane specializes in full-stack development and brings innovative solutions to complex technical challenges.</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team-3.jpg" alt="Team Member 3">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Mike Johnson</h3>
                        <p class="position">UI/UX Designer</p>
                        <p class="bio">Mike creates beautiful and intuitive user interfaces that enhance the user experience.</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team-4.jpg" alt="Team Member 4">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Sarah Wilson</h3>
                        <p class="position">Project Manager</p>
                        <p class="bio">Sarah ensures smooth project delivery and excellent client communication throughout the development process.</p>
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