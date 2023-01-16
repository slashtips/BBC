<?php
include '../db/db2.php';

$inputname = $_POST['inputname'];
$inputValue = $_POST['inputValue'];
var_dump($inputValue);
$id = $_POST['id'];

$str1 = "";
for ($i = 0; $i < count($inputname); $i++) {
    if ($i < count($inputname) - 1) {
        $str1 .= "`$inputname[$i]`,";
    } else {
        $str1 .= "`$inputname[$i]`";
    }
}

$str2 = "";

for ($i = 0; $i < count($inputValue); $i++) {
    if ($i < count($inputValue) - 1) {
        $str2 .= "'$inputValue[$i]',";
    } else {
        $str2 .= "'$inputValue[$i]'";
    }
}



$sql = "INSERT INTO `meeting$id` ($str1) VALUES ( $str2);";
echo $sql;
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);
