<?php

include '../db/db.php';
$email = $_COOKIE["email"];
$emailSpliceStr = $_POST['emailSpliceStr'];
$sql = "SELECT COUNT(domain) as domain FROM domain WHERE domain = :emailSpliceStr;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':emailSpliceStr', "$emailSpliceStr");
$stmt->execute();
$query = $stmt->fetchAll();

$d;
foreach ($query as $row) {
    $d = $row['domain'];
}


// $res = $db->query($sql);
// $res->setFetchMode(PDO::FETCH_ASSOC);

if ($d!="") {
    echo 1;
} else {
    echo 0;
}