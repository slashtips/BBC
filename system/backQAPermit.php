<?php
include '../db/db.php';
$id = $_GET['id'];
$sql = "UPDATE `QA` SET  `status` = 1 WHERE `QA`.`id` = $id;";
echo $sql;
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if($res)
{
    echo "<script> alert('問答審核通過!可選擇發布問答'); window.location.href='../back_QA.html'</script>";
}

else{
    echo "<script> alert('問答新增失敗'); window.location.href='../back_QA.html'</script>";
}
