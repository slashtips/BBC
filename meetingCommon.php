<?php
include 'db/db.php';
$id = $_GET['i'];
$sql = "SELECT * FROM `meeting` WHERE `id` = $id";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


$topicSec = "";
$title = "";
$source = "";
$content = "";
$picture = "";
$video = "";
$form = "";

foreach ($res as $row) {
    $topicSec = $row['topicSec'];
    $title = $row['title'];
    $source = $row['source'];
    $content = $row['content'];
    $picture = $row['picture'];
    $video = $row['video'];
    $form = $row['form'];
}


$sqlR = "SELECT * FROM `meeting` WHERE `id` <> $id AND `topicSec` = '$topicSec' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
$resR = $db->query($sqlR);
$resR->setFetchMode(PDO::FETCH_ASSOC);
$sqlC = "SELECT * FROM `meeting` WHERE `id` <> $id  AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 9 ";
$resC = $db->query($sqlC);
$resC->setFetchMode(PDO::FETCH_ASSOC);

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
    <title>文章</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">

    <meta property="og:url" content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Your Website Title" />
    <meta property="og:description" content="Your description" />
    <meta property="og:image" content="https://www.your-domain.com/path/image.jpg" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style>
        body,
        html {
            background: linear-gradient(175deg, #9dc8d3 0%, #fff 75vh);
            background-repeat: no-repeat;
        }

        .topic img {
            max-width: 80%;
        }

        .topic .bigIcon {
            text-align: right;
        }

        .content {
            max-width: 760px;
            flex-wrap: wrap;
        }

        .content .hr {
            max-width: 741px;
        }

        .article .topic .text h1 {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 60px;
            line-height: 70px;
            letter-spacing: 0.04em;
            color: #424452;
        }

        .articlesCatelog2 ul li {
            margin-top: 40px;
        }

        .articlesCatelog2 ul li a {
            text-decoration: none;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
            letter-spacing: 0.04em;
            color: #898B91;
        }

        .articlesCatelog2 ul li a:hover {
            color: #424452;
        }

        .relatedArticles {
            margin-top: 100px;
        }

        @media screen and(max-width:576px) {
            .topic .bigIcon img {
                max-width: 100%;
            }

            .article .topic .text h1 {
                font-size: 2rem;
                line-height: 32;
            }

            .article .content {
                margin-top: 30px;
            }
        }

        .article .articlePic {
            width: 100%;
            margin-top: 40px;
        }

        .article .topic .text h1 {
            font-size: 60px;
            white-space: wrap !important;

        }

        .text h6 {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 28px;
            letter-spacing: 0.01em;

            color: #FFFFFF;
        }

        .article .content {
            margin-top: 120px;
        }

        .contentAdd {
            margin-top: 20px;
            letter-spacing: 0.01em;
        }



        .relatedArticles .card .cardText {
            padding: 1rem;
        }

        .relatedArticles .relatedImg {
            width: 100%;
            height: 140px;
        }

        .relatedArticles .relatedTitle {
            font-weight: 600;
            font-size: 24px;
            line-height: 28px;
            letter-spacing: 0.01em;
            color: #424452;
            overflow: hidden;
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            white-space: normal;
        }

        .relatedArticles .relatedContent {
            overflow: hidden;
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            white-space: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 18px;
            letter-spacing: 0.04em;
            color: #898B91;
        }

        .notWidthDiv {
            width: 100%;
        }

        .notWidth {
            height: 0;
            width: 100%;
            opacity: 0;
        }

        .article p {
            font-weight: 400;
            font-size: 18px;
            line-height: 36px;
            letter-spacing: 0.01em;
            color: #424452;
        }

        .article h2 {
            font-weight: 700;
            font-size: 32px;
            line-height: 38px;
            /* identical to box height */

            letter-spacing: 0.04em;

            /* Dark/03 */

            color: #424452;
        }

        .video {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;

        }

        .articleVideo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media screen and (max-width: 960px) {
            .article .topic .text h1 {
                font-size: 40px;
                line-height: 1.3;
            }

            .article .content {
                margin-top: 60px;
            }
        }

        @media screen and (max-width: 568px) {
            .article .topic .text h1 {
                font-size: 30px;
                line-height: 1.2;
                margin-top: 30px;
            }
        }

        .googleForm {
            height: 100vh;
            margin-top: 1rem;
        }

        .googleForm iframe {
            width: 100%;
            height: 100%;
        }

        .back4 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;

        }

        .back4 small {
            font-weight: 400;
            font-size: 1rem;
            text-align: right;
            letter-spacing: 0.01em;
            color: #424452 !important;
        }
    </style>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

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

    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>


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




    <div class="RWDTop2">
        <a href="meeting.php">
            <img src="pic/Common/backS.svg" alt="">
        </a>
        <h3>個管師專區</h3>
    </div>

    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>







    <div class="wrap">

        <div class="article">
            <div class="notWidthDiv">
                <img class="notWidth" src="pic/Common/R/r3.png" alt="">
            </div>
            <div class="topic">
                <div class="text">
                    <h6>
                        <?php echo $topicSec; ?>
                    </h6>
                    <h1 class="inArticleH1"><?php echo $title; ?></h1>
                </div>



            </div>

            <div class="content">

                <div class="back4">
                    <a href="meeting.php"><img src="pic/Common/back.svg" alt=""></a>
                    <small>
                        <?php echo $source; ?>
                    </small>
                </div>
                <div class="hr"></div>
            </div>
            <div class="contentAdd">
                <?php echo $content; ?>
            </div>

            <img class="articlePic" src="<?php echo  $picture; ?>">
            <?php
            if ($video != "") {
                echo '
                    <div class="video">
                        <iframe class="articleVideo" src="' . $video . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    ';
            }
            ?>


            <?php
            if ($form != "") {
                echo '
                    <div class="googleForm">
                        <iframe  src="' . $form. '"  frameborder="0"></iframe>
                    </div>
                    ';
            }
            ?>


        </div>

        <div class="catelog">

            <div class="articlesCatelog2">
                <h2>最新會議</h2>
                <ul>
                    <?php
                    foreach ($resR as $meeting) {
                        echo '
                                <li><a href="meetingCommon.php?i=' . $meeting['id'] . '">' . $meeting['title'] . '</a></li>
                            ';
                    }
                    ?>
                </ul>
            </div>
            <div class="relatedArticles">
                <h2>相關會議</h2>
                <div class="cardGroup">
                    <?php foreach ($resR as $meeting) {
                        echo '
                <div class="card" data-id="' . $meeting['id'] . '">
                        <img class="relatedImg" src="' . $meeting['imgPath'] . '" alt="">
                        <div class="cardText">
                            <div class="tag">' . $meeting['topicSec'] . '</div>
                            <div class = "relatedTitle">' . $meeting['title'] . '</div>
                            <div class = "relatedContent">' . $meeting['content'] . '</div>
                        </div>
                </div>
                ';
                    }
                    ?>
                </div>

            </div>

        </div>

    </div>




    </div>




    <div class="menuArticleSmall">
        <div class="menuArticleSmallBtnGroup">
            <img class="homeS" src="pic/Common/menuArticleSmallBtn1.svg" alt="">
            <img class="sourceS" src="pic/Common/menuArticleSmallBtn2.svg" alt="">
            <img class="catelogS2" src="pic/Common/menuArticleSmallBtn3.svg" alt="">
        </div>
    </div>




    <div class="catelogCard2">
        <div class="catelogBigTitle">
            <h3>最新會議</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>

        <div class="catelogList">
            <div class="catelogContent">
                <ul>
                    <?php foreach ($resC as $article) {
                        echo '<li><a href="meetingCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>

    </div>
    <div class="footer">
    </div>

</body>
<script src="js/common.js"></script>
<script src="js/article.js"></script>
<script>
    let articlePic = document.querySelector(".articlePic");
    articlePic.addEventListener("error", function (e) {
        this.style = "display:none";
    }, false)
    let relatedImg = document.querySelectorAll(".relatedImg");
    relatedImg.forEach(function (element) {
        element.addEventListener("error", function (e) {
            element.src = "pic/Common/R/r6.png";
        }, false)
    })

    let relatedCard = document.querySelectorAll(".relatedArticles .card")
    relatedCard.forEach(function (element) {
        element.addEventListener("click", function (e) {
            window.location.href = "meetingCommon.php?i=" + element.dataset.id
        }, false)
    })

    if (!relatedCard) {
        let relatedArticlesH2 = document.querySelector(".relatedArticles h2")
        if (relatedArticlesH2) {
            relatedArticlesH2.style = "display:none"
        }
    }

    let menuArticleSmallCatelogBtn2 = document.querySelector(".menuArticleSmall .catelogS2");
    if (menuArticleSmallCatelogBtn2) {
        menuArticleSmallCatelogBtn2.addEventListener("click", function (e) {
            document.querySelector(".catelogCard2").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            cover.style = "display:block"
        }, false)
    }

    let catelogCardCloseBtn2 = document.querySelector(".catelogCard2 .catelogBigTitle img")
    if (catelogCardCloseBtn2) {
        catelogCardCloseBtn2.addEventListener("click", function (e) {
            document.querySelector(".catelogCard2").style = "display:none"
            cover.style = "display:none";

        }, false)
    }

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

    ForceLogout()
</script>

<script>

</script>

</html>