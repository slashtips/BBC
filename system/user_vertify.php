<?php

include '../db/db.php';
$email = $_POST["email"];
$password = $_POST["password"];

$sqlO = "SELECT * FROM `users` WHERE `email`=:email and `status` = 1";
$stmt = $db->prepare($sqlO);
$stmt->bindValue(':email', "$email");
$stmt->execute();
$query = $stmt->fetchAll();
$getP;
foreach ($query as $row) {
    $getP = $row['password'];
}


if (password_verify($password, $getP)) {
    foreach ($query as $user) {
        $text = "" . $user['id'] . "," . $user['firstName'] . $user['lastName'] . "," . $user['email'] . "," . $user['date'] . "," . $user['status'] . "," . $user['title'] . "," . $user['photoPath'] . ",";
        echo $text;
    }
}