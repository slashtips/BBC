<?php
include '../db/db.php';
$id = $_GET['id'];
$sql = "UPDATE `article` SET  `status` = 1 WHERE `article`.`id` = $id;";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if($res)
{
    echo "<script> alert('文章審核通過!可在發布區選取發布文章'); window.location.href='../back_articleArticleIndex.html'</script>";
}

else{
    echo "<script> alert('文章新增失敗'); window.location.href='../back_article.html'</script>";
}