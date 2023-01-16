<?php


include '../db/db.php';
$email = $_COOKIE["email"];
echo $email;
$sql0 = "SELECT * FROM `users` Where `email` = '$email'";

$res0 = $db->query($sql0);
$res0->setFetchMode(PDO::FETCH_ASSOC);
$row0 = mysqli_fetch_array($res0);
$photoPath = "";
foreach ($res0 as $row0) {
    $photoPath = "../" . $row0['photoPath'];
}



unlink($photoPath); //將檔案刪除



$sql = "UPDATE `users` SET `photoPath` = 'pic/Common/userNone.png' WHERE `users`.`email` = '$email';";
echo $sql;
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);