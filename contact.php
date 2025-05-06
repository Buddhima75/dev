<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TechSphere</title>
    <meta name="description" content="Get in touch with TechSphere for innovative software solutions and digital transformation">

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
                <span>Connect</span>
                <span>Collaborate</span>
                <span>Create</span>
            </div>
            <div class="hero-headline">
                <h1>Contact Us
                    <span class="gradient-text">Let's Build Together</span>
                </h1>
            </div>
            <div class="hero-description">
                <p>Have a project in mind? We'd love to hear about it. Get in touch with us and let's create something amazing together.</p>
            </div>
        </div>
    </section>

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
                                        <p>Malabe, Colombo,<br>Sri Lanka</p>
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

                                <div class="contact-info-item full-width">
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

    <!-- Map Location Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-wrapper">
                <div class="map-content">
                    <div class="map-info text-center">
                        <h3>Our Location</h3>
                        <p>Visit us at our office in Malabe, where innovation meets excellence.</p>
                        <div class="location-details">
                            <div class="location-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Malabe, Colombo, Sri Lanka</span>
                            </div>
                            <div class="location-item">
                                <i class="fas fa-clock"></i>
                                <span>Mon - Fri: 9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="location-item">
                                <i class="fas fa-phone-alt"></i>
                                <span>+94 76 979 1233</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-frame">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.347175900541!2d79.95750771914059!3d6.914682516573097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sMalabe!5e0!3m2!1sen!2slk!4v1709703163133!5m2!1sen!2slk"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
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