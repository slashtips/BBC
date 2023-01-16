<?php
include 'db/db.php';
$id = $_GET['i'];
$sql = "SELECT * FROM `article0` WHERE `id` = $id";
$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($res);

$topicSec = $row['topicSec'];
$sqlR = "SELECT * FROM `article` WHERE `id` <> $id AND `topicSec` = '$topicSec' AND `publish` = 1 ORDER BY id DESC LIMIT 1 , 3 ";
$resR = mysqli_query($connect, $sqlR);
$sqlC = "SELECT * FROM `article` WHERE `id` <> $id AND `topicSec` = '$topicSec' AND `publish` = 1 ORDER BY id DESC LIMIT 1 , 9 ";
$resC = mysqli_query($connect, $sqlC);

$sqlP = "SELECT * FROM `article0` WHERE `id` = $id - 1 ";
$resP = mysqli_query($connect, $sqlP);
$rowP = mysqli_fetch_array($resP);

$sqlN = "SELECT * FROM `article0` WHERE `id` = $id + 1 ";
$resN = mysqli_query($connect, $sqlN);
$rowN = mysqli_fetch_array($resN);

$sqlGA = "SELECT * FROM `GACode`";
$resGA = mysqli_query($connect, $sqlGA);
$rowGA = mysqli_fetch_array($resGA);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['title'] ?>;</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="css/article0.css">


    <meta property="og:url" content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Your Website Title" />
    <meta property="og:description" content="Your description" />
    <meta property="og:image" content="https://www.your-domain.com/path/image.jpg" />


    <style>
        .paragraph ul a {
            text-decoration: none;
            color: #424452;
        }

        .paragraph ul a:hover {
            color: #999;
        }

    </style>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $rowGA['CodeID'] ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', '<?php echo $rowGA['CodeID'] ?>');
</script>

<body>

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
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

    <div class="menum"></div>
    <div class="menuWrap">
        <div class="menu"></div>
    </div>
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

    <div class="RWDTop">
        <img src="pic/Common/backS.svg" alt="">
        <h3><?php echo $row['title']; ?></h3>
    </div>
    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3><?php echo $row['topic']; ?></h3>
            <h1><?php echo $row['title']; ?></h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page1/page1_bigIcon.svg" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <?php echo $row['content']; ?>
            </div>

            <div class="other">
                <h5><?php echo $row['code']; ?></h5>
                <h5>「本文章由羅氏大藥廠與醫護人員共同協作而成」</h5>
            </div>

            <div class="contnetBottom">
                <div class="fans">
                    <!-- <a href="#"><img src="pic/Common/line.svg" alt=""></a>

                    <a href="#"><img src="pic/Common/facebook.svg" alt=""></a> -->
                </div>

                <div class="hr hrSN"></div>
                <div class="LR" style="justify-content: end;">
                    <?php echo
                    '<div class="previous">
                    <a href="page' . $rowP['id'] . '.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>' . $rowP['title'] . '</h4>
                    </a>
                </div>
                <div class="next">
                    <a href="page' . $rowN['id'] . '.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>' . $rowN['title'] . '</h4>
                    </a>
                </div>'; ?>

                </div>
                <div class="hr hrSN"></div>
            </div>

        </div>




        <div class="catelog">
            <div class="articlesCatelog2">
                <h2>文章目錄</h2>
                <ul>
                    <?php foreach ($resC as $article) {
                        echo '<li><a href="ArticleCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="relatedArticles">
                <h2>相關文章</h2>
                <?php foreach ($resR as $article) {
                    echo '
                <div class="card">
                    <a href="ArticleCommon.php?i=' . $article['id'] . '">
                        <img class="relatedImg" src="' . $article['articlePath'] . '" alt="">
                        <div class="cardText">
                            <div class="tag">' . $article['topicSec'] . '</div>
                            <div class = "relatedTitle">' . $article['title'] . '</div>
                            <div class = "relatedContent">' . $article['content'] . '</div>
                        </div>
                    </a>
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
            <img class="catelogS" src="pic/Common/menuArticleSmallBtn3.svg" alt="">
        </div>
    </div>

    <div class="fansCard">

    </div>


    <div class="catelogCard">
    </div>
    <div class="footer">
    </div>

</body>


<script src="js/common.js"></script>
<script src="js/article.js"></script>
<script>
    let title = document.querySelector(".topic h3");
    let titleSec = document.querySelector(".topic h1")
    let cateloggTitle = document.querySelectorAll(".catelogg .title");
    let cateloggTitleH3 = document.querySelectorAll(".catelogg .title h3");
    let catelogA = document.querySelectorAll(".catelogg ul a")
    if (cateloggTitle) {
        //點擊反應
        cateloggTitle.forEach(function(element) {
            element.addEventListener("click", function(e) {

                let thisImg = element.children[1].children[0]
                let thisUl = element.parentNode.children[1];
                if (thisUl.style.display == "block") {
                    thisUl.style = "display:none";
                    thisImg.src = "pic/Common/plus.svg";
                } else {
                    thisUl.style = "display:block";
                    thisImg.src = "pic/Common/minus.svg";
                }

            }, false)
        });

        //抓標題加上Active
        cateloggTitleH3.forEach(function(element) {
            if (element.textContent == title.textContent) {
                element.classList.add("titleActive")
                element.click();
            }

        })
        //抓副標題
        catelogA.forEach(function(element) {

            if (element.textContent.trim() == titleSec.textContent.trim()) {
                element.classList.add("titleSecActive")
            }
        })
    }
</script>

</html>