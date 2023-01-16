<?php




extract($_FILES['photo']);

$img_name = md5(time()); //建立亂數檔名
$ext = pathinfo($name, PATHINFO_EXTENSION); //取得副檔名
$fullname = $img_name . '.' . $ext; //合併檔名+副檔名



$folder = '../store/user/'; //上傳路徑
$target = $folder . $fullname; // 目標路徑
$path = 'store/user/' . $fullname;
if (!is_dir($folder)) {
    mkdir($folder);
    //若資料夾不存在就建立資料夾
}
switch ($error) {
    case 0:
        if (move_uploaded_file($tmp_name, $target)) {
            echo '<script>alert("更新成功")</script>';
        } else {
            echo '<script>alert("上傳圖片失敗 : ' . $error . '")</script>';
        }
        break;
    case 1:
        echo '上傳檔案過大(伺服器限制)';
        break;
    // 不會顯示出來 會直接報錯
    case 2:
        echo '上傳檔案過大(表單限制)';
        break;
    case 3:
        echo '只有部分上傳';
        break;
    case 4:
        echo '請選擇檔案';
        break;
    case 6:
        echo '遺失暫存資料夾';
        break;
    case 7:
        echo '無法寫入';
        break;
    case 8:
        echo '不支援檔案上傳';
        break;
}



include '../db/db.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $firstName . $lastName;
$email = $_POST["email"];
$password = $_POST["password"];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);
$cookieEmail = $_COOKIE["email"];


if ($password != "") {
    $sql = "UPDATE `users` SET `firstName` = '$firstName', `lastName` = '$lastName', `password` = '$passwordHash', `photoPath` = '$path' WHERE `users`.`email` = '$cookieEmail';";
} else {
    $sql = "UPDATE `users` SET `firstName` = '$firstName', `lastName` = '$lastName', `photoPath` = '$path' WHERE `users`.`email` = '$cookieEmail';";
}


$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

if ($res) {
    setcookie("username", $username, time() + 7200, "/");
    setcookie("photoPath", $path, time() + 7200, "/");
}



echo "<script>window.location.href='../personal.php'</script>";










?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新中</title>
    <style>
        body,
        html {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center img {
            width: 30%;
        }
    </style>
</head>

<body>
    <div class="center">
        <img src="../pic/Common/loading.png" alt="">
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
    integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>


<script>
    //Cookie讀取
    function parseCookie() {
        var cookieObj = {};
        var cookieAry = document.cookie.split(';');
        var cookie;
        for (var i = 0, l = cookieAry.length; i < l; ++i) {
            cookie = jQuery.trim(cookieAry[i]);
            cookie = cookie.split('=');
            cookieObj[cookie[0]] = cookie[1];
        }

        return cookieObj;
    }

    function getCookieByName(name) {
        var value = parseCookie()[name];
        if (value) {
            value = decodeURIComponent(value);
        }

        return value;
    }
</script>

</html>