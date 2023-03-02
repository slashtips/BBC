<?php
include '../db/db.php';

$email = $_POST['email'];

$sql = "SELECT * FROM `users` WHERE `email`=:email and `status` = 1";
$stmt = $db->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$query = $stmt->fetchAll();
$idd ;
foreach($query as $row)
{
    $idd = $row['id'];
}

if(trim($idd)!="")
{
    echo 1 ; 
}

?>