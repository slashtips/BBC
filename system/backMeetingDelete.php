<?php
include '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `meeting` WHERE `meeting`.`id` = :id";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$query = $stmt->fetchAll();