<?php
include 'db/db.php';
$sql = "SELECT * FROM `article` WHERE `topicSec` = '生活品質' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
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
    <title>個人化精準醫療</title>

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

    <style>
        .source {
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            text-align: right;
            letter-spacing: 0.01em;
            color: #424452;
        }

        .bigIcon2 {
            position: absolute;
            top: 13%;
            right: 3%;
            z-index: 1;
        }

        .topic h3 {
            z-index: 9;
        }

        .topic h1 {
            z-index: 9;
            white-space: wrap;
        }

        @media screen and (max-width: 576px) {
            .bigIcon2 {
                width: 30%;
            }

            .topic {
                width: 64%;
            }
        }
    </style>
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

    <div class="cookie"></div>
    <div class="cover"></div>
    <div class="OutHref"></div>
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
        <h3>個人化精準醫療</h3>
    </div>

    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>5. 腸癌照護</h3>
            <h1>個人化精準醫療</h1>
        </div>

        <div class="bigIcon2">
            <img src="pic/page17/page17_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small class="source">
                        受訪者：癌症希望基金會 教育宣導部副主任 許怡敏護理師
                        <br> 撰稿者：羅氏大藥廠 - Patient Journey Partner, Fred Huang

                    </small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page17/page17_imgGroup1_1.png.png" alt="">
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">

                            <p>很多病人打電話到癌症希望基金會時常常會詢問:「什麼是個人化治療？我可以做嗎？是不是要花很多的錢？」。其實，所謂的個人化治療，就是利用基因檢測的方式，分析診斷目前病人身上的癌細胞基因表現，進而找出適當的藥品進行治療。
                            </p>
                        </div>
                    </div>
                    <div class="section">
                        <div class="text">

                            <p>因此個人化醫療，就是利用更精準的基因型別分析，找到出最適合自己的治療選擇。臨床上透過精準醫學的分析，除了幫助臨床醫師找到更適合的藥物外，更重要的是幫助醫師及病人，針對後續的治療計畫，可以有更完整性的規劃。
                            </p>
                        </div>
                    </div>
                    <div class="section">
                        <div class="text">
                            <p>過去大家所熟悉的治療方式，是依癌細胞的生長部位進行分類。例如，乳癌、肺癌、或是腸癌等。但隨著醫療資訊的發達，除了分類癌細胞生長的部位之外，也慢慢區分出癌細胞的基因型別表現。以腸癌來說，除了區分是大腸癌，或是結腸直腸癌之外。臨床醫師將病人的檢體進行化驗分析時，還會區分出這些癌細胞的基因表現。腸癌常見的基因表現像是RAS等。RAS基因還可分成野生型，或是突變型。除了RAS之外，腸癌細胞的基因型別，還可以區分成BRAF、PI3K…等等其他不同基因型別的表現。因此即便都是腸癌的患者，因為各自癌細胞的基因表現不同，也可能會影響到後續藥物治療的選擇及副作用表現。
                            </p>

                        </div>
                        <img src="pic/page17/page17_imgGroup2_1.png.png" alt="">
                    </div>

                    <div class="section">
                        <div class="text">
                            <p>在基金會的病友服務中，看到許多病人的擔心與無助。腸癌病友們最關心的是疾病如何治療? 有沒有效? 標靶藥物如何選擇? 副作用有什麼不一樣?
                                一連串的疑問如果沒有得到適當的回應，很容易造成誤解、害怕，甚至拒絕治療。基金會20年來透過免付費諮詢電話及台北、台中、高雄希望小站服務腸癌病友、成立大腸經病友會，提供護理師諮詢、衛教手冊、開發「希望護照APP」等，讓病友認識自己的癌症期別、基因型態、治療計畫及可能發生的副作用，讓癌友能有自信地與醫護團隊溝通、積極抗癌，以達到最佳的治療效果。
                            </p>
                        </div>
                    </div>


                </div>

                <div class="other">
                    <small>
                        M-TW-00002186
                        <br> 「本文章由羅氏大藥廠與醫護人員共同協作而成」
                    </small>
                </div>





            </div>




            <div class="fans">
                <a href="#"><img src="pic/Common/line.svg" alt=""></a>

                <a href="#"><img src="pic/Common/facebook.svg" alt=""></a>
            </div>

            <div class="hr"></div>
            <div class="LR">
                <div class="previous">
                    <a href="page16.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>社會資源</h4>
                    </a>

                </div>

            </div>
            <div class="hr"></div>


        </div>

        <div class="catelog">
            <div class="catelogTab"></div>
            <div class="relatedArticles">
                <h2>相關文章</h2>
                <div class="cardGroup">
                    <?php foreach ($res as $article) {
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
            <img class="catelogS" src="pic/Common/menuArticleSmallBtn3.svg" alt="">
        </div>
    </div>

    <div class="fansCard"></div>
    <div class="catelogCard"></div>

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
        cateloggTitle.forEach(function (element) {
            element.addEventListener("click", function (e) {

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
        cateloggTitleH3.forEach(function (element) {
            if (element.textContent == title.textContent) {
                element.classList.add("titleActive")
                element.click();
            }

        })
        //抓副標題
        catelogA.forEach(function (element) {

            if (element.textContent.trim() == titleSec.textContent.trim()) {
                element.classList.add("titleSecActive")
            }
        })
    }

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
</script>

</html>