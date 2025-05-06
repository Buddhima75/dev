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
    <link rel="stylesheet" href="css/landing-animation.css">

    <style>
        .animate-item {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate-item.animate-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

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
                    <div class="hero-tag"><span>Innovative</span> <span>Powerful</span> <span>Intelligent</span></div>
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

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Process</h2>
                <p>A systematic approach to delivering exceptional results</p>
            </div>
        </div>
        <div class="flex-container">
            <div class="process-left-box">
                <div class="process-left-box-inner">
                    <div class="process-left-box-front">
                        <div class="book-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3>Don't Judge Book</h3>
                        <p>By its cover</p>
                    </div>
                    <div class="process-left-box-back">
                        <div class="book-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3>Know the Process</h3>
                        <p>Before get the job Done.</p>
                    </div>
                </div>
            </div>
            <div class="process-container">
                <div class="process-circle">
                    <div class="process-ring"></div>

                    <!-- Center descriptions -->
                    <div class="process-descriptions">
                        <div class="process-description" data-step="discover">
                            <h3>Discovery Phase</h3>
                            <p>We start by listening to your goals, ideas, and requirements. This is where we understand your vision and identify the best way to bring it to life.</p>
                        </div>
                        <div class="process-description" data-step="plan">
                            <h3>Planning Phase</h3>
                            <p>Next, we create a detailed roadmap. From design concepts to functionality needs, we carefully plan every step to ensure a seamless project.</p>
                        </div>
                        <div class="process-description" data-step="design">
                            <h3>Design Phase</h3>
                            <p>Our design team works on visual concepts and layouts, focusing on aesthetics and usability to create an engaging and unique user experience.</p>
                        </div>
                        <div class="process-description" data-step="develop">
                            <h3>Development Phase</h3>
                            <p>Our developers build your website using cutting-edge technology, ensuring it's fast, responsive, and scalable. Every feature is tailored to perfection.</p>
                        </div>
                        <div class="process-description" data-step="test">
                            <h3>Testing Phase</h3>
                            <p>Before launch, we rigorously test your website for functionality, performance, and security to guarantee a flawless user experience.</p>
                        </div>
                        <div class="process-description" data-step="deliver">
                            <h3>Delivery Phase</h3>
                            <p>We launch your website and provide ongoing support to keep it running smoothly. With our free hosting for the first year, you're ready to succeed!</p>
                        </div>
                    </div>

                    <!-- Process steps -->
                    <div class="process-step discover" data-step="discover">
                        <div class="step-icon"><i class="fas fa-search"></i></div>
                        <div class="step-label">Discover</div>
                    </div>
                    <div class="process-step plan" data-step="plan">
                        <div class="step-icon"><i class="fas fa-tasks"></i></div>
                        <div class="step-label">Plan</div>
                    </div>
                    <div class="process-step design" data-step="design">
                        <div class="step-icon"><i class="fas fa-pencil-ruler"></i></div>
                        <div class="step-label">Design</div>
                    </div>
                    <div class="process-step develop" data-step="develop">
                        <div class="step-icon"><i class="fas fa-code"></i></div>
                        <div class="step-label">Develop</div>
                    </div>
                    <div class="process-step test" data-step="test">
                        <div class="step-icon"><i class="fas fa-vial"></i></div>
                        <div class="step-label">Test</div>
                    </div>
                    <div class="process-step deliver" data-step="deliver">
                        <div class="step-icon"><i class="fas fa-rocket"></i></div>
                        <div class="step-label">Deliver</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section animate-on-scroll">
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

    <!-- Industry-Focused Solutions Section -->
    <section class="section animate-on-scroll">
        <div class="container">
            <div class="section-title animate-item">
                <div class="title-row">
                    <span class="subtitle animate-item">WHAT WE DO</span><br>
                    <h2 class="animate-item">Industry-Focused Solutions</h2>
                </div>
            </div>
            <div class="services-grid">
                <div class="service-card animate-item">
                    <div class="service-image animate-item">
                        <img src="images/Virtual.png" alt="Virtual Reality" class="animate-item">
                    </div>
                    <div class="service-content">
                        <h3 class="animate-item">Virtual Reality</h3>
                        <p class="animate-item">Immerse yourself in a new dimension with our Virtual Reality experiences, offering unparalleled realism and interactive.</p>
                    </div>
                </div>

                <div class="service-card animate-item">
                    <div class="service-image animate-item">
                        <img src="images/Machine.png" alt="Machine Learning" class="animate-item">
                    </div>
                    <div class="service-content">
                        <h3 class="animate-item">Machine Learning</h3>
                        <p class="animate-item">Unleash the power of data-driven insights with our Machine Learning solutions, driving informed decision-making.</p>
                    </div>
                </div>

                <div class="service-card animate-item">
                    <div class="service-image animate-item">
                        <img src="images/Internet.png" alt="Internet of Things" class="animate-item">
                    </div>
                    <div class="service-content">
                        <h3 class="animate-item">Internet of Things</h3>
                        <p class="animate-item">Connect, control, and innovate with our Internet of Things solutions, seamlessly integrating devices revolutionize.</p>
                    </div>
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
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Our Portfolio</h2>
            </div>

            <?php
            require_once 'config/database.php';

            try {
                $stmt = $pdo->query("SELECT * FROM portfolio_items ORDER BY created_at DESC LIMIT 8");
                $portfolio_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error fetching portfolio items: " . $e->getMessage();
                $portfolio_items = [];
            }
            ?>

            <div class="portfolio-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                <?php foreach ($portfolio_items as $index => $item): ?>
                    <div class="portfolio-item <?php echo htmlspecialchars($item['category']); ?>">
                        <img src="<?php echo htmlspecialchars($item['image_path']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                        <div class="portfolio-overlay" id="portfolio-overlay-always-visible">
                            <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                            <p><?php echo htmlspecialchars($item['description']); ?></p>
                            <?php if (!empty($item['project_url'])):
                                $project_url = $item['project_url'];
                                // Remove http:// or https:// if present
                                $project_url = preg_replace('#^https?://#', '', $project_url);
                                // Remove localhost/DEV/ if present
                                $project_url = str_replace('localhost/DEV/', '', $project_url);
                            ?>
                                <a href="https://<?php echo htmlspecialchars($project_url); ?>" class="project-btn" target="_blank">
                                    <span>View Project</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-4">
                <a href="portfolio.php" class="btn btn-primary">View More</a>
            </div>
        </div>
    </section>

    <!-- Pricing Packages Section -->
    <section class="pricing-section section">
        <div class="container">
            <div class="section-title">
                <h2>Our Packages</h2>
                <p>Choose the perfect web development package for your needs</p>
            </div>

            <div class="pricing-grid">
                <!-- Basic Package -->
                <div class="pricing-card">
                    <div class="pricing-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="pricing-header">
                        <h3>Web Development</h3>
                        <p class="package-type">basic package</p>
                    </div>
                    <div class="pricing-price">
                        <h4>LKR35,000/=</h4>
                    </div>
                    <div class="pricing-features">
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>1 to 5 Pages</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Free hosting 1Year</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>1 Year Free Domain</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Free Email Plans</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>WordPress Website</span>
                        </div>
                    </div>
                    <button class="btn-order">PLACE THE ORDER</button>
                </div>

                <!-- Standard Package -->
                <div class="pricing-card popular">
                    <div class="popular-tag">POPULAR</div>
                    <div class="pricing-icon">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <div class="pricing-header">
                        <h3>Web Development</h3>
                        <p class="package-type">Standard package</p>
                    </div>
                    <div class="pricing-price">
                        <h4>LKR75,000/=</h4>
                    </div>
                    <div class="pricing-features">
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>1 to 10 Pages</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Free hosting 1Year</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>1 Year Free Domain</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Free Email Plans</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Custom Build</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Add Your Bussiness to Google map</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Fast Dilivary</span>
                        </div>
                    </div>
                    <button class="btn-order">PLACE THE ORDER</button>
                </div>

                <!-- Premium Package -->
                <div class="pricing-card">
                    <div class="pricing-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="pricing-header">
                        <h3>Web Development</h3>
                        <p class="package-type">Premium package</p>
                    </div>
                    <div class="pricing-price">
                        <h4>LKR170,000/=</h4>
                    </div>
                    <div class="pricing-features">
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>1 to 20 Pages</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Free hosting 1Year</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>1 Year Free Domain</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Free Email Plans</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Custom Build</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Add Your Bussiness to Google map</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Fast Dilivary</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Payment Intigration</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>E commerce Features</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Social media creation and handling for 1 month</span>
                        </div>
                    </div>
                    <button class="btn-order">PLACE THE ORDER</button>
                </div>

                <!-- Custom Package -->
                <div class="pricing-card custom">
                    <div class="pricing-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="pricing-header">
                        <h3>Web Development</h3>
                        <p class="package-type">Custom</p>
                    </div>
                    <div class="pricing-price">
                        <h4>LKR200,000+</h4>
                    </div>
                    <div class="pricing-features custom-features">
                        <div class="feature">
                            <i class="fas fa-phone"></i>
                            <span>Contact us for advance solutions</span>
                        </div>
                    </div>
                    <button class="btn-order contact" onclick="window.location.href='#contact'" style="transition: all 0.3s ease; transform: scale(1);" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">CONTACT US</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->


    <!-- Contact Section -->
    <section id="contact" class="section contact-section">
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
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize particles.js
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
                            "speed": 3,
                            "direction": "none",
                            "random": false,
                            "straight": false,
                            "out_mode": "bounce",
                            "bounce": true,
                            "attract": {
                                "enable": true,
                                "rotateX": 600,
                                "rotateY": 1200
                            }
                        }
                    },
                    "interactivity": {
                        "detect_on": "window",
                        "events": {
                            "onhover": {
                                "enable": false,
                                "mode": "repulse"
                            },
                            "onclick": {
                                "enable": true,
                                "mode": "push"
                            },
                            "resize": true,
                            "touchstart": {
                                "enable": true,
                                "mode": "push"
                            },
                            "touchmove": {
                                "enable": true,
                                "mode": "repulse"
                            }
                        },
                        "modes": {
                            "push": {
                                "particles_nb": 4
                            },
                            "remove": {
                                "particles_nb": 2
                            },
                            "repulse": {
                                "distance": 200,
                                "duration": 0.4
                            }
                        }
                    },
                    "retina_detect": true
                });
            }

            // Animation observer function
            const observeElements = (elements, options = {}) => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.2,
                    ...options
                });

                elements.forEach(el => observer.observe(el));
            };

            // Observe Core Services title and cards
            const coreServicesTitle = document.querySelector('.core-services-title');
            if (coreServicesTitle) {
                observeElements([coreServicesTitle]);
            }

            const featureCards = document.querySelectorAll('.service-features .feature-card');
            if (featureCards.length) {
                observeElements(featureCards);
            }

            // Observe Process section title
            const processTitle = document.querySelector('.process-section .section-title');
            if (processTitle) {
                observeElements([processTitle]);
            }

            // Other service cards
            const serviceCards = document.querySelectorAll('.services-grid .service-card');
            if (serviceCards.length) {
                observeElements(serviceCards);
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all process steps and descriptions
            const steps = document.querySelectorAll('.process-step');
            const descriptions = document.querySelectorAll('.process-description');

            // Set initial active state (Discover)
            const initialStep = document.querySelector('.process-step.discover');
            const initialDesc = document.querySelector('.process-description[data-step="discover"]');
            initialStep.classList.add('active');
            initialDesc.classList.add('active');

            // Add click handlers to each step
            steps.forEach(step => {
                step.addEventListener('click', function() {
                    // Remove active class from all steps and descriptions
                    steps.forEach(s => s.classList.remove('active'));
                    descriptions.forEach(d => d.classList.remove('active'));

                    // Add active class to clicked step
                    this.classList.add('active');

                    // Show corresponding description
                    const stepName = this.getAttribute('data-step');
                    const description = document.querySelector(`.process-description[data-step="${stepName}"]`);
                    description.classList.add('active');
                });
            });
        });
    </script>

    <!-- Animation Observer -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Process section animations
                        if (entry.target.closest('.process-section')) {
                            const section = entry.target.closest('.process-section');

                            // Animate title components
                            section.querySelector('.section-title').classList.add('visible');
                            setTimeout(() => {
                                section.querySelector('.section-title h2').classList.add('visible');
                            }, 200);
                            setTimeout(() => {
                                section.querySelector('.section-title p').classList.add('visible');
                            }, 400);

                            // Animate process components
                            setTimeout(() => {
                                section.querySelector('.process-left-box').classList.add('visible');
                            }, 600);

                            setTimeout(() => {
                                section.querySelector('.process-circle').classList.add('visible');
                            }, 800);

                            // Animate process steps
                            const steps = section.querySelectorAll('.process-step');
                            steps.forEach((step, index) => {
                                setTimeout(() => {
                                    step.classList.add('visible');
                                }, 1000 + (index * 200));
                            });

                            // Animate process descriptions
                            const descriptions = section.querySelectorAll('.process-description');
                            descriptions.forEach((desc, index) => {
                                setTimeout(() => {
                                    desc.classList.add('visible');
                                }, 2200 + (index * 200));
                            });
                        }

                        // Core Services animations
                        if (entry.target.classList.contains('core-services-title')) {
                            entry.target.classList.add('visible');
                        }

                        // Feature cards animations
                        if (entry.target.classList.contains('feature-card')) {
                            entry.target.classList.add('visible');
                        }
                    }
                });
            }, {
                threshold: 0.2
            });

            // Observe Process section
            const processSection = document.querySelector('.process-section');
            if (processSection) {
                observer.observe(processSection);
            }

            // Observe Core Services title
            const coreServicesTitle = document.querySelector('.core-services-title');
            if (coreServicesTitle) {
                observer.observe(coreServicesTitle);
            }

            // Observe feature cards
            const featureCards = document.querySelectorAll('.feature-card');
            featureCards.forEach(card => {
                observer.observe(card);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.2
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (entry.target.classList.contains('animate-on-scroll')) {
                            const animateItems = entry.target.querySelectorAll('.animate-item');
                            animateItems.forEach((item, index) => {
                                setTimeout(() => {
                                    item.classList.add('animate-visible');
                                }, index * 200);
                            });
                        }
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const sections = document.querySelectorAll('.animate-on-scroll');
            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>

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