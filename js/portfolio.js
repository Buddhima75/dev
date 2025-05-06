document.addEventListener('DOMContentLoaded', function() {
    const portfolioGrid = document.querySelector('.portfolio-grid');
    const loadMoreBtn = document.getElementById('load-more-portfolio');
    const totalItems = parseInt(portfolioGrid.dataset.totalItems);
    let currentItems = 6;
    let loadedItemIds = new Set(); // Keep track of loaded item IDs

    // Get initial item IDs
    document.querySelectorAll('.portfolio-item').forEach(item => {
        const itemId = item.dataset.itemId;
        if (itemId) {
            loadedItemIds.add(itemId);
        }
    });

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Make an AJAX request to get more items
            fetch('get_more_portfolio.php?offset=' + currentItems)
                .then(response => response.json())
                .then(data => {
                    // Filter out any items we've already loaded
                    const newItems = data.filter(item => !loadedItemIds.has(item.id.toString()));
                    
                    // Append new items to the grid
                    newItems.forEach(item => {
                        loadedItemIds.add(item.id.toString());
                        const portfolioItem = document.createElement('div');
                        portfolioItem.className = `portfolio-item ${item.category}`;
                        portfolioItem.dataset.itemId = item.id;
                        portfolioItem.innerHTML = `
                            <img src="${item.image_path}" alt="${item.title}">
                            <div class="portfolio-overlay" id="portfolio-overlay-always-visible">
                                <h3>${item.title}</h3>
                                <p>${item.description}</p>
                                ${item.project_url ? `
                                    <a href="https://${item.project_url}" class="project-btn" target="_blank">
                                        <span>View Project</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                ` : ''}
                            </div>
                        `;
                        portfolioGrid.appendChild(portfolioItem);
                    });

                    currentItems += newItems.length;

                    // Hide the button if all items are loaded
                    if (currentItems >= totalItems) {
                        loadMoreBtn.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Error loading more portfolio items:', error);
                });
        });
    }
}); 