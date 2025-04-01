<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSphere - Software Development Company</title>
    <meta name="description" content="TechSphere is a leading software development company specializing in custom software solutions, web development, mobile apps, and digital transformation.">

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
    <link rel="stylesheet" href="css/mobile-fixes.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">
                    <img src="images/dev.png" alt="TechSphere" class="logo-img">
                </a>

                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <!-- Creative Hero Layout -->
        <div class="hero-background">
            <div class="hero-circle circle-1"></div>
            <div class="hero-circle circle-2"></div>
            <div class="hero-circle circle-3"></div>
        </div>

        <div class="container">
            <div class="hero-flex-container">
                <div class="hero-content">
                    <div class="hero-tag"><span style="color: white !important;">Innovative</span> <span style="color: white !important;">Powerful</span> <span style="color: white !important;">Intelligent</span></div>
                    <div class="hero-headline">
                        <h1>Transforming Concepts into</h1>
                        <div class="creative-title">
                            <span class="highlight">Unreal Creations</span>
                        </div>
                    </div>
                    <div class="hero-description">
                        <div class="accent-line"></div>
                        <p>At DevLK, we manage the entire development lifecycle, from idea conceptualization to final deployment and beyond. Our structured approach ensures that every project is handled with precision and care, delivering exceptional results on time and within budget.</p>
                    </div>
                    <div class="hero-btns">
                        <a href="#services" class="btn btn-animated">
                            <span class="btn-text">Our Services</span>
                            <span class="btn-icon"><i class="fas fa-arrow-right"></i></span>
                        </a>
                        <a href="#contact" class="btn btn-secondary btn-animated">
                            <span class="btn-text">Get in Touch</span>
                        </a>
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
                            <span class="stat-number">98%</span>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ai-robot-image-left">
            <img src="images/aa2.png" alt="AI Robot Left" class="floating-robot">
        </div>
        <div class="ai-robot-image">
            <img src="images/aa.png" alt="AI Robot" class="floating-robot">
        </div>
        <div class="particles-container" id="particles-js"></div>
    </section>

    <!-- Service Features Section -->
    <section class="service-features">
        <div class="container service-features-container">
            <div class="section-title" style="margin-bottom: 2.5rem;">
                <h2 class="core-services-title">Our Core Services</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Custom Web Development Solutions</h3>
                    <p>At DevLK, we specialize in creating custom-built websites tailored to meet your business's unique needs. Whether you need a sleek portfolio site, a high-performing e-commerce platform, or a complex web application, our team ensures a seamless design and user-friendly experience.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile App Development</h3>
                    <p>Transform your ideas into powerful mobile applications with our app development services. Whether it's a native app for Android/iOS or a cross-platform solution, we design intuitive, feature-rich apps that provide seamless functionality and engaging user experiences.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Client-Centric Approach</h3>
                    <p>We believe that collaboration and communication are at the heart of every successful project. At DevLK, we prioritize understanding your goals and keeping you involved at every stage of the development process. From initial consultations to final delivery, we ensure transparency.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Robust Security and Maintenance</h3>
                    <p>Your digital assets deserve the best protection and care. DevLK offers robust security features for all websites and apps we create, including SSL certificates, secure coding practices, and regular updates. Our post-launch maintenance services ensure your platform remains optimized.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-title">
                <h2>About Us</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>We Create Digital Solutions That Drive Success</h3>
                    <p>TechSphere is a leading software development company dedicated to providing cutting-edge solutions for businesses across various industries. With over 8 years of experience, we've helped hundreds of clients achieve their digital transformation goals.</p>
                    <p>Our team of experts combines technical excellence with creative thinking to deliver innovative solutions that solve complex business challenges. We believe in building long-term relationships with our clients through transparency, collaboration, and a commitment to excellence.</p>
                    <ul>
                        <li>Experienced team of software engineers and designers</li>
                        <li>Custom-tailored solutions to meet specific business needs</li>
                        <li>Agile development methodology for faster, better results</li>
                        <li>Ongoing support and maintenance for all projects</li>
                    </ul>
                </div>
                <div class="about-image">
                    <img src="images/about-img.jpg" alt="Team working together on software development">
                </div>
                <div class="right-side-image">
                    <img src="images/aaaa.png" alt="AI Technology" class="large-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section" style="background-color: #f1f5f9;">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Custom Software Development</h3>
                    <p>We build tailored software solutions designed to meet your unique business requirements and challenges.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>From responsive websites to complex web applications, we create engaging online experiences that deliver results.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile App Development</h3>
                    <p>We develop intuitive, high-performance mobile applications for iOS and Android platforms.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Cloud Solutions</h3>
                    <p>Our cloud expertise helps businesses scale efficiently and securely in AWS, Azure, or Google Cloud environments.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Data Analytics</h3>
                    <p>Transform your data into actionable insights with our advanced analytics and business intelligence solutions.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Cybersecurity</h3>
                    <p>Protect your digital assets with our comprehensive security assessments and implementation services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Our Portfolio</h2>
            </div>

            <ul class="portfolio-filter">
                <li class="active" data-filter="all">All</li>
                <li data-filter="web">Web Development</li>
                <li data-filter="mobile">Mobile Apps</li>
                <li data-filter="software">Custom Software</li>
            </ul>

            <div class="portfolio-grid">
                <div class="portfolio-item web">
                    <img src="images/portfolio-1.jpg" alt="E-commerce platform">
                    <div class="portfolio-overlay">
                        <h3>E-commerce Platform</h3>
                        <p>Web Development, UX/UI Design</p>
                    </div>
                </div>

                <div class="portfolio-item mobile">
                    <img src="images/portfolio-2.jpg" alt="Health & Fitness App">
                    <div class="portfolio-overlay">
                        <h3>Health & Fitness App</h3>
                        <p>Mobile Development, iOS, Android</p>
                    </div>
                </div>

                <div class="portfolio-item software">
                    <img src="images/portfolio-3.jpg" alt="Inventory Management System">
                    <div class="portfolio-overlay">
                        <h3>Inventory Management System</h3>
                        <p>Custom Software, Database Design</p>
                    </div>
                </div>

                <div class="portfolio-item web">
                    <img src="images/portfolio-4.jpg" alt="Financial Services Website">
                    <div class="portfolio-overlay">
                        <h3>Financial Services Website</h3>
                        <p>Web Development, Security</p>
                    </div>
                </div>

                <div class="portfolio-item mobile">
                    <img src="images/portfolio-5.jpg" alt="Food Delivery App">
                    <div class="portfolio-overlay">
                        <h3>Food Delivery App</h3>
                        <p>Mobile Development, Payment Integration</p>
                    </div>
                </div>

                <div class="portfolio-item software">
                    <img src="images/portfolio-6.jpg" alt="CRM Solution">
                    <div class="portfolio-overlay">
                        <h3>CRM Solution</h3>
                        <p>Custom Software, Data Analytics</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="section" style="background-color: #f1f5f9;">
        <div class="container">
            <div class="section-title">
                <h2>Our Team</h2>
            </div>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-img">
                        <img src="images/team-1.jpg" alt="Michael Johnson - CEO & Founder">
                    </div>
                    <div class="team-info">
                        <h3>Michael Johnson</h3>
                        <p>CEO & Founder</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="team-img">
                        <img src="images/team-2.jpg" alt="Sarah Williams - CTO">
                    </div>
                    <div class="team-info">
                        <h3>Sarah Williams</h3>
                        <p>CTO</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="team-img">
                        <img src="images/team-3.jpg" alt="David Chen - Lead Developer">
                    </div>
                    <div class="team-info">
                        <h3>David Chen</h3>
                        <p>Lead Developer</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="team-img">
                        <img src="images/team-4.jpg" alt="Emily Rodriguez - UX/UI Designer">
                    </div>
                    <div class="team-info">
                        <h3>Emily Rodriguez</h3>
                        <p>UX/UI Designer</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Let's Talk About Your Project</h3>
                    <p>Have a project in mind? We'd love to hear about it. Fill out the form and we'll get back to you as soon as possible.</p>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>Location</h4>
                            <p>123 Tech Street, Silicon Valley, CA 94123</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p>info@techsphere.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4>Phone</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message" required></textarea>
                        </div>

                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>TechSphere</h3>
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
                        <li><a href="#">Custom Software Development</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Mobile App Development</a></li>
                        <li><a href="#">Cloud Solutions</a></li>
                        <li><a href="#">Data Analytics</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Our Team</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        // Initialize particles.js
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof particlesJS !== 'undefined') {
                particlesJS('particles-js', {
                    "particles": {
                        "number": {
                            "value": 80,
                            "density": {
                                "enable": true,
                                "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#ffffff"
                        },
                        "shape": {
                            "type": "circle",
                            "stroke": {
                                "width": 0,
                                "color": "#000000"
                            },
                            "polygon": {
                                "nb_sides": 5
                            }
                        },
                        "opacity": {
                            "value": 0.5,
                            "random": false,
                            "anim": {
                                "enable": false,
                                "speed": 1,
                                "opacity_min": 0.1,
                                "sync": false
                            }
                        },
                        "size": {
                            "value": 3,
                            "random": true,
                            "anim": {
                                "enable": false,
                                "speed": 40,
                                "size_min": 0.1,
                                "sync": false
                            }
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#ffffff",
                            "opacity": 0.4,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 2,
                            "direction": "none",
                            "random": false,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false,
                            "attract": {
                                "enable": false,
                                "rotateX": 600,
                                "rotateY": 1200
                            }
                        }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": {
                            "onhover": {
                                "enable": true,
                                "mode": "grab"
                            },
                            "onclick": {
                                "enable": true,
                                "mode": "push"
                            },
                            "resize": true
                        },
                        "modes": {
                            "grab": {
                                "distance": 140,
                                "line_linked": {
                                    "opacity": 1
                                }
                            },
                            "bubble": {
                                "distance": 400,
                                "size": 40,
                                "duration": 2,
                                "opacity": 8,
                                "speed": 3
                            },
                            "repulse": {
                                "distance": 200,
                                "duration": 0.4
                            },
                            "push": {
                                "particles_nb": 4
                            },
                            "remove": {
                                "particles_nb": 2
                            }
                        }
                    },
                    "retina_detect": true
                });
            }
        });
    </script>

    <script>
        // Core Services Title Animation
        document.addEventListener('DOMContentLoaded', function() {
            const coreServicesTitle = document.querySelector('.core-services-title');
            const featuresGrid = document.querySelector('.features-grid');

            if (coreServicesTitle) {
                const observer = new IntersectionObserver(
                    function(entries) {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                // Title is now visible in the viewport
                                entry.target.style.opacity = '1';
                                entry.target.style.transform = 'translateY(0) scale(1)';

                                // Add animated class after a short delay
                                setTimeout(() => {
                                    entry.target.classList.add('animated');
                                }, 400);

                                // Animate features grid with a delay
                                if (featuresGrid) {
                                    setTimeout(() => {
                                        featuresGrid.style.opacity = '1';
                                        featuresGrid.style.transform = 'translateY(0)';
                                    }, 800); // 800ms delay after title animation starts
                                }

                                // Stop observing once animation is triggered
                                observer.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.2
                    } // 20% of the element must be visible
                );

                // Start observing the title
                observer.observe(coreServicesTitle);
            }
        });
    </script>
</body>

</html>