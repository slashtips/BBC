<?php
include 'db/db.php';
$sqlGA = "SELECT * FROM `GACode` ORDER BY id  LIMIT 0 , 1";
$resGA = $db->query($sqlGA);
$resGA->setFetchMode(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>腸癌易點通</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/common.css">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>


<script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=<?php
foreach ($resGA as $GA) {
    echo $GA['CodeID'];
} ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', '<?php foreach ($resGA as $GA) {
        echo $GA['CodeID'];
    } ?> ');
</script>

<body>
    <div class="cover"></div>
    <div class="menu"></div>

    <div class="alert">
        <img src="pic/Common/tags.png" alt="">
        <h6></h6>
    </div>

    <div class="cookie">

    </div>

    <div class="bgWrap">

        <div class="bg">
            <img class="opa0Img" src="pic/index/bg/back1.svg" alt="">
            <div class="topicc">
                <div class="tp tp1">
                    <img class="tp1" src="pic/index/bg/topic1.svg" alt="">
                    <input type="button" class="tpBtn tp1Btn" value="1.症狀察覺">
                </div>

                <div class="tp tp2">
                    <img class="tp2" src="pic/index/bg/topic2.svg" alt="">
                    <input type="button" class="tpBtn tp2Btn" value="2.疾病診斷">
                </div>

                <div class="tp tp3">
                    <img class="tp3" src="pic/index/bg/topic3.svg" alt="">
                    <input type="button" class="tpBtn tp3Btn" value="3.治療種類">
                </div>

                <div class="tp tp4">
                    <img class="tp4" src="pic/index/bg/topic4.svg" alt="">
                    <input type="button" class="tpBtn tp4Btn" value="4.後續追蹤">
                </div>

                <div class="tp tp5">
                    <img class="tp5" src="pic/index/bg/topic5.svg" alt="">
                    <input type="button" class="tpBtn tp5Btn" value="5.腸癌照護">
                </div>
            </div>
        </div>

    </div>
    <div class="bgWrapSm">
        <img src="pic/index/bg/bgSm.svg" alt="">
        <div class="tpGroup">
            <div class="tp1">
                <img src="pic/index/bg/topic1.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="1.症狀察覺">
            </div>
            <div class="tp2">
                <img src="pic/index/bg/topic2.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="2.疾病診斷">
            </div>
            <div class="tp3">
                <img src="pic/index/bg/topic3.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="3.治療種類">
            </div>
            <div class="tp4">
                <img src="pic/index/bg/topic4.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="4.後續追蹤">
            </div>
            <div class="tp5">
                <img src="pic/index/bg/topic5.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="5.腸癌照護">
            </div>
        </div>
    </div>

    <div class="cover"></div>
    <div class="loginH"></div>
    <div class="OutHref"></div>
    <div class="questionSelectCard">

    </div>

    <div class="questionAsk"></div>

    <div class="register"></div>

    <div class="commonCard openPass"></div>
    <div class="commonCard forgetPassword"></div>

    <div class="commonCard vertifyCode">
        <img class="bigIcon" src="/pic/Common/CommonCard/bigIcon2.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>輸入驗證碼</h3>
                <img src="pic/Common/cancel.png" alt="">
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

    <div class="commonCard setNewPassword">
        <img class="bigIcon" src="/pic/Common/CommonCard/bigIcon3.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>設置新密碼</h3>
                <img src="pic/Common/cancel.png" alt="">
            </div>
            <p>請輸入新密碼，作為未來登入使用。</p>
            <div class="password">
                <label for="NewPassword">新密碼 *</label>
                <input id="NewPassword" type="password" placeholder="例 : * * * * * *">
                <small>* 密碼必須包含英文字母和數字</small>
                <small>* 六位數以上</small>
            </div>
            <div class="password">
                <label for="NewPasswordAgain">再次輸入新密碼 *</label>
                <input id="NewPasswordAgain" type="password" placeholder="例 : * * * * * *">
            </div>
            <div class="inputGroup">
                <input class="inputGroupC2 " type="submit" value="確定">
            </div>
        </div>
    </div>

    <div class="commonCard setNewPasswordCompleted">
        <img class="bigIcon" src="/pic/Common/CommonCard/bigIcon4.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>密碼設置完成</h3>
                <img src="pic/Common/cancel.png" alt="">
            </div>
            <p>密碼已重設成功！請用新密碼重新登入。</p>
            <div class="inputGroup">
                <input class="inputGroupC2" type="button" value="重新登入">
            </div>
        </div>
    </div>

    <div class="commonCardSmall loginSmall">

    </div>

    <div class="commonCardSmall registerSmall">

    </div>

    <div class="commonCardSmall openPassSmall">

    </div>

    <div class="commonCardSmall registerCompletedSmall">

    </div>


    <div class="commonCardSmall forgetPasswordSmall">

    </div>

    <div class="commonCardSmall verificationCode">

    </div>

    <div class="commonCardSmall setNewPasswordSmall">

    </div>


    <div class="commonCardSmall setNewPasswordCompletedSmall ">
        <div class="commonTitleSmall">
            <h3>密碼設置完成</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="bigIcon">
            <img src="pic/Common/CommonCard/bigIcon4.png" alt="">
        </div>
        <p>密碼已重設成功！請用新密碼重新登入。</p>
        <input type="button" class="smallc2" value="重新登入">
    </div>

    <div class="footer"></div>


    <div class="menu1">

    </div>

    <div class="menum">

    </div>



    <div class="topicLL">
        <div class="Ltopic topicLL1">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic1.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>1.症狀察覺</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page1.php">
                        <img src="pic/page1/page1_bigIcon.svg" alt="">
                        <h3>疾病篩檢</h3>
                    </a>
                    <a href="page2.php">
                        <img src="pic/page2/page2_bigIcon.png" alt="">
                        <h3>疾病症狀</h3>
                    </a>
                </div>
            </div>

        </div>

        <div class="Ltopic topicLL2">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic2.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>2.疾病診斷</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page3.php">
                        <img src="pic/page3/page3_bigIcon.png" alt="">
                        <h3>病理報告</h3>
                    </a>
                    <a href="page4.php">
                        <img src="pic/page4/page4_bigIcon.png" alt="">
                        <h3>影像學</h3>
                    </a>
                </div>
                <div class="row">
                    <a href="page5.php">
                        <img src="pic/page5/page5_bigIcon.png" alt="">
                        <h3>基因測試</h3>
                    </a>
                    <a href="page6.php">
                        <img src="pic/page6/page6_bigIcon.png" alt="">
                        <h3>癌症分期</h3>
                    </a>
                </div>
            </div>

        </div>

        <div class="Ltopic topicLL3">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic3.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>3.治療種類</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page7.php">
                        <img src="pic/page7/page7_bigIcon.png" alt="">
                        <h3>化學藥物治療</h3>
                    </a>
                    <a href="page8.php">
                        <img src="pic/page8/page8_bigIcon.png" alt="">
                        <h3>手術治療</h3>
                    </a>
                </div>
                <div class="row">
                    <a href="page9.php">

                        <img src="pic/page9/page9_bigIcon.png" alt="">
                        <h3>放射治療</h3>

                    </a>
                    <a href="page10.php">

                        <img src="pic/page10/page10_bigIcon.png" alt="">
                        <h3>標靶治療</h3>

                    </a>
                </div>
            </div>

        </div>

        <div class="Ltopic topicLL4">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic4.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>4.後續追蹤</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page11.php">
                        <img src="pic/page11/page11_bigIcon.png" alt="">
                        <h3>手術後照護</h3>
                    </a>
                    <a href="page12.php">
                        <img src="pic/page12/page12_bigIcon.png" alt="">
                        <h3>副作用管理</h3>
                    </a>
                </div>
                <div class="row">
                    <a href="page13.php">
                        <img src="pic/page13/page13_bigIcon.png" alt="">
                        <h3>營養建議</h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="Ltopic topicLL5">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic5.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>5.腸癌照護</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page14.php">
                        <img src="pic/page14/page14_bigIcon.png" alt="">
                        <h3>心理健康</h3>
                    </a>
                    <a href="page15.php">
                        <img src="pic/page15/page15_bigIcon.png" alt="">
                        <h3>社會資源</h3>
                    </a>
                </div>
                <div class="row">
                    <a href="page16.php">
                        <img src="pic/page16/page16_bigIcon.png" alt="">
                        <h3>癌症資源中心</h3>
                    </a>
                    <a href="page17.php">
                        <img src="pic/page17/page17_bigIcon.png" alt="">
                        <h3>個人化精準醫療</h3>
                    </a>
                </div>

            </div>
        </div>


    </div>



    <div class="menu2"></div>

    <div class="topicS">
        <div class="topicc topic1">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>1. 症狀察覺</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">
                        <a href="page1.php">
                            <div class="col">
                                <img src="pic/page1/page1_bigIcon.svg" alt="">
                                <h4>疾病篩檢</h4>
                            </div>
                        </a>
                        <a href="page2.php">
                            <div class="col">
                                <img src="pic/page2/page2_bigIcon.png" alt="">
                                <h4>疾病症狀</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="topicc topic2">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>2. 疾病診斷</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">

                        <a href="page3.php">
                            <div class="col">
                                <img src="pic/page3/page3_bigIcon.png" alt="">
                                <h4>病理報告</h4>
                            </div>
                        </a>
                        <a href="page4.php">
                            <div class="col">
                                <img src="pic/page4/page4_bigIcon.png" alt="">
                                <h4>影像學</h4>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="page5.php">
                            <div class="col">
                                <img src="pic/page5/page5_bigIcon.png" alt="">
                                <h4>基因測試</h4>
                            </div>
                        </a>
                        <a href="page6.php">
                            <div class="col">
                                <img src="pic/page6/page6_bigIcon.png" alt="">
                                <h4>腸癌分期</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="topicc topic3">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>3. 治療種類</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">
                        <a href="page7.php">
                            <div class="col">
                                <img src="pic/page7/page7_bigIcon.png" alt="">
                                <h4>化學藥物治療</h4>
                            </div>
                        </a>
                        <a href="page8.php">
                            <div class="col">
                                <img src="pic/page8/page8_bigIcon.png" alt="">
                                <h4>手術治療</h4>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="page9.php">
                            <div class="col">
                                <img src="pic/page9/page9_bigIcon.png" alt="">
                                <h4>放射治療</h4>
                            </div>
                        </a>
                        <a href="page10.php">
                            <div class="col">
                                <img src="pic/page10/page10_bigIcon.png" alt="">
                                <h4>標靶治療</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="topicc topic4">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>4. 後續追蹤</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">
                        <a href="page11.php">
                            <div class="col">
                                <img src="pic/page11/page11_bigIcon.png" alt="">
                                <h4>手術後照護</h4>
                            </div>
                        </a>
                        <a href="page12.php">
                            <div class="col">
                                <img src="pic/page12/page12_bigIcon.png" alt="">
                                <h4>副作用管理</h4>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="page13.php">
                            <div class="col">
                                <img src="pic/page13/page13_bigIcon.png" alt="">
                                <h4>營養建議</h4>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="topicc topic5">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>5. 腸癌照護</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">
                        <a href="page14.php">
                            <div class="col">
                                <img src="pic/page14/page14_bigIcon.png" alt="">
                                <h4>心理健康</h4>
                            </div>
                        </a>
                        <a href="page15.php">
                            <div class="col">
                                <img src="pic/page15/page15_bigIcon.png" alt="">
                                <h4>社會資源</h4>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="page16.php">
                            <div class="col">
                                <img src="pic/page16/page16_bigIcon.png" alt="">
                                <h4>腸癌資源中心</h4>
                            </div>
                        </a>
                        <a href="page17.php">
                            <div class="col">
                                <img src="pic/page17/page17_bigIcon.png" alt="">
                                <h4>個人化精準醫療</h4>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<script src="js/common.js"></script>
<script src="js/index.js"></script>

<script>
    let topicBtn = document.querySelectorAll(".bgWrap .tpBtn");

    topicBtn.forEach(function (element) {

        element.addEventListener("mouseenter", function (e) {
            console.log(element.parentNode.children[0]);
            element.parentNode.children[0].style = " transform: scale(1.1);";

        }, false)

        element.addEventListener("mouseleave", function (e) {
            console.log(element.parentNode.children[0]);
            element.parentNode.children[0].style = " transform: scale(1);";

        }, false)
    })
</script>

</html>