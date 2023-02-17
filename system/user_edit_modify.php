<?php
include '../db/db.php';
$id = $_POST['i'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$status = $_POST['status'];


$sql = "UPDATE `users` SET `firstName` = :firstName, `lastName` = :lastName, `email` = :email  , `status` = :status  WHERE `users`.`id` = :id;";


$stmt = $db->prepare($sql);
$stmt->bindValue(':firstName', $firstName);
$stmt->bindValue(':lastName', $lastName);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':status', $status);
$stmt->bindValue(':id', $id);
$stmt->execute();
$query = $stmt->fetchAll();

header("Location:../back_user_Info.php");