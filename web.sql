CREATE DATABASE IF NOT EXISTS my_website_db;
USE my_website_db;

-- Tabel Users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user'
);

-- Insert admin default
INSERT INTO users (username, password, email, role) 
VALUES ('admin', MD5('admin123'), 'admin@example.com', 'admin');
