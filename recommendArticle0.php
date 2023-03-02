<?php
include 'db/db.php';
$sql = "SELECT * FROM `article` where  `publish` = 1 ORDER BY id DESC";

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
    <title>最新消息-全部文章 </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="css/recommendArticle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <style>
        .article .left img {
            width: 100%;
        }
    </style>

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

    <div class="RWDTop">
        <img src="pic/Common/backS.svg" alt="">
        <h3>全部文章</h3>
    </div>
    <div class="top">
        <div class="option">
            <a href="ArticleIndex.php"><img class="backM" src="pic/Common/back.svg" alt=""></a>
            <div class="inputTextGroup">
                <img src="pic/Common/search.svg" alt="">

                <input type="text" placeholder="請輸入關鍵字">
                <div class="searchBox">

                    <ul class="articleUl">

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="topicSecGroup">
        <div class="topicSec RWDFull">
            <a href="recommendArticle0.php">
                <div class="card topicSecActive">
                    <img src="pic/articleIndex/iconTag0.png" alt="">
                    <h5>全部文章</h5>
                </div>
            </a>
        </div>
        <div class="topicSec ">
            <a href="recommendArticle1.php">
                <div class="card ">
                    <img src="pic/articleIndex/iconTag1.png" alt="">
                    <h5>腸癌治療</h5>
                </div>
            </a>
        </div>
        <div class="topicSec">
            <a href="recommendArticle2.php">
                <div class="card">
                    <img src="pic/articleIndex/iconTag2.png" alt="">
                    <h5>腸癌照護</h5>
                </div>
            </a>
        </div>
        <div class="topicSec">
            <a href="recommendArticle3.php">
                <div class="card">
                    <img src="pic/articleIndex/iconTag3.png" alt="">
                    <h5>癌症分期</h5>
                </div>
            </a>
        </div>
        <div class="topicSec">
            <a href="recommendArticle4.php">
                <div class="card">
                    <img src="pic/articleIndex/iconTag4.png" alt="">
                    <h5>副作用</h5>
                </div>
            </a>
        </div>
        <div class="topicSec">
            <a href="recommendArticle5.php">
                <div class="card">
                    <img src="pic/articleIndex/iconTag5.png" alt="">
                    <h5>生活品質</h5>
                </div>
            </a>
        </div>
        <div class="topicSec">
            <a href="recommendArticle6.php">
                <div class="card">
                    <img src="pic/articleIndex/iconTag6.png" alt="">
                    <h5>營養健康</h5>
                </div>
            </a>
        </div>
    </div>

    <div class="articleGroup">
        <h1 class="titleH1">最新消息</h1>
        <div class="group">


            <?php
            foreach ($res as $article) {
                echo '
                        <div class="article" data-id = "' . $article['id'] . '">
                                <img class="errorImg" src="' . $article['articlePath'] . '" alt="">
                            <div class="airticleText">
                                <div class="tag">' . $article['topicSec'] . '</div>
                                <h3 class="title">' . $article['title'] . '</h3>
                                <div class="content">' . $article['content'] . '</div>
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
    $(document).ready(function () {
        $(".option .inputTextGroup input").keyup(function (e) {

            let value = $(this).val().trim();
            console.log(value);
            if (value != "") {
                $(".searchBox").show();
            } else {
                $(".searchBox").hide();
            }

            $.ajax({
                type: "POST",
                url: "system/ArticleIndexSearch.php",
                data: {
                    "str": value,
                    "topicSec": "腸癌治療"
                },
                success: function (response) {
                    let arrayRes = response.split(',')
                    let arrayStr = "";
                    for (let i = 0; i < arrayRes.length - 1; i++) {
                        arrayStr += arrayRes[i]
                    }
                    let articleUl = document.querySelectorAll(".searchBox .articleUl");
                    if (articleUl) {
                        articleUl.forEach(function (element) {
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
    if (numberBtn) {


        numberBtn.forEach(function (element, index) {
            //分頁Active
            element.addEventListener("click", function (e) {
                e.preventDefault();
                numberBtn.forEach(function (element) {
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
                group.innerHTML = ArticleStr

                //新增問答上去

                let articleN = document.querySelectorAll(".articleGroup .article");
                articleN.forEach(function (element) {
                    element.addEventListener("click", function (e) {
                        window.location.href = "ArticleCommon.php?i=" + element.dataset.id;
                    }, false)
                }, false)

            }, false)
        })

        numberBtn[0].click();
    }

    let errorImg = document.querySelectorAll(".errorImg")
    errorImg.forEach(function (element) {
        element.addEventListener("error", function (e) {
            element.src = "pic/Common/R/r2.png"
        }, false)
    })
</script>

</html>