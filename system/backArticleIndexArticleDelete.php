<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `article` WHERE `article`.`id` = $id";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);
header("Location:../backArticleEditInfo.php");
