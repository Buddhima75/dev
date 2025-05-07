document.addEventListener('DOMContentLoaded', function() {
    console.log('Portfolio JS loaded');
    
    const portfolioGrid = document.querySelector('.portfolio-grid');
    console.log('Portfolio grid:', portfolioGrid);
    
    const loadMoreBtn = document.getElementById('load-more-portfolio');
    console.log('Load more button:', loadMoreBtn);
    
    const allItems = document.querySelectorAll('.portfolio-item');
    console.log('Total items found:', allItems.length);
    
    // Initially hide items beyond the first 8
    allItems.forEach((item, index) => {
        if (index >= 8) {
            item.classList.add('hidden');
        }
    });

    // Add click event to load more button
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
            console.log('Load more button clicked');
            
            // Show all hidden items
            document.querySelectorAll('.portfolio-item.hidden').forEach(item => {
                item.classList.remove('hidden');
            });
            
            // Hide the button
            loadMoreBtn.parentElement.style.display = 'none';
            console.log('Button hidden');
        });
    } else {
        console.log('Load more button not found');
    }
}); 