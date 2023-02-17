<?php

include '../db/db.php';
$email = $_COOKIE["email"];

$sql = "SELECT * FROM `users` WHERE `email`=:email;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$query = $stmt->fetchAll();


foreach ($query as $user) {
    $text = "" . $user['id'] . "," . $user['firstName'] . "," . $user['lastName'] . "," . $user['email'] . "," . $user['password'] . "," . $user['date'] . "," . $user['status'] . "," . $user['title'] . "," . $user['photoPath'] . ",";
    echo $text;
}