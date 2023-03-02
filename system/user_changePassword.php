<?php
include '../db/db.php';
$email = $_POST['email'];
$password = $_POST['password'];

$emailNum = $_POST['emailNum'];
$emailNum2 = strlen($email);

if ($emailNum == $emailNum2) {
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "UPDATE `users` SET `password` = :passwordHash WHERE `users`.`email` = :email;";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':passwordHash', $passwordHash);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $query = $stmt->fetchAll();
    echo "1";
}