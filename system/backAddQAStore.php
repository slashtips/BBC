<?php
include '../db/db.php';

$title = $_POST["title"];
$topicSec = $_POST["topicSec"];
$content = $_POST["content"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期
$status = 1;
$publish = 1;

date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `QA` ( `title`, `content`, `topicSec`, `status`, `publish`, `createTime`) VALUES ( :title, :content, :topicSec, '$status', '$publish', '$date');";

$stmt = $db->prepare($sql);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':content', $content);
$stmt->bindValue(':topicSec', $topicSec);
$stmt->execute();
$query = $stmt->fetchAll();

echo "<script>window.location.href='../back_QA.html'; </script>";
exit;