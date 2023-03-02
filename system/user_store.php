<?php
include '../db/db.php';
$sql = "SELECT * FROM `SMTP` WHERE id = '1' ";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


$SMTP_Server = "";
$SMTP_Email = "";
$SMTP_Password = "";
$Port = "";
$Send_Email = "";
$Send_ID = "";
$Reply_Email = "";


foreach ($res as $row) {
    $SMTP_Server = $row["SMTP_Server"];
    $SMTP_Email = $row["SMTP_Email"];
    $SMTP_Password = $row["SMTP_Password"];
    $Port = $row["Port"];
    $Send_Email = $row["Send_Email"];
    $Send_ID = $row["Send_ID"];
    $Reply_Email = $row["Reply_Email"];
}



$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password1 = $_POST["password1"];
$passwordHash = password_hash($password1, PASSWORD_BCRYPT);
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期
$photoPath = "pic/Common/userNone.png";
$title = "NotOpened";

$sqlError = "SELECT  *  FROM `users` WHERE email=:email; ";

$stmt = $db->prepare($sqlError);
$stmt->bindValue(':email', $email);

$stmt->execute();
$query2 = $stmt->fetchAll();

$emailE = "";

foreach ($query2 as $rowError) {
    $emailE = $rowError['id'];
}


if ($emailE != "") {
    echo "0";
    exit();
}



$sql = "INSERT INTO `users` ( `firstName`, `lastName`, `email`, `password`, `date`, `status`,`photoPath`,`title`) VALUES ( :firstName, :lastName, :email, :passwordHash, '$date', '0',:photoPath,:title);";

$stmt = $db->prepare($sql);
$stmt->bindValue(':firstName', $firstName);
$stmt->bindValue(':lastName', $lastName);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':passwordHash', $passwordHash);
$stmt->bindValue(':photoPath', $photoPath);
$stmt->bindValue(':title', $title);
$stmt->execute();
$query = $stmt->fetchAll();



use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require '../include/PHPMailer/src/Exception.php';
require '../include/PHPMailer/src/PHPMailer.php';
require '../include/PHPMailer/src/SMTP.php';



$mail = new PHPMailer();

try {
    //服务器配置
    $mail->CharSet = "UTF-8"; //设定邮件编码
    $mail->SMTPDebug = 0; // 调试模式输出
    $mail->isSMTP(); // 使用SMTP
    $mail->Host = $SMTP_Server; // SMTP服务器              // SMTP服务器
    $mail->SMTPAuth = true; // 允许 SMTP 认证
    $mail->Username = $SMTP_Email; // SMTP 用户名  即邮箱的用户名
    $mail->Password = $SMTP_Password; // SMTP 密码  部分邮箱是授权码(例如163邮箱)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    // 允许 TLS 或者ssl协议
    $mail->Port = $Port; // 服务器端口 25 或者465 具体要看邮箱服务器支持

    $mail->setFrom($SMTP_Email, $Send_ID); //发件人
    $mail->addAddress($email, $lastName); // 收件人
    // 可添加多个收件人
    $mail->addReplyTo($Reply_Email, 'reply'); //回复的时候回复给哪个邮箱 建议和发件人一致
    //抄送
    $mail->addBCC('royz1110110@gmail.com'); //密送




    $local = $_SERVER['HTTP_HOST'];
    $mail->isHTML(true); // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
    $mail->Subject = "【信箱確認信】";
    $body = "
        <h1>親愛的「 $firstName  $lastName 」您好</h1>
        <p>我們已將帳號開通連結傳至您的信箱，請查收信件並點擊該連結，即可開通帳號完成註冊流程。</p>
        <h3>請點擊<a href='$local/system/check.php?email=$email'>此連結</a>確認：）<br>
        </h3>
    " . "<br>" . $date . "本信由報名系統發送";
    $mail->Body = "$body";
    $mail->AltBody = '沒有支援html';
    $mail->send();
} catch (Exception $e) {
    echo '邮件发送失败: ', $mail->ErrorInfo;
}
?>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <title>開通帳號</title>
</head>
<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }
</style>

<body>
    <div class="card">

        <h1>開通帳號</h1>
        <img src="../pic/Common/CommonCard/bigIcon1.png" alt="">

        <p>我們已將帳號開通連結傳至您的信箱，請查收信件並點擊該連結，即可開通帳號完成註冊流程。
        </p>
        <br>
        <br>
        <p></p>
        <div class="btn-gruop me-4">
            <input class="btn " style="background-color:#bf001f;color:#fff" type="button" value="回到首頁"
                onclick="self.location.href='../index.php'" />
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</html>