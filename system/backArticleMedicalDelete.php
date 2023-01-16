<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `articleM` WHERE `articleM`.`id` = $id";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

