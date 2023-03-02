<?php
include '../db/db.php';
$id = $_POST['i'];
$title = $_POST['title'];

echo $date;
$sql = "UPDATE `users` SET `title` = '$title' WHERE `users`.`id` = $id;";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if ($res) {
    header("Location:../backPermissionInfo.php");
} else {
    echo "修改錯誤";
}