<?php
include '../db/db.php';
$str = $_POST["str"];
$sql = "SELECT * FROM `meeting` WHERE  `publish` = 1 AND ( `title` LIKE '%$str%' OR `content` LIKE '%$str%')   order by `id` DESC";

$stmt = $db->prepare($sql);
$stmt->bindValue(':str', "%{$str}%");
$stmt->execute();
$query = $stmt->fetchAll();


foreach ($query as $meeting) {
    echo '<li><a href="meetingCommon.php?i=' . $meeting['id'] . '">' . $meeting['title'] . '</a></li>' . ',';
}