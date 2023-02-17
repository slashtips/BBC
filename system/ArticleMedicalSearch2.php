<?php
include '../db/db.php';
$str = $_POST["str"];
$topicSec = $_POST['topicSec'];
$sql = "SELECT * FROM `articleM` WHERE  `topicSec` = :topicSec And `publish` = 1 AND (`title` LIKE :str OR `content` LIKE :str)  order by `id` DESC";

$stmt = $db->prepare($sql);
$stmt->bindValue(':topicSec', $topicSec);
$stmt->bindValue(':str', "%{$str}%");
$stmt->execute();
$query = $stmt->fetchAll();

foreach ($query as $article) {
    echo '<li><a href="ArticleMedicalCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>' . ',';
}

