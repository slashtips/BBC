<?php
include '../db/db.php';
$str = $_POST["str"];
$sql = "SELECT * FROM `articleM` WHERE  `publish` = 1 AND ( `title` LIKE :str OR `content` LIKE :str)   order by `id` DESC";

$stmt = $db->prepare($sql);
$stmt->bindValue(':str', "%{$str}%");
$stmt->execute();
$query = $stmt->fetchAll();

foreach ($query as $article) {
    echo '<li><a href="ArticleMedicalCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>' . ',';
}


