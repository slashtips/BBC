<?php
include '../db/db.php';
$str = $_POST["str"];
$sql = "SELECT * FROM `meeting` WHERE  `publish` = 1 AND ( `title` LIKE '%$str%' OR `content` LIKE '%$str%')   order by `id` DESC";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);



if ($res) {
    foreach ($res as $meeting) {
        echo '<li><a href="meetingCommon.php?i=' . $meeting['id'] . '">' . $meeting['title'] . '</a></li>' . ',';
    }
}
