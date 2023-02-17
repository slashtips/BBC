<?php


include '../db/db.php';
$email = $_COOKIE["email"];

$sql0 = "SELECT * FROM `users` Where `email` = :email";

$stmt = $db->prepare($sql0);
$stmt->bindValue(':email', $email);
$stmt->execute();
$query = $stmt->fetchAll();

$photoPath = "";
foreach ($query as $row0) {
    $photoPath = "../" . $row0['photoPath'];
}



unlink($photoPath); //將檔案刪除



$sql = "UPDATE `users` SET `photoPath` = 'pic/Common/userNone.png' WHERE `users`.`email` = :email;";
$stmt = $db->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$query = $stmt->fetchAll();