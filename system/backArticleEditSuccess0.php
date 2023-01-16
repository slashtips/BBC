<?php
include  '../db/db.php';

$topic = $_POST["topic"];
$title = $_POST["title"];
$topicSec = $_POST["topicSec"];
$type = $_POST["type"];
$content = $_POST["content"];
$source = $_POST["source"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期
$id = $_POST["id"];
$body = $_POST["body"];
date_default_timezone_set('Asia/Taipei'); //時區
$sql = "UPDATE `article0` SET `topic` = '$topic', `title` = '$title',`topicSec` = '$topicSec', `content` = '$content', `updateTime` = '$date' WHERE `article0`.`id` = $id;";

$res = mysqli_query($connect, $sql);
header("Location:../backArticleEditInfo0.php");
