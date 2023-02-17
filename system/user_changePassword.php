<?php
include '../db/db.php';
$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);
$sql = "UPDATE `users` SET `password` = :passwordHash WHERE `users`.`email` = :email;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':passwordHash', $passwordHash);
$stmt->bindValue(':email', $email);

$stmt->execute();
$query = $stmt->fetchAll();

echo "1";