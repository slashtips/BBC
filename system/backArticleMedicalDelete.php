<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `articleM` WHERE `articleM`.`id` = :id";
$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $id);

$stmt->execute();
$query = $stmt->fetchAll();

