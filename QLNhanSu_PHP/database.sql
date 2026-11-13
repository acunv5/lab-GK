CREATE DATABASE IF NOT EXISTS QLNhanSu CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE QLNhanSu;
CREATE TABLE IF NOT EXISTS Users (
 admin_id INT(10) NOT NULL AUTO_INCREMENT,
 admin_email VARCHAR(255) NOT NULL,
 admin_password VARCHAR(255) NOT NULL,
 images VARCHAR(255) DEFAULT NULL,
 PRIMARY KEY (admin_id), UNIQUE KEY uq_admin_email (admin_email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- Mat khau mau: 123456
INSERT INTO Users (admin_email,admin_password,images) VALUES
('nguyenvana@gmail.com','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','default.svg'),
('tranthib@gmail.com','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','default.svg'),
('levanc@gmail.com','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','default.svg');
