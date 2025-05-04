CREATE TABLE IF NOT EXISTS portfolio_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image_path VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL,
    project_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert some sample data
INSERT INTO portfolio_items (title, description, image_path, category, project_url) VALUES
('E-commerce Platform', 'Web Development, UX/UI Design', 'images/portfolio-1.jpg', 'web', 'https://example.com/project1'),
('Health & Fitness App', 'Mobile Development, iOS, Android', 'images/portfolio-2.jpg', 'mobile', 'https://example.com/project2'),
('Inventory Management System', 'Custom Software, Database Design', 'images/portfolio-3.jpg', 'software', 'https://example.com/project3'),
('Financial Services Website', 'Web Development, Security', 'images/portfolio-4.jpg', 'web', 'https://example.com/project4'),
('Food Delivery App', 'Mobile Development, Payment Integration', 'images/portfolio-5.jpg', 'mobile', 'https://example.com/project5'),
('CRM Solution', 'Custom Software, Data Analytics', 'images/portfolio-6.jpg', 'software', 'https://example.com/project6'); 