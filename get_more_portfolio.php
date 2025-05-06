<?php
require_once 'config/database.php';

header('Content-Type: application/json');

try {
    $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
    $limit = 6; // Load 6 more items at a time

    $stmt = $pdo->prepare("SELECT * FROM portfolio_items ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Clean up project URLs
    foreach ($items as &$item) {
        if (!empty($item['project_url'])) {
            $item['project_url'] = preg_replace('#^https?://#', '', $item['project_url']);
            $item['project_url'] = str_replace('localhost/DEV/', '', $item['project_url']);
        }
    }

    echo json_encode($items);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error fetching portfolio items: ' . $e->getMessage()]);
}
