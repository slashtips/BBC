<?php
include  '../db/db.php';
$email = $_GET['email'];


$sql = "UPDATE `users` SET `status` = '1' ,`title` = 'HealthcareProfessional'  WHERE `users`.`email` = '$email';";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

$sql2 = "SELECT * FROM `users` WHERE `users`.`email` = '$email';";
$res2 = $db->query($sql2);
$res2->setFetchMode(PDO::FETCH_ASSOC);

foreach ($res2 as $user) {
    echo $user['firstName'] . $user['lastName'];
}
foreach ($res2 as $user) {
    echo $user['email'];
    $username = $user['firstName'] . $user['lastName'];

    setcookie("username", "$username", time() + 7200);
    setcookie("email", "$user[email]", time() + 7200);
    setcookie("title", "$user[title]", time() + 7200);
    setcookie("status", "$user[status]", time() + 7200);
}
if ($res) {
    echo "驗證成功";

} else {
    echo "不符合驗證資格";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/common.css">
    <style>
        .cover {
            display: block;
        }

        .fakeBGRWD {
            display: none;
        }

        .fakeBG img {
            width: 100%;
        }

        .registerCompleted .inputGroup input:hover {
            cursor: pointer;
        }

        


        @media screen and (max-width:576px) {

            .registerCompleted {
                display: none;
            }

            .registerCompletedSmall {
                display: block;
            }

            .fakeBG {
                display: none;
            }

            .fakeBGRWD {
                display: block;
            }

            .fakeBGRWD img {
                width: 100%;
            }

        }
    </style>
    <title>首頁</title>
</head>

<body>
    <div class="cover"></div>

    <div class="fakeBG">
        <img src="../pic/index/bg.svg" alt="">
    </div>

    <div class="fakeBGRWD">
        <img src="../pic/index/bg/bgsFake.png" alt="">
    </div>

    <div class="commonCard registerCompleted">

        <div class="textContent">
            <div class="title">
                <h3>註冊完成</h3>
            </div>
            <div class="bigIcon">
                <img src="../pic/Common/CommonCard/bigIcon4.png" alt="">
            </div>
            <p>您現在可以進入醫護人員頁面，開始享受最完整的醫護人員管理功能！</p>
            <div class="inputGroup">
                <input class="inputGroupC2" type="button" value="重新登入">
            </div>
        </div>
    </div>

    <div class="commonCardSmall registerCompletedSmall">
        <div class="commonTitleSmall">
            <h3>註冊完成</h3>
        </div>
        <div class="bigIcon">

        </div>
        <p>我們已將帳號開通連結傳至您的信箱，請查收信件並點擊該連結，即可開通帳號完成註冊流程。</p>
        <input type="button" class="smallc2" value="重新登入">
    </div>
</body>
<script>
    let registerCompletedBtn = document.querySelector(".registerCompleted .inputGroup input");

    if (registerCompletedBtn) {
        registerCompletedBtn.addEventListener("click", function(e) {
            window.location.href = "../MedicalArea.php";
        }, false);
    }

    let registerCompletedSmallBtn = document.querySelector(".registerCompletedSmall input");

    if (registerCompletedSmallBtn) {
        registerCompletedSmallBtn.addEventListener("click", function(e) {
            window.location.href = "../MedicalArea.php";
        }, false);
    }


</script>

</html>