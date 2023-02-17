<?php
include '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `QA` WHERE `QA`.`id` = :id";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $id);

$stmt->execute();
$query = $stmt->fetchAll();
header("Location:../back_QA_EditInfo.php");