<?php

include  '../db/db.php';
$email = $_COOKIE["email"];
$emailStr = $_POST['emailStr'];
$sql = "SELECT COUNT(EmailAddress) as EmailAddress FROM EmailAddress WHERE EmailAddress = '$emailStr';";


$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if($res)
{
    echo 1;
}
else{
    echo 0;
}
