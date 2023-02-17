<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `article` WHERE `article`.`id` = :id";


$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $id);

$stmt->execute();
$query = $stmt->fetchAll();

header("Location:../backArticleEditInfo.php");
