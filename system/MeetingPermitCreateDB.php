<?php

include  '../db/db2.php';
$inputname = $_POST['inputname'];
$id  = $_POST['id'];



$sql = "CREATE TABLE meeting$id (
  Id INT AUTO_INCREMENT,
";

foreach ($inputname as $key) {
  $sql .= $key . " text ,";
}

$sql .= "PRIMARY KEY (Id));";
echo $sql;

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

mysqli_close($connect);

include '../db/db.php';

$sql2 = "UPDATE `meeting` SET  `status` = 1 WHERE `meeting`.`id` = $id;";
$res2 = $db->query($sql2);
$res2->setFetchMode(PDO::FETCH_ASSOC);
