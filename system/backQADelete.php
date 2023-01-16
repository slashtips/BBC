<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `QA` WHERE `QA`.`id` = $id";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);
header("Location:../back_QA_EditInfo.php");
