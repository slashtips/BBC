<?php
include '../db/db.php';
$GACodeID = $_POST["GACodeID"];
$sql = "UPDATE `GACode` SET `CodeID` = '$GACodeID' WHERE `GACode`.`id` = 1;";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


if ($res) {
    echo "<script>  window.location.href='../backGA.php'</script>";
}
else{
    echo "<script>alert('d')</script>";
}
