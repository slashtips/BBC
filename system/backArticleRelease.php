<?php
include '../db/db.php';
$id = $_GET['id'];
$sql = "UPDATE `article` SET `publish` = '1' WHERE `article`.`id` = $id;";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);
if ($res) {
    echo "<script> alert('發布成功!'); window.location.href='../back_articleArticleIndex.html'</script>";
} else {
    echo "<script> alert('發布失敗!'); window.location.href='../back_articleArticleIndex.html'</script>";
}

