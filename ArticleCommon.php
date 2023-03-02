<?php
include 'db/db.php';
$id = $_GET['i'];
$sql = "SELECT * FROM `article` WHERE `id` = $id";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

$topicSec = "";
$title = "";
$picture = "";
$video = "";
$content = "";
$source = "";

foreach ($res as $row) {
    $topicSec = $row['topicSec'];
    $title = $row['title'];
    $picture = $row['picture'];
    $video = $row['video'];
    $content = $row['content'];
    $source = $row['source'];
}






$sqlR = "SELECT * FROM `article` WHERE `id` <> $id AND `topicSec` = '$topicSec' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
$resR = $db->query($sqlR);
$resR->setFetchMode(PDO::FETCH_ASSOC);

// $sqlC = "SELECT * FROM `article` WHERE `id` <> $id AND `topicSec` = '$topicSec' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 9 ";

$sqlC = "SELECT * FROM `article` WHERE `id` <> $id  AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 5 ";
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
    <title>Article</title>

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
    </style>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>

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


    <div class="cookie"></div>
    <div class="cover"></div>
    <div class="menum"></div>
    <div class="menuWrap">
        <div class="menu"></div>
    </div>
    <div class="loginH"></div>
    <div class="register"></div>
    <div class="commonCard openPass"></div>
    <div class="commonCard forgetPassword"></div>
    <div class="questionAsk"></div>
    <div class="questionSelectCard"></div>

    <div class="OutHref"></div>

    <div class="RWDTop">
        <img src="pic/Common/backS.svg" alt="">
        <h3>腸癌旅程</h3>
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
                        <?php echo $topicSec ?>
                    </h6>
                    <h1 class="inArticleH1"><?php echo $title ?></h1>
                </div>



            </div>

            <div class="content">

                <div class="back2">
                    <img src="pic/Common/back.svg" alt="">
                    <small>
                        <?php echo $source; ?>
                    </small>
                </div>
                <div class="hr"></div>
            </div>
            <img class="articlePic" src="<?php echo $picture; ?>">
            <?php
            if ($video != "") {
                echo '
                    <div class="video">
                        <iframe class="articleVideo" src="' . $video . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    ';
            }
            ?>


            <div class="contentAdd">
                <?php echo $content ?>
            </div>



            <div class="contnetBottom">
                <div class="fans">
                    <!-- <a href="#"><img src="pic/Common/line.svg" alt=""></a>

                    <a href="#"><img src="pic/Common/facebook.svg" alt=""></a> -->
                </div>

                <!-- <div class="hr hrSN"></div>
                <div class="LR" style="justify-content: end;">
                    <div class="previous">
                        <a href="">
                            <img src="pic/Common/previous.svg" alt="">
                            <h4>上一個</h4>
                        </a>

                    </div>
                    <div class="next">
                        <a href="#">
                            <img src="pic/Common/next.svg" alt="">
                            <h4>下一個</h4>
                        </a>
                    </div>
                </div>
                <div class="hr hrSN"></div> -->
            </div>

        </div>

        <div class="catelog">
            <!-- <div class="catelogTab"></div>
            <div class="relatedArticles">
     

                <div class="card">
                    <a href="page2.html">
                        <img src="pic/page2/page2_bigIcon.png" alt="">
                        <div class="cardText">
                            <div class="tag">症狀察覺</div>
                            <h3>疾病症狀</h3>
                            <p>大腸癌近年來成為國人常見癌症的首位，且還有每年增加的區域。</p>
                        </div>
                    </a>
                </div>


            </div> -->
            <div class="articlesCatelog2">
                <h2>最新消息</h2>
                <ul>
                    <?php foreach ($resC as $article) {
                        echo '<li><a href="ArticleCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="relatedArticles">
                <h2>相關文章</h2>
                <div class="cardGroup">
                    <?php foreach ($resR as $article) {
                        echo '
                <div class="card" data-id="' . $article['id'] . '">
                        <img class="relatedImg" src="' . $article['articlePath'] . '" alt="">
                        <div class="cardText">
                            <div class="tag">' . $article['topicSec'] . '</div>
                            <div class = "relatedTitle">' . $article['title'] . '</div>
                            <div class = "relatedContent">' . $article['content'] . '</div>
                        </div>
                </div>
                ';
                    }
                    ?>
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

    <div class="fansCard">
        <!-- <div class="fansTitle">
            <h3>分享至</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="fans">
            <a class="line" href="https://social-plugins.line.me/lineit/share?url="><img src="pic/Common/line.svg" alt=""></a>
            <div class="fb-share-button" data-href="" data-layout="button_count" data-size="large">
            </div>
        </div> -->
    </div>


    <div class="catelogCard2">
        <div class="catelogBigTitle">
            <h3>最新消息</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>

        <div class="catelogList">
            <div class="catelogContent">
                <ul>
                    <?php foreach ($resC as $article) {
                        echo '<li><a href="ArticleCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>

    </div>
    <div class="footer">
    </div>

</body>

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
            window.location.href = "ArticleCommon.php?i=" + element.dataset.id
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
</script>
<script src="js/common.js"></script>
<script src="js/article.js"></script>


</html>