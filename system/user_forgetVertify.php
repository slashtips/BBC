<?php
include '../db/db.php';
$emailCode = $_GET['email'];
$code = $_GET['code'];
$decode = base64_decode(str_pad(strtr($code, '-_', '+/'), strlen($code) % 4, '=', STR_PAD_RIGHT));
$email = base64_decode(str_pad(strtr($emailCode, '-_', '+/'), strlen($emailCode) % 4, '=', STR_PAD_RIGHT));
$pass = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../css/common.css">


    <title>輸入驗證碼</title>
    <style>
        .hideCode {
            display: none;
        }

        .hideEmail {
            display: none;
        }

        .commonCard .title img {
            width: 50px;
        }

        .vertifyCode {
            display: block;
        }

        .vertificationCode {
            display: none;
        }

        .vertifyCode .vertify {
            display: flex;
            flex-direction: column;
            margin-top: 1rem;
        }

        .vertifyCode .vertify input {
            width: 90%;
            margin-top: 0.5rem;
            background: #F0EBE3;
            border-radius: 40px;
            border: none;
            padding: 1rem 0 1rem 24px;
        }

        .cover {
            display: block;
        }

        .fakeBGRWD {
            display: none;
        }

        .fakeBG img {
            width: 100%;
        }

        @media screen and (max-width:576px) {
            .vertifyCode {
                display: none !important;
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

            .vertificationCode {
                display: block;
                width: 70%;
                padding: 1rem 2rem 1.5rem 2rem;
            }

            .vertificationCode h3 {
                font-size: 32px;
                font-weight: 500;
                margin-top: 1rem;
            }

            .vertificationCode h4 {
                font-weight: 400;
                font-size: 18px;
                line-height: 36px;
                color: #424452;
                letter-spacing: 0.01em;
                margin: 0;
            }

            .vertificationCode .title {
                padding: 0;
                margin: 0;
            }

            .vertificationCode .inputGroup input {
                font-weight: 400;
                font-size: 20px;
                letter-spacing: 0.04em;
            }

            .setNewPasswordSmall {
                width: 80%;
            }

            .setNewPasswordSmall h3 {
                white-space: nowrap;
            }
        }
    </style>
</head>



<body>


    <div class="cover"></div>

    <div class="fakeBG">
        <img src="../pic/index/bg.svg" alt="">
    </div>
    <div class="fakeBGRWD">
        <img src="../pic/index/bg/bgsFake.png" alt="">
    </div>


    <div class="commonCard vertifyCode">
        <img class="bigIcon" src="../pic/Common/CommonCard/bigIcon2.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>輸入驗證碼</h3>
            </div>
            <p>我們已將驗證碼寄到您的信箱，請查收信件並在下方輸入驗證碼。</p>
            <div class="vertify">
                <label for="text">驗證碼 *</label>
                <input type="text" placeholder="例 : 123456">
            </div>
            <div class="inputGroup">
                <input class="inputGroupC2 " type="submit" value="送出">
            </div>
        </div>
    </div>

    <div class="commonCardSmall vertificationCode">
        <div class=" commonTitleSmall">
            <h3>輸入驗證碼</h3>

        </div>
        <h4>我們已將驗證碼寄到您的信箱，請查收信件並在下方輸入驗證碼。</h4>
        <form action="">
            <div class="Vertify">
                <label for="Vertify">驗證碼 * </label>
                <input type="text" id="Vertify" placeholder="例 : 1 2 3 4 5 6">
            </div>
            <input class="smallc2 smallLoginBtn" type="submit" value="送出">
        </form>
    </div>

    <div class="commonCard setNewPassword">
        <img class="bigIcon" src="../pic/Common/CommonCard/bigIcon3.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>設置新密碼</h3>

            </div>
            <p>請輸入新密碼，作為未來登入使用。</p>
            <div class="password">
                <label for="NewPassword">新密碼 *</label>
                <input name="NewPassword" id="NewPassword" type="password" placeholder="例 : * * * * * *">

                <small>* 密碼必須包含英文字母和數字</small>
                <small>* 六位數以上</small>
            </div>
            <div class="password">
                <label for="NewPasswordAgain">再次輸入新密碼 *</label>
                <input id="NewPasswordAgain" type="password" placeholder="例 : * * * * * *">
                <div class="hint">
                    <small></small>
                </div>
            </div>
            <div class="inputGroup">
                <input class="inputGroupC2 " type="submit" value="確定">
            </div>
            <input type="hidden" name="email" value="<?php echo $email; ?>">
        </div>
    </div>

    <div class="commonCardSmall setNewPasswordSmall">
        <div class=" commonTitleSmall">
            <h3>設置新密碼</h3>
            <img src="../pic/Common/cancel.png" alt="">
        </div>
        <h4>請輸入新密碼，作為未來登入使用。</h4>
        <form action="">
            <div class="password">
                <label for="password">新密碼 * </label>
                <input type="password" id="password" placeholder="例 : 1 2 3 4 5 6">
                <br><br>
                <small>・密碼必須包含英文字母和數字</small>
                <br>
                <small>・六位數以上</small>
            </div>

            <div class="NewPasswordAgain">
                <label for="NewPasswordAgain">再次輸入新密碼 *</label>
                <input id="NewPasswordAgain" type="password" placeholder="例 : * * * * * *">
            </div>

            <input class="smallc2 setNewPasswordSmallBtn" type="button" value="確定">
        </form>
    </div>



    <div class="commonCard setNewPasswordCompleted">
        <img class="bigIcon" src="../pic/Common/CommonCard/bigIcon4.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>密碼設置完成</h3>

            </div>
            <p>密碼已重設成功！請用新密碼重新登入。</p>
            <div class="inputGroup">
                <input class="inputGroupC2" type="button" value="重新登入">
            </div>
        </div>
    </div>

    <div class="commonCardSmall setNewPasswordCompletedSmall">
        <div class="commonTitleSmall">
            <h3>密碼設置完成</h3>

        </div>
        <div class="bigIcon">
            <img src="../pic/Common/CommonCard/bigIcon4.png" alt="">
        </div>
        <p>密碼已重設成功！請用新密碼重新登入。</p>
        <input type="button" class="smallc2 setNewPasswordCompletedSmallBtn" value="重新登入">
    </div>





</body>

</html>

<script>


    let cardClose = document.querySelector(".commCard .title img");
    let cardCloseSmall = document.querySelector(".commonCardSmall .title img ")

    if (cardClose) {
        cardClose.addEventListener("click", function (e) {
            document.querySelector(".commCard").style = "display:none";
        }, false)
    }

    if (cardCloseSmall) {
        cardCloseSmall.addEventListener("click", function (e) {
            document.querySelector(".commCardSmall").style = "display:none";
        }, false)
    }


    let ConstEmail = "<?php echo $email; ?>"
    const emailNum = ConstEmail.length

    let vertifyCode = document.querySelector(".vertifyCode");
    let vertifyCodeInput = document.querySelector(".vertifyCode .vertify input");
    let vertifyCodeBtn = document.querySelector(".vertifyCode .inputGroup input");

    let setNewPassword = document.querySelector(".setNewPassword");
    let NewPassword = document.querySelector("#NewPassword");
    let NewPasswordAgain = document.querySelector("#NewPasswordAgain");
    let NewPasswordBtn = document.querySelector(".setNewPassword .inputGroup input");

    let setNewPasswordCompleted = document.querySelector(".setNewPasswordCompleted");

    let setNewPasswordCompletedSmall = document.querySelector(".setNewPasswordCompletedSmall");



    let passwordStatus = 0;

    $(document).ready(function () {

        if (vertifyCode) {
            vertifyCodeBtn.addEventListener("click", function (e) {
                if (vertifyCodeInput.value == <?php echo $decode; ?>) {
                    vertifyCode.style = "display:none"
                    setNewPassword.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards;"
                } else {
                    alert("驗證碼輸入錯誤")
                }
            })
        }
        NewPasswordBtn.addEventListener("click", function (e) {
            passwordStatus = 0;
            password1Str = NewPassword.value;
            password2Str = NewPasswordAgain.value;


            if (!(password2Str.match(/[A-Za-z]+/)) && !(password1Str.match(/[A-Za-z]+/))) {
                alert("密碼不包含英文字母");

            } else if (!(password2Str.match(/[0-9]+/)) && !(password1Str.match(/[0-9]+/))) {
                alert("密碼不包含數字");

            } else if (password2Str.length < 6 && password1Str.length < 6) {
                alert("密碼小於6位數");

            } else if (password1Str != password2Str) {
                alert("密碼不一致");

            } else {
                passwordStatus = 1;

            }
            if (passwordStatus == 1) {

                let dataArray = {
                    email: ConstEmail,
                    password: password1Str,
                    emailNum: emailNum
                }
                $.ajax({
                    type: "POST",
                    url: "user_changePassword.php",
                    data: dataArray,
                    success: function (response) {
                        console.log(response);
                        if (response == 1) {
                            setNewPasswordCompleted.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards;";
                            setNewPassword.style = "display:none"
                            document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                            document.cookie = "email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                            document.cookie = "loginStatus=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                        }
                    }
                });

            } else {
                return
            }
        }, false)
    });

    let setNewPasswordCompletedBtn = document.querySelector(".setNewPasswordCompleted .inputGroup input");
    setNewPasswordCompletedBtn.addEventListener("click", function (e) {
        window.location.href = "../index.php";
    }, false)

    //手機板
    $(document).ready(function () {
        let vertificationCode = document.querySelector(".vertificationCode");
        let vertificationCodeInput = document.querySelector(".vertificationCode .Vertify input");
        let vertificationCodeBtn = document.querySelector(".vertificationCode .smallLoginBtn");

        let setNewPasswordSmall = document.querySelector(".setNewPasswordSmall");
        let setNewPasswordSmallPassword = document.querySelector(".setNewPasswordSmall .password input")
        let setNewPasswordSmallPasswordAgain = document.querySelector(".setNewPasswordSmall .NewPasswordAgain input")
        let setNewPasswordSmallBtn = document.querySelector(".setNewPasswordSmallBtn");

        let setNewPasswordCompletedSmall = document.querySelector(".setNewPasswordCompletedSmall");

        let setNewPasswordCompletedSmallBtn = document.querySelector(".setNewPasswordCompletedSmallBtn")

        if (vertificationCode) {

            vertificationCodeBtn.addEventListener("click", function (e) {
                e.preventDefault();
                if (vertificationCodeInput.value == code.dataset.code) {
                    vertificationCode.style = "display:none";
                    setNewPasswordSmall.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards;";
                } else {
                    alert("驗證碼輸入錯誤")
                }
            }, false)
        }

        setNewPasswordSmallBtn.addEventListener("click", function (e) {
            e.preventDefault();
            passwordStatus = 0;
            password1Str = setNewPasswordSmallPassword.value;
            password2Str = setNewPasswordSmallPasswordAgain.value;


            if (!(password2Str.match(/[A-Za-z]+/)) && !(password1Str.match(/[A-Za-z]+/))) {
                alert("密碼不包含英文字母");

            } else if (!(password2Str.match(/[0-9]+/)) && !(password1Str.match(/[0-9]+/))) {
                alert("密碼不包含數字");

            } else if (password2Str.length < 6 && password1Str.length < 6) {
                alert("密碼小於6位數");

            } else if (password1Str != password2Str) {
                alert("密碼不一致");

            } else {
                passwordStatus = 1;

            }
            if (passwordStatus == 1) {


                let dataArray = {
                    email: ConstEmail,
                    password: password1Str,
                    emailNum: emailNum

                }
                $.ajax({
                    type: "POST",
                    url: "user_changePassword.php",
                    data: dataArray,
                    success: function (response) {
                        console.log(response);
                        if (response == 1) {
                            setNewPasswordSmall.style = "display:none"
                            setNewPasswordCompletedSmall.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards;";

                            document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                            document.cookie = "email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                            document.cookie = "loginStatus=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                        }
                    }
                });

            } else {
                return
            }
        }, false)
        if (setNewPasswordCompletedSmallBtn) {
            setNewPasswordCompletedSmallBtn.addEventListener("click", function (e) {
                window.location.href = "../index.php";
            })
        }

    })
</script>