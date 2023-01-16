<?php
include  'db/db.php';
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
    <title>醫護專區</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/medicalArea.css">



    <link rel="stylesheet" href="">

    <style>
        .menu {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            padding: 1.5rem 120px;
        }

        @media screen and (max-width: 576px) {
            .menu {
                padding: 18px 24px;
            }
        }
    </style>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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

    <div class="cookie"></div>
    <div class="cover"></div>
    <div class="OutHref"></div>

    <div class="menum"></div>

    <div class="menu"></div>

    <div class="loginH"></div>
    <div class="register"></div>
    <div class="questionAsk"></div>
    <div class="questionSelectCard"></div>
    <div class="commonCard openPass"></div>
    <div class="commonCard forgetPassword"></div>

    <div class="commonCardSmall registerSmall"></div>
    <div class="commonCardSmall openPassSmall"></div>
    <div class="commonCardSmall forgetPasswordSmall"></div>
    <div class="menu1"></div>





    <!-- sm -->
    <div class="menu1"></div>

    <div class="areaMap">
        <div class="areaWrap">
            <img src="pic/MedicalArea/bgM.svg" alt="">

            <div class="icon">
                <div class="iicon icon1">
                    <img src="pic/MedicalArea/area1.svg" alt="">
                    <input type="button" class="iconBtn" value="醫護園地">
                </div>
                <div class="iicon icon2">
                    <img src="pic/MedicalArea/area2.svg" alt="">
                    <input type="button" class="iconBtn" value="個人主頁">
                </div>
                <div class="iicon icon3">
                    <img src="pic/MedicalArea/area3.svg" alt="">
                    <input type="button" class="iconBtn" value="會議活動">
                </div>
            </div>
        </div>
    </div>

    <div class="bgs">
        <img src="pic/MedicalArea/bgs.svg" alt="">
        <div class="areaGroup">
            <div class="area area1">
                <img src="pic/MedicalArea/area1.svg" alt="">
                <input type="button" value="個人主頁">
            </div>
            <div class="area area2">
                <img src="pic/MedicalArea/area2.svg" alt="">
                <input type="button" value="醫護園地">
            </div>
            <div class="area area3">
                <img src="pic/MedicalArea/area3.svg" alt="">
                <input type="button" value="會議活動">
            </div>
        </div>
    </div>



    <div class="footer"></div>
</body>

<script src="js/common.js"></script>
<script>
    //桌機板
    let icon1icon = document.querySelector('.icon .icon1 ');
    let icon2icon = document.querySelector('.icon .icon2 ');
    let icon3icon = document.querySelector('.icon .icon3 ');

    icon1icon.addEventListener("click", function(e) {
        window.location = "recommendMeeting0.php";
    })
    icon2icon.addEventListener("click", function(e) {
        window.location = "personal.php";
    })
    icon3icon.addEventListener("click", function(e) {
        window.location = "meeting.php";
    })

    //Btn 橘色修正
    let icon = document.querySelectorAll(".areaWrap .iicon")
    icon.forEach(function(element) {

        element.children[0].addEventListener("mouseenter", function(e) {
            element.children[0].style = "transform: scale(1.1);cursor: pointer;"
        }, false)
        element.children[1].addEventListener("mouseenter", function(e) {
            element.children[0].style = "transform: scale(1.1);cursor: pointer;"
        }, false)

        element.children[0].addEventListener("mouseleave", function(e) {
            element.children[0].style = "transform: scale(1);"
        }, false)
        element.children[1].addEventListener("mouseleave", function(e) {
            element.children[0].style = "transform: scale(1);"
        }, false)
    })

    //手機
    let area1 = document.querySelector(".bgs .area1");
    let area2 = document.querySelector(".bgs .area2");
    let area3 = document.querySelector(".bgs .area3");

    area1.addEventListener("click", function(e) {
        window.location = "personal.php";
    })
    area2.addEventListener("click", function(e) {
        window.location = "recommendMeeting0.php";
    })
    area3.addEventListener("click", function(e) {
        window.location = "meeting.php";
    })

   

    if (!getCookieByName('username')) {
        window.location.href = "index.php";
    }

    footer1 =
        `
            <div class="footer1">
            <div class="other">
                <div class="link">
                    <a href="https://www.roche.com.tw/zh/privacy-policy.html">隱私聲明</a>
                    <a href="https://www.roche.com.tw/zh/legal-statement.html">法律聲明</a>


                </div>
                <div class="date">
                    <h5>© 2022 台灣羅氏大藥廠版權所有</h5>
                </div>
            </div>
            <div class="line">
                <h4>還有甚麼想了解的資訊嗎？<br>來這裡選擇您想知道的主題吧！</h4>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSewiuwti3Lxfy0gBdoQBB3gF4TKXQPoxTfjFJ8DcEybJgKIHQ/viewform"><img class="QRcode" src="pic/Common/QRcode2.png" alt=""></a>

            </div>
            <div class="lineBtn">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSewiuwti3Lxfy0gBdoQBB3gF4TKXQPoxTfjFJ8DcEybJgKIHQ/viewform"><img src="pic/Common/lineBtn2.png" alt=""></a>
            </div>

        </div>
    `;

    footer2 = `
            <div class="footer2">
            <small>本網站目的在供台灣醫護人員使用。羅氏網站及其中所含資訊僅供參考。嚴禁重製、轉發或用於其它目的。若希望重製本網站所含的任何資訊，請向羅氏網站管理員申請許可。
            本平台原非用於通報不良事件（副作用），但您可透過網站 <a href="https://www.roche.com/solutions/pharma/safety-reporting">(https://www.roche.com/solutions/pharma/safety-reporting)</a>，向台灣羅氏藥品安全部門通報不良事件，或前往全國藥物不良反應系統網站<a href="https://adr.fda.gov.tw/">(https://adr.fda.gov.tw/)</a> 進行通報。 本網站所載之產品資訊乃供廣泛使用者使用或瀏覽，其中某些產品詳情或資料可能於 閣下所處的國家無法得到或爲無效。 請注意，若獲取該等資料不符合 閣下所處的國家的法律程式、規定、註冊或使用，本公司不會承擔任何責任。 備註：本聲明有英文版本。如果在中文及英文版本存有歧義，以英文版本為準
            <br><br>
            <b style="font-weight:bold">聯絡資訊</b><br>
            若想查閱羅氏所持有您的個人資料，要求羅氏變更或更正您的個人資料，將您的個人資料自羅氏系統中移除，或取得羅氏隱私政策副本或查詢相關問題，請透過電子郵件taiwan.privacy@roche.com 或郵件台北市信義區松仁路100號40樓與我們聯絡。
            若想了解我們如何收集，使用，共享，保護與處理您的資料，請參考羅氏隱私政策，羅氏有權隨時依適用法規及其它適用隱私法規修訂隱私政策。
            羅氏網站及其中所含資訊僅供參考。嚴禁重制，轉發或用於其它目的。若希望重制本網站所含的任何資訊，請向羅氏網站管理員申請許可。
            </small>

        </div>`
    footerStr = footer1 + footer2;
    if (footer) {
        footer.innerHTML = footerStr

    }

    document.querySelector(".footer .footer1 .other .link").style = "justify-content: flex-start;"
    document.querySelector(".footer .footer1 .other .link a").style = "margin-right:40px"

    let lineImgSmall = document.querySelector(".menum .line .left a img");
    if (lineImgSmall) {
        lineImgSmall.src = "pic/Common/QRcode2.png";
        lineImgSmall.parentNode.href = "https://docs.google.com/forms/d/e/1FAIpQLSewiuwti3Lxfy0gBdoQBB3gF4TKXQPoxTfjFJ8DcEybJgKIHQ/viewform"
    }
</script>

</html>