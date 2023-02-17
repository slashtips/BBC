<?php
include '../db/db.php';
$str = $_POST["str"];
$topicSec = $_POST['topicSec'];
$sql = "SELECT * FROM `article` WHERE `title` LIKE :str OR `content` LIKE :str And `publish` = 1 AND `topicSec` = :topicSec order by `id` DESC";

$stmt = $db->prepare($sql);
$stmt->bindValue(':str', "%{$str}%");
$stmt->bindValue(':topicSec', $topicSec);
$stmt->execute();
$query = $stmt->fetchAll();

// foreach ($query as $article) {
//     echo '<li><a href="ArticleCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>' . ',';
// }


// $res = $db->query($sql);
// $res->setFetchMode(PDO::FETCH_ASSOC);


// if ($res) {
//     foreach ($res as $article) {


//         echo '<li><a href="ArticleCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>' . ',';
//     }
// }
