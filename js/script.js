// Main JavaScript for TechSphere Website

document.addEventListener('DOMContentLoaded', function() {
    // Handle header background on scroll
    const header = document.querySelector('.header');
    
    function updateHeaderBackground() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    // Initial check for header background
    updateHeaderBackground();
    
    // Update header background on scroll
    window.addEventListener('scroll', updateHeaderBackground);
    
    // Set active navigation link
    const navLinks = document.querySelectorAll('.nav-link');
    const currentPage = window.location.pathname.split('/').pop();
    
    navLinks.forEach(link => {
        const linkPage = link.getAttribute('data-page');
        if (linkPage === currentPage) {
            link.classList.add('active');
        }
        
        // Add click event to handle navigation
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const page = this.getAttribute('data-page');
            window.location.href = page;
        });
    });
    
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinksContainer = document.querySelector('.nav-links');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            navLinksContainer.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
            
            if (navLinksContainer.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (navLinksContainer.classList.contains('active') && 
                !navLinksContainer.contains(e.target) && 
                e.target !== mobileMenuBtn) {
                navLinksContainer.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
        
        // Prevent clicks inside the menu from closing it
        navLinksContainer.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
    
    // Scroll to Top Button
    const scrollTopBtn = document.querySelector('.scroll-top');
    
    if (scrollTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('active');
            } else {
                scrollTopBtn.classList.remove('active');
            }
        });
        
        scrollTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Smooth scrolling for navigation links
    const navItems = document.querySelectorAll('.nav-links a');
    
    navItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 100,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (navLinksContainer.classList.contains('active')) {
                    navLinksContainer.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                }
            }
        });
    });
    
    // Process Steps Interaction
    const processSteps = document.querySelectorAll('.process-step');
    const processDescriptions = document.querySelectorAll('.process-description');

    // Set initial active state
    const initialStep = document.querySelector('.process-step.discover');
    const initialDesc = document.querySelector('.process-description[data-step="discover"]');
    if (initialStep && initialDesc) {
        initialStep.classList.add('active');
        initialDesc.classList.add('active');
    }

    processSteps.forEach(step => {
        step.addEventListener('click', function() {
            // Remove active class from all steps and descriptions
            processSteps.forEach(s => s.classList.remove('active'));
            processDescriptions.forEach(d => d.classList.remove('active'));

            // Add active class to clicked step
            this.classList.add('active');

            // Show corresponding description
            const stepName = this.getAttribute('data-step');
            const description = document.querySelector(`.process-description[data-step="${stepName}"]`);
            if (description) {
                description.classList.add('active');
            }
        });
    });
    
    // Portfolio filtering
    const portfolioFilterItems = document.querySelectorAll('.portfolio-filter li');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    if (portfolioFilterItems.length > 0) {
        portfolioFilterItems.forEach(function(filter) {
            filter.addEventListener('click', function() {
                // Remove active class from all filter items
                portfolioFilterItems.forEach(function(item) {
                    item.classList.remove('active');
                });
                
                // Add active class to clicked filter
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                // Show/hide portfolio items based on filter
                portfolioItems.forEach(function(item) {
                    if (filterValue === 'all' || item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }
    
    // Check if robot image failed to load
    const robotImage = document.querySelector('.floating-robot');
    if (robotImage) {
        robotImage.addEventListener('error', function() {
            // This will fallback to SVG via the onerror attribute on the img tag
            console.log('Robot image failed to load, using SVG fallback');
        });
    }

    // Scroll Animation Observer
    const animateOnScrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const animateItems = entry.target.querySelectorAll('.animate-item');
                animateItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('animate-visible');
                    }, index * 200); // Add 200ms delay for each item
                });
                animateOnScrollObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2 // Trigger when 20% of the element is visible
    });

    // Observe all sections with animate-on-scroll class
    const animateSections = document.querySelectorAll('.animate-on-scroll');
    animateSections.forEach(section => {
        animateOnScrollObserver.observe(section);
    });

    // Counter Animation
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 50; // Adjust speed by changing divisor
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = Math.round(target);
                clearInterval(timer);
            } else {
                element.textContent = Math.round(current);
            }
        }, 30);
    }

    // Initialize counters when they come into view
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.textContent);
                animateCounter(counter, target);
                counterObserver.unobserve(counter);
            }
        });
    }, {
        threshold: 0.5
    });

    // Observe all counter elements
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => counterObserver.observe(counter));
    });
}); 