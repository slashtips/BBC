<?php
include '../db/db.php';
$str = $_POST["str"];
$topicSec = $_POST['topicSec'];
$sql = "SELECT * FROM `article` WHERE  `topicSec` = '$topicSec' And `publish` = 1 AND (`title` LIKE '%$str%' OR `content` LIKE '%$str%')  order by `id` DESC";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);



if ($res) {
    foreach ($res as $article) {

        echo '<li><a href="ArticleCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>' . ',';
    }
}
