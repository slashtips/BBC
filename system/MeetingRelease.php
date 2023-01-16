<?php
include '../db/db.php';
$id = $_POST['id'];
$sql = "UPDATE `meeting` SET `publish` = '1' WHERE `meeting`.`id` = $id;";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

