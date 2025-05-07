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
                    <a href="https://www.facebook.com/share/1BMpctHNM8/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.tiktok.com/@rasikaekanayaka222?_t=ZS-8w9Y40vi8JU&_r=1"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.linkedin.com/company/devlk/"><i class="fab fa-linkedin-in"></i></a>
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

                    <li><a href="./portfolio.php">Portfolio</a></li>
                    <li><a href="./services.php">Services</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>


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
            <p>&copy; <script>
                    document.write(new Date().getFullYear())
                </script> Devlk. All Rights Reserved.</p>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
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