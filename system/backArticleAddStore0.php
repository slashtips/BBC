<?php
include  '../db/db.php';

$topicSec = $_POST["topicSec"];
$type = $_POST["type"];
$content = $_POST["content"];
$source = $_POST["source"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期
$status = 0;
$publish = 0;

date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `article0` ( `topicSec`, `content`, `source`,`status`,`publish`, `createTime`, `updateTime`) VALUES ( '$topicSec', '$content', '$source','$status','$publish', '$date', '$date');";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if($res)
{
    echo "<script>window.location.href='../backArticleAdd.php'</script>";
}

$sqlU = "SELECT * FROM `article0`  ORDER BY id DESC LIMIT 0 , 1";
$resU = $db->query($sqlU);
$resU->setFetchMode(PDO::FETCH_ASSOC);
$id = "";
foreach ($resU as $rowU)
{
    $id  = $rowU['id'];
}


