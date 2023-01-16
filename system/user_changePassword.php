<?php
include '../db/db.php';
$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);
$sql = "UPDATE `users` SET `password` = '$passwordHash' WHERE `users`.`email` = '$email';";



$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if ($res) {
    echo "1";
} else {
    echo "0";
}