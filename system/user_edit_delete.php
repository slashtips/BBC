<?php
include '../db/db.php';
$id = $_POST['i'];
echo $id;
$sql = "DELETE FROM users where `id` = :id";
$stmt = $db->prepare($sql);
$stmt->bindValue(':id', "$id");
$stmt->execute();
$query = $stmt->fetchAll();


header("Location:../back_user_Info.php");