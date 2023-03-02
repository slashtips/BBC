<?php
include '../db/db.php';
$id = $_POST["id"];
$sql = "SELECT * FROM `QA` WHERE `id` = $id ORDER BY id  LIMIT 0 , 1";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);



if ($res) {
    foreach ($res as $QA) {
        echo $QA['title'] . "," . $QA['content'];
    }

}