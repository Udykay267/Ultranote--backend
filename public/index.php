<?php
require_once '../config/database.php';
require_once '../core/LoadBalancer.php';

header('Content-Type: application/json');

$balancer = new LoadBalancer();
$load = $balancer->getLoadPercentage();

if ($balancer->shouldThrottle($load)) {
    http_response_code(503);
    echo json_encode([
        "status" => "error",
        "message" => "Server is under high load.",
        "current_load" => $load
    ]);
    exit;
}

$stmt = $pdo->query("SELECT id, name, data FROM nodes LIMIT 10");
$data = $stmt->fetchAll();

echo json_encode([
    "status" => "success",
    "load" => $load,
    "timestamp" => time(),
    "results" => $data
]);
?>