<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `meeting` WHERE `meeting`.`id` = $id";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

