<?php

include  '../db/db.php';
$email = $_COOKIE["email"];

$sql = "SELECT * FROM `users` WHERE `email`='$email';";
$res = mysqli_query($connect, $sql);
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


foreach ($res as $user) {
    $text =  "" . $user['id'] . "," . $user['firstName'] . "," . $user['lastName'] . "," . $user['email'] . "," . $user['password'] . "," . $user['date'] . "," . $user['status'] . ","  . $user['title'] . "," . $user['photoPath'] . ",";
    echo $text;
}

