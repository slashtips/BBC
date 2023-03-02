<?php
include '../db/db.php';
$str = $_POST["strQA"];
$sql = "SELECT * FROM `QA` WHERE `publish` = 1 AND (`title` LIKE '%$str%' OR `content` LIKE '%$str%')  order by `id` DESC";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


if ($res) {
    foreach ($res as $QA) {


        echo
        '<li>
                <a href="#" data-bs-toggle="modal" data-bs-target="#QA" ' . "data-id = '" . $QA['id'] . "'" . "data-title = '" . $QA['title'] . "'" . "data-content = '" . $QA['content'] . "'" . '>' . $QA['title'] . '</a>
        </li>' . ',';
    }
}
