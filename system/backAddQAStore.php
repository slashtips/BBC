<?php
include  '../db/db.php';

$title = $_POST["title"];
$topicSec = $_POST["topicSec"];
$content = $_POST["content"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期
$status = 1;
$publish = 1;

date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `QA` ( `title`, `content`, `topicSec`, `status`, `publish`, `createTime`) VALUES ( '$title', '$content', '$topicSec', '$status', '$publish', '$date');";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if ($res) {
    echo "<script> alert('QA新增完成，請等候批准');window.location.href='../back_QA.html'; </script>";
    exit;
}
