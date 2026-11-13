<?php
declare(strict_types=1);
session_start();
try {
 $pdo = new PDO('mysql:host=localhost;dbname=QLNhanSu;charset=utf8mb4','root','',[
  PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES=>false
 ]);
} catch(PDOException $e) { exit('Lỗi kết nối database. Hãy import database.sql và kiểm tra config.php.'); }
function e($v): string { return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8'); }
function require_admin(): void { if(empty($_SESSION['is_admin'])) { header('Location: ../login.php'); exit; } }
