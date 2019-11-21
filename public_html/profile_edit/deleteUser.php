<?php
include '../../private_html/config.php';
include '../../private_html/db.config.php';
include '../../private_html/user.class.php';
session_start();
$user = unserialize($_SESSION['user']);
$password = $user->Password;
$email = $user->Email;

$sql = "DELETE FROM User WHERE email = :email";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();
session_destroy();
header("Location: ../")
?>