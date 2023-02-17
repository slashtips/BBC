<?php
include '../db/db.php';
$id = $_POST["id"];
$sql = "SELECT * FROM `QA` WHERE `id` = :id ORDER BY id  LIMIT 0 , 1";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$query = $stmt->fetchAll();

foreach ($query as $QA) {
    echo $QA['title'] . "," . $QA['content'];
}

// if ($res) {
//     foreach ($res as $QA) {
//         echo $QA['title'] . "," . $QA['content'];
//     }

// }