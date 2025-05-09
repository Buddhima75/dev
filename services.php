<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - TechSphere</title>
    <meta name="description" content="Explore our comprehensive range of software development services including web development, mobile apps, and digital solutions.">

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
    <link rel="stylesheet" href="css/service-features.css">

    <!-- Fix spacing styles -->
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
            margin-top: 10%;

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

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #3b82f6;
            display: block;
        }

        .stat-label {
            color: #94a3b8;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            display: block;
        }

        /* Make sure header is above particles */
        header {
            position: relative;
            z-index: 3;
        }

        .section,
        .service-features {
            margin-top: 0;
            padding-top: 4rem;
        }

        .footer {
            margin-top: 0;
        }

        /* Fix for service-features section */
        .service-features {
            display: block !important;
            position: relative !important;
            z-index: 100 !important;
            visibility: visible !important;
            background: white !important;
        }

        .features-grid {
            display: grid !important;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
            gap: 1.5rem !important;
        }

        .feature-card {
            display: flex !important;
            flex-direction: column !important;
        }

        @media (max-width: 768px) {
            .features-grid {
                grid-template-columns: 1fr 1fr !important;
            }
        }

        @media (max-width: 576px) {
            .features-grid {
                grid-template-columns: 1fr !important;
            }
        }

        .hero-flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            padding: 2rem;
        }

        .service-card:hover {
            transform: translateY(-5px) !important;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
        }

        .service-card:hover .service-icon {
            background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%) !important;
            color: white !important;
            transform: scale(1.1) !important;
        }

        .service-card:hover h3 {
            color: #2563eb !important;
            transform: translateX(5px) !important;
        }

        .service-card:hover div[style*="position: absolute"] {
            transform: scaleX(1) !important;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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
                <span>Comprehensive</span>
                <span>Reliable</span>
            </div>
            <div class="hero-headline">
                <h1>Our Services
                    <span class="gradient-text">Empower Your Business</span>
                </h1>
            </div>
            <div class="hero-description">
                <p>From custom software development to cutting-edge digital solutions, we offer a comprehensive suite of services designed to transform your business and drive growth in the digital age.</p>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">6+</span>
                    <span class="stat-label">Services</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Client Satisfaction</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Features Section -->
    <div style="position: relative; z-index: 100; background: transparent; width: 100vw; margin-left: calc(-50vw + 50%); margin-right: calc(-50vw + 50%); display: block; padding: 80px 0; margin-top: -2rem; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); visibility: visible; overflow: visible;">
        <div style="width: 95%; max-width: 1400px; margin: 0 auto; padding: 0 15px; display: block;">
            <div style="margin-bottom: 2.5rem; text-align: center; display: block;">
                <h2 style="display: block; font-size: 2.5rem; margin: 0.5rem 0; color: #1e293b;">Our Core Services</h2>
            </div>
            <div class="features-grid" style="display: grid; grid-template-columns: repeat(4, minmax(280px, 1fr)); gap: 1.5rem; max-width: 100%; margin: 0 auto;">
                <div class="feature-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); transition: all 0.4s ease; position: relative; overflow: hidden; height: 100%; width: 100%; border: 1px solid rgba(230, 230, 230, 0.7); display: flex; flex-direction: column;">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; font-size: 1.4rem; color: #2563eb;">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 style="font-size: 1.1rem; margin-bottom: 0.75rem; display: block;">Custom Web Development Solutions</h3>
                    <p style="color: #64748b; font-size: 0.875rem; line-height: 1.5; margin-bottom: 0; flex: 1; display: block;">At DevLK, we specialize in creating custom-built websites tailored to meet your business's unique needs. Whether you need a sleek portfolio site, a high-performing e-commerce platform, or a complex web application, our team ensures a seamless design and user-friendly experience.</p>
                </div>

                <div class="feature-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); transition: all 0.4s ease; position: relative; overflow: hidden; height: 100%; width: 100%; border: 1px solid rgba(230, 230, 230, 0.7); display: flex; flex-direction: column;">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; font-size: 1.4rem; color: #2563eb;">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 style="font-size: 1.1rem; margin-bottom: 0.75rem; display: block;">Mobile App Development</h3>
                    <p style="color: #64748b; font-size: 0.875rem; line-height: 1.5; margin-bottom: 0; flex: 1; display: block;">Transform your ideas into powerful mobile applications with our app development services. Whether it's a native app for Android/iOS or a cross-platform solution, we design intuitive, feature-rich apps that provide seamless functionality and engaging user experiences.</p>
                </div>

                <div class="feature-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); transition: all 0.4s ease; position: relative; overflow: hidden; height: 100%; width: 100%; border: 1px solid rgba(230, 230, 230, 0.7); display: flex; flex-direction: column;">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; font-size: 1.4rem; color: #2563eb;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 style="font-size: 1.1rem; margin-bottom: 0.75rem; display: block;">Client-Centric Approach</h3>
                    <p style="color: #64748b; font-size: 0.875rem; line-height: 1.5; margin-bottom: 0; flex: 1; display: block;">We believe that collaboration and communication are at the heart of every successful project. At DevLK, we prioritize understanding your goals and keeping you involved at every stage of the development process. From initial consultations to final delivery, we ensure transparency.</p>
                </div>

                <div class="feature-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); transition: all 0.4s ease; position: relative; overflow: hidden; height: 100%; width: 100%; border: 1px solid rgba(230, 230, 230, 0.7); display: flex; flex-direction: column;">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; font-size: 1.4rem; color: #2563eb;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 style="font-size: 1.1rem; margin-bottom: 0.75rem; display: block;">Robust Security and Maintenance</h3>
                    <p style="color: #64748b; font-size: 0.875rem; line-height: 1.5; margin-bottom: 0; flex: 1; display: block;">Your digital assets deserve the best protection and care. DevLK offers robust security features for all websites and apps we create, including SSL certificates, secure coding practices, and regular updates. Our post-launch maintenance services ensure your platform remains optimized.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section class="section" style="background-color: #f1f5f9;">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="services-grid" style="opacity: 0; transform: translateY(20px); transition: all 0.6s ease-out;">
                <div class="service-card" style="opacity: 0; transform: translateY(20px); transition: all 0.5s ease-out; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); position: relative; overflow: hidden; cursor: pointer;">
                    <div class="service-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; font-size: 1.5rem; color: #2563eb; transition: all 0.3s ease;">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #1e293b; transition: all 0.3s ease;">Custom Software Development</h3>
                    <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7; transition: all 0.3s ease;">We build tailored software solutions designed to meet your unique business requirements and challenges.</p>
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #2563eb, #60a5fa); transform: scaleX(0); transition: transform 0.3s ease; transform-origin: left;"></div>
                </div>

                <div class="service-card" style="opacity: 0; transform: translateY(20px); transition: all 0.5s ease-out; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); position: relative; overflow: hidden; cursor: pointer;">
                    <div class="service-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; font-size: 1.5rem; color: #2563eb; transition: all 0.3s ease;">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #1e293b; transition: all 0.3s ease;">Web Development</h3>
                    <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7; transition: all 0.3s ease;">From responsive websites to complex web applications, we create engaging online experiences that deliver results.</p>
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #2563eb, #60a5fa); transform: scaleX(0); transition: transform 0.3s ease; transform-origin: left;"></div>
                </div>

                <div class="service-card" style="opacity: 0; transform: translateY(20px); transition: all 0.5s ease-out; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); position: relative; overflow: hidden; cursor: pointer;">
                    <div class="service-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; font-size: 1.5rem; color: #2563eb; transition: all 0.3s ease;">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #1e293b; transition: all 0.3s ease;">Mobile App Development</h3>
                    <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7; transition: all 0.3s ease;">We develop intuitive, high-performance mobile applications for iOS and Android platforms.</p>
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #2563eb, #60a5fa); transform: scaleX(0); transition: transform 0.3s ease; transform-origin: left;"></div>
                </div>

                <div class="service-card" style="opacity: 0; transform: translateY(20px); transition: all 0.5s ease-out; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); position: relative; overflow: hidden; cursor: pointer;">
                    <div class="service-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; font-size: 1.5rem; color: #2563eb; transition: all 0.3s ease;">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #1e293b; transition: all 0.3s ease;">Cloud Solutions</h3>
                    <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7; transition: all 0.3s ease;">Our cloud expertise helps businesses scale efficiently and securely in AWS, Azure, or Google Cloud environments.</p>
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #2563eb, #60a5fa); transform: scaleX(0); transition: transform 0.3s ease; transform-origin: left;"></div>
                </div>

                <div class="service-card" style="opacity: 0; transform: translateY(20px); transition: all 0.5s ease-out; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); position: relative; overflow: hidden; cursor: pointer;">
                    <div class="service-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; font-size: 1.5rem; color: #2563eb; transition: all 0.3s ease;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #1e293b; transition: all 0.3s ease;">Data Analytics</h3>
                    <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7; transition: all 0.3s ease;">Transform your data into actionable insights with our advanced analytics and business intelligence solutions.</p>
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #2563eb, #60a5fa); transform: scaleX(0); transition: transform 0.3s ease; transform-origin: left;"></div>
                </div>

                <div class="service-card" style="opacity: 0; transform: translateY(20px); transition: all 0.5s ease-out; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); position: relative; overflow: hidden; cursor: pointer;">
                    <div class="service-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; font-size: 1.5rem; color: #2563eb; transition: all 0.3s ease;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #1e293b; transition: all 0.3s ease;">Cybersecurity</h3>
                    <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7; transition: all 0.3s ease;">Protect your digital assets with our comprehensive security assessments and implementation services.</p>
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #2563eb, #60a5fa); transform: scaleX(0); transition: transform 0.3s ease; transform-origin: left;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Scroll to Top Button -->
    <a href="#" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
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

            // Add a simple fade-in animation to all elements
            document.querySelectorAll('.feature-card, .service-card').forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

                setTimeout(() => {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, 100);
            });

            // Force display of all important sections
            const servicesSections = document.querySelectorAll('section, .service-features, div[style*="position: relative"]');
            servicesSections.forEach(section => {
                if (section) {
                    section.style.display = 'block';
                    section.style.visibility = 'visible';
                    section.style.opacity = '1';
                }
            });

            // Ensure grid display is working
            const grids = document.querySelectorAll('div[style*="display: grid"]');
            grids.forEach(grid => {
                if (grid) {
                    // Force browser reflow
                    void grid.offsetWidth;

                    // Apply styles again
                    grid.style.display = 'grid';
                    grid.style.gridTemplateColumns = 'repeat(auto-fit, minmax(250px, 1fr))';
                    grid.style.gap = '1.5rem';
                }
            });
        });

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

        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        if (entry.target.classList.contains('services-grid')) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';

                            // Animate each card with delay
                            const cards = entry.target.querySelectorAll('.service-card');
                            cards.forEach((card, i) => {
                                setTimeout(() => {
                                    card.style.opacity = '1';
                                    card.style.transform = 'translateY(0)';
                                }, i * 100); // 100ms delay between each card
                            });
                        }
                    }
                });
            }, {
                threshold: 0.2
            });

            // Observe the services grid
            const servicesGrid = document.querySelector('.services-grid');
            if (servicesGrid) {
                observer.observe(servicesGrid);
            }
        });
    </script>
</body>

</html>