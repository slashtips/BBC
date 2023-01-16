<?php
include '../db/db.php';
$topicSec = $_POST["topicSec"];

$str = "";
if ($topicSec == "全部類別") {
    $sql = "SELECT * FROM `QA` WHERE `publish` = 1 ORDER BY id DESC";
    $res = $db->query($sql);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($res as $QA) {
        $str .= ' <div class="q" >
                <div class="title">
                <img src="pic/Common/plus.svg">
                    <h4>' . $QA['title'] . '</h4>
                </div>
                <div class="text">
                <div class="overflowText">' . $QA['content'] . '</div>' .

            ' </div>
            </div>';
    }
} else {
    $sql = "SELECT * FROM `QA` WHERE `topicSec` = '$topicSec' AND `publish` = 1 ORDER BY id DESC";
    $res = $db->query($sql);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($res as $QA) {
        $str .= ' <div class="q" >
                <div class="title">
                <img src="pic/Common/plus.svg">
                    <h4>' . $QA['title'] . '</h4>
                </div>
                <div class="text">
                <div class="overflowText">' . $QA['content'] . '</div>' .

            ' </div>
            </div>';
    }
}

// $row = mysqli_fetch_array($res);

if ($res) {
    echo $str;
}