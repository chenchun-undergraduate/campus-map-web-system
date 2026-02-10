<?php
require 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
$stmt->execute([$username, $email]);

if ($stmt->fetch()) {
  echo "<script>alert('Username or email already exists'); history.back();</script>";
} else {
  $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
  $stmt->execute([$username, $email, $password]);
  echo "<script>alert('Signup successful! Please log in.'); window.location.href='index.html';</script>";
}
?>
