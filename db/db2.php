<?PHP
ob_start();

$db_server = "localhost";
$db_name = "zfcloudadmin_kaiBBC_meeting";
$db_user = "zfcloudadmin_root";
$db_passwd = "m4h5KHgKFUx4";


if (!@mysqli_connect($db_server, $db_user, $db_passwd, $db_name)) {
    die("無法對資料庫連線");
}

$connect = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);

mysqli_query($connect, "SET NAMES utf8");

if (!@mysqli_select_db($connect, $db_name)) {
    die("無法使用資料庫");
}

