<?php
include '../db/db.php';
$sql = "SELECT * FROM `SMTP` WHERE id = '1' ";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

$SMTP_Server = "";
$SMTP_Email = "";
$SMTP_Password = "";
$Port = "";
$Send_ID = "";
$email = "";
$Reply_Email = "";

foreach ($res as $row) {
    $SMTP_Server = $row["SMTP_Server"];
    $SMTP_Email = $row["SMTP_Email"];
    $SMTP_Password = $row["SMTP_Password"];
    $Port = $row["Port"];
    $Send_ID = $row["Send_ID"];
    $email = $_POST['Email'];
    $Reply_Email = $row["Reply_Email"];

}




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
    $mail->Host = $SMTP_Server; // SMTP服务器
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
    $mail->addBCC('royz1110110@gmail.com'); //密送

    //发送附件       // 添加附件
    // 发送附件并且重命名
    $local = $_SERVER['HTTP_HOST'];
    //Content
    $mail->isHTML(true); // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
    $mail->Subject = "【SMTP測試信件】";
    $body = "SMTP功能正常";
    $mail->Body = "$body";
    $mail->AltBody = '沒有支援html';
    $mail->send();
    echo "寄件成功，請查收信件";
} catch (Exception $e) {
    echo '信箱寄送失敗: ', $mail->ErrorInfo;
}