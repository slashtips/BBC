<?php
include '../db/db.php';
$id = $_POST['i'];
$title = $_POST['title'];


$sql = "UPDATE `users` SET `title` = '$title' WHERE `users`.`id` = $id;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':id', $id);
$stmt->execute();
$query = $stmt->fetchAll();


header("Location:../backPermissionInfo.php");