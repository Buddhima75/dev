document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.reviews-slider');
    if (!slider) return;

    // Clone all reviews and append them to create infinite loop
    const reviews = document.querySelectorAll('.review-card');
    reviews.forEach(review => {
        const clone = review.cloneNode(true);
        slider.appendChild(clone);
    });

    // Adjust slider width to accommodate all reviews
    slider.style.width = `${reviews.length * 400}px`; // 350px card width + 50px gap

    // Reset animation when it completes
    slider.addEventListener('animationend', () => {
        slider.style.animation = 'none';
        slider.offsetHeight; // Trigger reflow
        slider.style.animation = null;
    });
}); 