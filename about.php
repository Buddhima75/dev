<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - TechSphere</title>
    <meta name="description" content="Learn more about TechSphere and our mission to deliver innovative software solutions">

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

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .hero {
            position: relative;
            margin-bottom: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            overflow: hidden;
        }

        #particles-js {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-tag {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .hero-tag span {
            background: rgba(59, 130, 246, 0.1);
            color: #60a5fa;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .hero-headline h1 {
            font-size: 3.5rem;
            color: white;
            margin-bottom: 1rem;
        }

        .gradient-text {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: block;
        }

        .hero-description {
            color: #94a3b8;
            margin-bottom: 2rem;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* Make sure header is above particles */
        header {
            position: relative;
            z-index: 3;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div id="particles-js"></div>
        <div class="hero-content">
            <div class="hero-tag">
                <span>Innovative</span>
                <span>Passionate</span>
                <span>Expert</span>
            </div>
            <div class="hero-headline">
                <h1>About Us
                    <span class="gradient-text">Our Story & Vision</span>
                </h1>
            </div>
            <div class="hero-description">
                <p>We are a team of passionate developers and designers dedicated to creating innovative digital solutions that help businesses thrive in the modern world.</p>
            </div>
        </div>
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

    <!-- Particles.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script>
        window.addEventListener('load', function() {
            if (typeof particlesJS !== 'undefined') {
                particlesJS('particles-js', {
                    particles: {
                        number: {
                            value: 80,
                            density: {
                                enable: true,
                                value_area: 800
                            }
                        },
                        color: {
                            value: '#ffffff'
                        },
                        shape: {
                            type: 'circle'
                        },
                        opacity: {
                            value: 0.5,
                            random: false,
                            anim: {
                                enable: true,
                                speed: 1,
                                opacity_min: 0.1,
                                sync: false
                            }
                        },
                        size: {
                            value: 2,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 2,
                                size_min: 0.1,
                                sync: false
                            }
                        },
                        line_linked: {
                            enable: true,
                            distance: 150,
                            color: '#ffffff',
                            opacity: 0.2,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: 'none',
                            random: true,
                            straight: false,
                            out_mode: 'out',
                            bounce: false,
                            attract: {
                                enable: true,
                                rotateX: 600,
                                rotateY: 1200
                            }
                        }
                    },
                    interactivity: {
                        detect_on: 'canvas',
                        events: {
                            onhover: {
                                enable: true,
                                mode: 'grab'
                            },
                            onclick: {
                                enable: true,
                                mode: 'push'
                            },
                            resize: true
                        },
                        modes: {
                            grab: {
                                distance: 140,
                                line_linked: {
                                    opacity: 0.5
                                }
                            },
                            push: {
                                particles_nb: 4
                            }
                        }
                    },
                    retina_detect: true
                });
            }
        });
    </script>
</body>

</html>