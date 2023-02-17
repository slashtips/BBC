<?php

include '../db/db.php';
$email = $_COOKIE["email"];
$emailStr = $_POST['emailStr'];
$sql = "SELECT COUNT(EmailAddress) as EmailAddress FROM EmailAddress WHERE EmailAddress = :emailStr;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':emailStr', "$emailStr");
$stmt->execute();
$query = $stmt->fetchAll();

// $res = $db->query($sql);
// $res->setFetchMode(PDO::FETCH_ASSOC);

$e;
foreach ($query as $row) {
    $e = $row['EmailAddress'];
}

if ($e!="") {
    echo 1;
} else {
    echo 0;
}