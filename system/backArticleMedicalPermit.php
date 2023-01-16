<?php
include '../db/db.php';
$id = $_GET['id'];
$sql = "UPDATE `articleM` SET  `status` = 1 WHERE `articleM`.`id` = $id;";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if($res)
{
    echo "<script> alert(' 醫護文章審核通過!可在發布區選取發布文章'); window.location.href='../back_articleMedical.html'</script>";
}

else{
    echo "<script> alert('醫護文章新增失敗'); window.location.href='../back_articleMedical.html'</script>";
}