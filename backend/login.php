<?php
session_start();
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && $password === $user['password']) {
    $_SESSION['username'] = $username;
    header("Location: campusMap.html");
    exit();
} else {
    echo "<script>
        alert('Login failed: Incorrect username or password');
        window.location.href = 'index.html';
    </script>";
}

?>
