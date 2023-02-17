<?php
include '../db/db.php';
$GACodeID = $_POST["GACodeID"];
$sql = "UPDATE `GACode` SET `CodeID` = :GACodeID WHERE `GACode`.`id` = 1;";


$stmt = $db->prepare($sql);
$stmt->bindValue(':GACodeID', $GACodeID);

$stmt->execute();
$query = $stmt->fetchAll();



echo "<script>  window.location.href='../backGA.php'</script>";