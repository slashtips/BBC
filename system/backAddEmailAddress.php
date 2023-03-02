<?php
include  '../db/db.php';

$EmailAddress = $_POST["EmailAddress"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期


date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `EmailAddress` (EmailAddress) VALUES ('$EmailAddress');";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if ($res) {
    echo "<script> alert('EmailAddress Add Success');window.location.href='../back_permission.html'; </script>";
    exit;
}
