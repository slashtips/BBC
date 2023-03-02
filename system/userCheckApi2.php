<?php
include '../db/db.php';

$email = $_POST['email'];

$sql = "SELECT * FROM `users` WHERE `email`=:email and `status` = 1 and (`title` = :s1 or `title` = :s2) ";
$stmt = $db->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->bindValue('s1', "SystemAdministrator");
$stmt->bindValue('s2', "Administrator");
$stmt->execute();
$query = $stmt->fetchAll();
$idd;
foreach ($query as $row) {
    $idd = $row['id'];
}
if (trim($idd) != "") {
    echo "1";
}




?>