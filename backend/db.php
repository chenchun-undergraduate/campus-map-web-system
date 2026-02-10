<?php
$host = 'localhost';       
$db   = 'campusStudent';        
$user = 'root';             
$pass = '';                

$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
    exit();
}
?>



