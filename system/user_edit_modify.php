<?php
include  '../db/db.php';
$id = $_POST['i'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$status = $_POST['status'];

echo $date;
$sql = "UPDATE `users` SET `firstName` = '$firstName', `lastName` = '$lastName', `email` = '$email'  , `status` = '$status' WHERE `users`.`id` = $id;";
echo $sql;
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if ($res) {
    header("Location:../back_user_Info.php");
} else {
    echo "修改錯誤";
}
