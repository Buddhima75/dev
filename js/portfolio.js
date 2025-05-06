document.addEventListener('DOMContentLoaded', function() {
    const portfolioGrid = document.querySelector('.portfolio-grid');
    const loadMoreBtn = document.getElementById('load-more-portfolio');
    const totalItems = parseInt(portfolioGrid.dataset.totalItems);
    let currentItems = 6;

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Make an AJAX request to get more items
            fetch('get_more_portfolio.php?offset=' + currentItems)
                .then(response => response.json())
                .then(data => {
                    // Append new items to the grid
                    data.forEach(item => {
                        const portfolioItem = document.createElement('div');
                        portfolioItem.className = `portfolio-item ${item.category}`;
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

                    currentItems += data.length;

                    // Hide the button if all items are loaded
                    if (currentItems >= totalItems) {
                        loadMoreBtn.style.display = 'none';
                    }
                })
                .catch(error => console.error('Error loading more portfolio items:', error));
        });
    }
}); 