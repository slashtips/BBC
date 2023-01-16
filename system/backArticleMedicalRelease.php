<?php
include '../db/db.php';
$id = $_GET['id'];
$sql = "UPDATE `articleM` SET `publish` = '1' WHERE `articleM`.`id` = $id;";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);
if ($res) {
    echo "<script> alert('發布成功!'); window.location.href='../back_articleMedical.html'</script>";
} else {
    echo "<script> alert('發布失敗!'); window.location.href='../back_articleMedical.html'</script>";
}

