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
    
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent event from bubbling up
            navLinks.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
            
            // Toggle body scroll when menu is open
            if (navLinks.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (navLinks.classList.contains('active') && 
                !navLinks.contains(e.target) && 
                e.target !== mobileMenuBtn) {
                navLinks.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
        
        // Prevent clicks inside the menu from closing it
        navLinks.addEventListener('click', function(e) {
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
                if (navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                }
            }
        });
    });
    
    // Process Circle Diagram Interactivity
    const processSteps = document.querySelectorAll('.process-step');
    const processDescription = document.querySelector('.process-description p');
    
    // Process descriptions for each step
    const processDescriptions = {
        'Discover': 'We start by listening to your goals, ideas, and requirements. This is where we understand your vision and identify the best way to bring it to life.',
        'Plan': 'We create a detailed roadmap for your project, outlining the scope, timeline, and resources needed to achieve your vision effectively.',
        'Design': 'Our designers craft intuitive, user-friendly interfaces and experiences that align with your brand and meet your users\' needs.',
        'Develop': 'Our development team brings your project to life using clean, efficient code and industry best practices.',
        'Test': 'We thoroughly test your product to ensure it functions flawlessly across all platforms and user scenarios.',
        'Deliver': 'We launch your product and provide ongoing support to ensure its continued success in the market.'
    };
    
    if (processSteps.length > 0 && processDescription) {
        processSteps.forEach(function(step, index) {
            step.addEventListener('click', function() {
                // Remove active class from all steps
                processSteps.forEach(function(s) {
                    s.classList.remove('active');
                });
                
                // Add active class to clicked step
                step.classList.add('active');
                
                // Get the associated text element
                const textElement = document.querySelectorAll('.process-text')[index];
                const stepName = textElement ? textElement.textContent.trim() : '';
                
                // Update the description
                if (processDescriptions[stepName]) {
                    // Fade out
                    processDescription.style.opacity = '0';
                    
                    // Update text and fade in
                    setTimeout(function() {
                        processDescription.textContent = processDescriptions[stepName];
                        processDescription.style.opacity = '0.9';
                    }, 300);
                }
            });
        });
    }
    
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
}); 