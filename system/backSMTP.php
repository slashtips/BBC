<?php
include '../db/db.php';
$SMTP_Server = $_POST["SMTP_Server"];
$SMTP_Email = $_POST["SMTP_Email"];
$SMTP_Password = $_POST["SMTP_Password"];
$Port = $_POST["Port"];
$Send_ID = $_POST["Send_ID"];
$Reply_Email = $_POST["Reply_Email"];

if (empty($SMTP_Password) && $SMTP_Password == "") {
    $sql = "UPDATE `SMTP` SET `SMTP_Server` = '$SMTP_Server', `SMTP_Email` = '$SMTP_Email',  `Port` = '$Port',  `Send_ID` = '$Send_ID',  `Reply_Email` = '$Reply_Email', `status` = '1' WHERE `SMTP`.`id` = 1;";

} else {
    $sql = "UPDATE `SMTP` SET `SMTP_Server` = '$SMTP_Server', `SMTP_Email` = '$SMTP_Email', `SMTP_Password` = '$SMTP_Password', `Port` = '$Port',  `Send_ID` = '$Send_ID',  `Reply_Email` = '$Reply_Email', `status` = '1' WHERE `SMTP`.`id` = 1;";
}


$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);