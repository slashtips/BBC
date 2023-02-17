<?php
include '../db/db.php';


$title = $_POST["title"];
$topicSec = $_POST['topicSec'];
$content = $_POST["content"];

$id = $_POST["id"];
date_default_timezone_set('Asia/Taipei'); //時區
$sql = "UPDATE `QA` SET  `title` = :title, `content` = :content,`topicSec` = :topicSec WHERE `QA`.`id` = :id;";


$stmt = $db->prepare($sql);

$stmt->bindValue(':title', $title);
$stmt->bindValue(':content', $content);
$stmt->bindValue(':topicSec', $topicSec);
$stmt->bindValue(':id', $id);

$stmt->execute();
$query = $stmt->fetchAll();


header("Location:../back_QA_EditInfo.php");