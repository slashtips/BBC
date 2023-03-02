<?php
include  '../db/db.php';


$title = $_POST["title"];
$topicSec = $_POST['topicSec'];
$content = $_POST["content"];

$id = $_POST["id"];
date_default_timezone_set('Asia/Taipei'); //時區
$sql = "UPDATE `QA` SET  `title` = '$title', `content` = '$content',`topicSec` = '$topicSec', WHERE `QA`.`id` = $id;";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);
header("Location:../back_QA_EditInfo.php");
