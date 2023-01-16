<?php
include  '../db/db.php';
$No1 = $_POST['No1'];
$No2 = $_POST['No2'];
$No3 = $_POST['No3'];
$No4 = $_POST['No4'];
$No5 = $_POST['No5'];
$Q1  = $_POST['groupA1'];
$Q1Str = "";
if ($Q1) {
    foreach ($Q1 as $str) {
        $Q1Str .= $str . ",";
    };
}
$Q2  = $_POST['groupA2'];
$Q2Str = "";
if ($Q2) {
    foreach ($Q2 as $str) {
        $Q2Str .= $str . ",";
    };
}
$Q3  = $_POST['groupB1'];
$Q3Str = "";
if ($Q3) {
    foreach ($Q3 as $str) {
        $Q3Str .= $str . ",";
    };
}

$Q4  = $_POST['groupB2'];
$Q4Str = "";
if ($Q4) {
    foreach ($Q4 as $str) {
        $Q4Str .= $str . ",";
    };
}
$Q5  = $_POST['groupB3'];
$Q5Str = "";
if ($Q5) {
    foreach ($Q5 as $str) {
        $Q5Str .= $str . ",";
    };
}
$Q6  = $_POST['groupB4'];
$Q6Str = "";
if ($Q6) {
    foreach ($Q6 as $str) {
        $Q6Str .= $str . ",";
    };
}
$Q7  = $_POST['groupB5'];
$Q7Str = "";
if ($Q7) {
    foreach ($Q7 as $str) {
        $Q7Str .= $str . ",";
    };
}
$Q8  = $_POST['groupB6'];
$Q8Str = "";
if ($Q8) {
    foreach ($Q8 as $str) {
        $Q8Str .= $str . ",";
    };
}
$Q9  = $_POST['groupC1'];
$Q9Str = "";
if ($Q9) {
    foreach ($Q9 as $str) {
        $Q9Str .= $str . ",";
    };
}
$username = $_POST['hideUserName'];
if ($username == "undefined") {
    $username = "匿名者";
}
$email = $_POST['hideEmail'];
if ($email == "undefined") {
    $email = "未登入";
}
echo $No1;
echo $No2;
echo $No3;
echo $No4;
echo $No5;
echo $Q1Str;
echo $Q2Str;
echo $Q3Str;
echo $Q4Str;
echo $Q5Str;
echo $Q6Str;
echo $Q7Str;
echo $Q8Str;
echo $Q9Str;
echo $username;
echo $email;

date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期


date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `questions` (`No1`, `No2`, `No3`, `No4`, `No5`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `username`, `email`, `createTime`) VALUES ( '$No1', '$No2', '$No3', '$No4', '$No5', '$Q1Str', '$Q2Str', '$Q3Str', '$Q4Str', '$Q5Str', '$Q6Str', '$Q7Str', '$Q8Str', '$Q9Str', '$username', '$email', '$date');";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);
