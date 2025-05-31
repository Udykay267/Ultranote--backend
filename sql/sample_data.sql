CREATE DATABASE IF NOT EXISTS ultranote;
USE ultranote;

CREATE TABLE nodes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    data TEXT
);

INSERT INTO nodes (name, data) VALUES
('Node Alpha', 'Payload optimized'),
('Node Beta', 'Latency reduced'),
('Node Gamma', 'Cached content'),
('Node Delta', 'Pre-processed queue'),
('Node Epsilon', 'Real-time scaling');
