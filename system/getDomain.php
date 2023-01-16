<?php

include '../db/db.php';
$email = $_COOKIE["email"];
$emailSpliceStr = $_POST['emailSpliceStr'];
$sql = "SELECT COUNT(domain) as domain FROM domain WHERE domain = '$emailSpliceStr';";


$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);
if ($res) {
    echo 1;
} else {
    echo 0;
}