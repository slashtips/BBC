<?php
include  'db/db.php';
$topicSec   = $_GET['topicSec'];
$sql = "SELECT * FROM `articleM` where `topicSec` = '腸癌治療' AND `publish` = 1 ORDER BY id DESC";

$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


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
    <title>醫護專區-腸癌治療 </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="css/recommendArticle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <style>
        .article .left img {
            width: 100%;
        }

        html,
        body {
            background: radial-gradient(1000% 120% at 50% 80%, white, #9dc8d3);
        }
    </style>

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

    <<div class="RWDTop2">
        <a href="MedicalArea.php">
            <img src="pic/Common/backS.svg" alt="">
        </a>
        <h3>個管師專區</h3>
        </div>
        <div class="top">
            <div class="option">
                <a href="MedicalArea.php"><img class="backM" src="pic/Common/back.svg" alt=""></a>
                <div class="inputTextGroup">
                    <img src="pic/Common/search.svg" alt="">

                    <input type="text" placeholder="請輸入關鍵字">
                    <div class="searchBox">
                        <!-- <h3>Article</h3> -->
                        <ul class="articleUl">

                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="topicSecGroup">
            <div class="topicSec RWDFull">
                <a href="recommendMeeting0.php">
                    <div class="card ">
                        <img src="pic/articleIndex/iconTag0.png" alt="">
                        <h5>全部文章</h5>
                    </div>
                </a>
            </div>
            <div class="topicSec">
                <a href="recommendMeeting1.php">
                    <div class="card topicSecActive">
                        <img src="pic/articleIndex/iconTag1.png" alt="">
                        <h5>腸癌治療</h5>
                    </div>
                </a>
            </div>
            <div class="topicSec">
                <a href="recommendMeeting2.php">
                    <div class="card">
                        <img src="pic/articleIndex/iconTag2.png" alt="">
                        <h5>腸癌照護</h5>
                    </div>
                </a>
            </div>
            <div class="topicSec">
                <a href="recommendMeeting3.php">
                    <div class="card">
                        <img src="pic/articleIndex/iconTag3.png" alt="">
                        <h5>癌症分期</h5>
                    </div>
                </a>
            </div>
            <div class="topicSec">
                <a href="recommendMeeting4.php">
                    <div class="card">
                        <img src="pic/articleIndex/iconTag4.png" alt="">
                        <h5>副作用</h5>
                    </div>
                </a>
            </div>
            <div class="topicSec">
                <a href="recommendMeeting5.php">
                    <div class="card">
                        <img src="pic/articleIndex/iconTag5.png" alt="">
                        <h5>生活品質</h5>
                    </div>
                </a>
            </div>
            <div class="topicSec">
                <a href="recommendMeeting6.php">
                    <div class="card">
                        <img src="pic/articleIndex/iconTag6.png" alt="">
                        <h5>營養健康</h5>
                    </div>
                </a>
            </div>
        </div>

        <div class="articleGroup">
            <h1 class="titleH1">醫護園地</h1>
            <div class="group">



                <?php
                foreach ($res as $article) {
                    echo '
        
                        <div class="article" data-id = "' . $article['id'] . '">
                                <img class="errorImg" src="' . $article['articlePath'] . '" alt="">
                            <div class="airticleText">
                                <div class="tag">' . $article['topicSec'] . '</div>
                                <h3 class="title">' . $article['title'] . '</h3>
                                <div class="content">'  . $article['content'] . '</div>
                            </div>
                        </div>
                ';
                }
                ?>

            </div>

            <div class="pagination">
                <div class="numberGroup"></div>
                <div class="next">
                    <img src="pic/Common/next.svg" alt="">
                </div>
            </div>


        </div>
        <div class="footer"></div>




</body>


<script src="js/common.js"></script>
<script src="js/article.js"></script>

<script>
    //跳轉
    let article = document.querySelectorAll(".articleGroup .article");

    let searchInput = document.querySelector(".option .inputTextGroup input");
    let searchStr = "";
    $(document).ready(function() {
        $(".option .inputTextGroup input").keyup(function(e) {

            let value = $(this).val().trim();
            console.log(value);
            if (value != "") {
                $(".searchBox").show();
            } else {
                $(".searchBox").hide();
            }

            $.ajax({
                type: "POST",
                url: "system/ArticleMedicalSearch2.php",
                data: {
                    "str": value,
                    "topicSec": "腸癌治療"
                },
                success: function(response) {
                    let arrayRes = response.split(',')
                    let arrayStr = "";
                    for (let i = 0; i < arrayRes.length - 1; i++) {
                        arrayStr += arrayRes[i]
                    }
                    let articleUl = document.querySelectorAll(".searchBox .articleUl");
                    if (articleUl) {
                        articleUl.forEach(function(element) {
                            element.innerHTML = arrayStr
                        }, false)
                    }
                    console.log(arrayStr);
                }
            });
  

        })
    });



    let group = document.querySelector(".articleGroup .group")
    let paginationNum = Math.ceil(article.length / 10);
    let paginationNumStr = "";
    let numberGroup = document.querySelector(".numberGroup");
    //製造分頁
    for (let i = 1; i <= paginationNum; i++) {
        paginationNumStr += `<div class="number">
    <h5>${i}</h5>
    </div>`
    }
    numberGroup.innerHTML = paginationNumStr;

    //新增article上去
    let numberBtn = document.querySelectorAll(".numberGroup .number")
    if (numberBtn.length>0) {


        numberBtn.forEach(function(element, index) {
            //分頁Active
            console.log(index);
            element.addEventListener("click", function(e) {
                e.preventDefault();
                numberBtn.forEach(function(element) {
                    element.classList.remove("numberActive")
                });
                element.classList.add("numberActive")

                let ArticleStr = "";
                for (let i = index; i < index + 10; i++) {
                    let n = i + index * 9
                    if (article[n]) {
                        ArticleStr += `${article[n].outerHTML}`
                    }
                }


                //js控制問答消失

                //新增問答上去

                let articleN = document.querySelectorAll(".articleGroup .article");
                articleN.forEach(function(element) {
                    element.addEventListener("click", function(e) {
                        window.location.href = "ArticleMedicalCommon.php?i=" + element.dataset.id;
                    }, false)
                }, false)

            }, false)
        })

        numberBtn[0].click();
    }

    let errorImg = document.querySelectorAll(".errorImg")
    errorImg.forEach(function(element) {
        element.addEventListener("error", function(e) {
            element.src = "pic/Common/R/r2.png"
        }, false)
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