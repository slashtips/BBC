<?php
include 'db/db.php';
$sql = "SELECT * FROM `article` WHERE `topicSec` = '腸癌治療' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
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
    <title>影像學</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">
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

    <div class="RWDTop">
        <img src="pic/Common/backS.svg" alt="">
        <h3>影像學</h3>
    </div>
    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>2. 疾病診斷</h3>
            <h1>影像學</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page4/page4_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>受訪者：林口長庚醫院 大腸直腸外科 林岳辰醫師 <br>
                        撰稿者：羅氏大藥廠 - Patient Journey Partner, Fred Huang</small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page4/page3_imgGroup1_1.png">
                    <img src="pic/page4/page3_imgGroup1_2.png">
                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>很多時候患者都會詢問，為什麼癌症診斷與治療時，需要做這麼多的檢查，除了抽血之外，還要做各種的影像學檢查。其實臨床上的判斷，醫師都希望做到眼見為憑，精準治療。因此臨床上若有一些病灶，可以透過眼睛直觀的觀察來進行判斷，就可以協助臨床醫師做進一步病情的判別。
                        </p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>例如大腸鏡的檢查，就是透過器械直接進入到患者體內進行觀察，就是一個最直接的判別。但人體有許多的臟器，大腸癌也有可能轉移到其他地方，在病灶的判別上，當然沒辦法一直去開刀進行觀察，此時就需要借重一些影像學儀器來協助醫師判別觀察目前的狀況是如何。
                        </p>
                    </div>

                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>因此影像學在臨床的意義，就是在血液生化數值檢測之外，多一個讓醫師可以了解患者病況的資訊。腸癌常見的影像學分析，除了大腸鏡之外，還包括了電腦斷層掃描、核磁共振、正子攝影等。可以針對不同的狀況做不同的檢查。以目前的影像學判斷，若是大腸癌的部分，除了大腸鏡的觀察之外，同時會再做電腦斷層的掃描。來評估其他部位是否有轉移的情形。通常這時候臨床醫師已經有足夠的資訊，來判別是否需要進行手術或後續的處理。但如果是直腸癌的患者，有時候則會視情況來判別是否需要做核磁共振，來決定是否需要先進行化療或是電療。這些影像學的工具，通常又會以腸癌常發生轉移的肝臟或是肺臟來進行檢查。因此臨床上較普遍的作法是先用大腸鏡，先確認病灶部位是否確定是癌細胞，之後再用影像學工具，來判斷遠端轉移的情形。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>不同的影像學的工具檢查，又有各自的優點。以電腦斷層來說，由於掃描的速度較快，可以快速了解患者是否有遠端轉移的狀況。也因為如此每個圖像的間隔可能就比較大，對於某些部位例如直腸，可能就需要更精細的分析，而且電腦斷層分析，比較屬於間接的影像，因此對於某些部位如果是發炎或是癌症的病灶，就比較不容易去判別。因此當電腦斷層無法得到精準的分析時，就會考慮使用正子攝影或是其他進一步的檢查。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>最後，腸癌的治療過程中。在初次診斷時，臨床醫師就會先替患者進行影像學的檢查，來分析病程的發展以及評估是否適合開刀。當已經治療一段時間之後，臨床醫師也會安排影像學的檢查，來評估現階段的治療狀況是否有復發或轉移。希望透過上述的介紹，讓大家可以對影像學的臨床運用與分析有更進一步的了解。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="other">
                    <small>M-TW-00002173 <br> 「本文章由羅氏大藥廠與醫護人員共同協作而成」</small>

                </div>

            </div>



            <div class="fans">
                <a href="#"><img src="pic/Common/line.svg" alt=""></a>

                <a href="#"><img src="pic/Common/facebook.svg" alt=""></a>
            </div>

            <div class="hr"></div>
            <div class="LR">
                <div class="previous">
                    <a href="page3.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>病理報告</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page5.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>基因測試</h4>
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

    let relatedImg = document.querySelectorAll(".relatedImg");
    relatedImg.forEach(function(element) {
        element.addEventListener("error", function(e) {
            element.src = "pic/Common/R/r6.png";
        }, false)
    })

    let relatedCard = document.querySelectorAll(".relatedArticles .card")
    relatedCard.forEach(function(element) {
        element.addEventListener("click", function(e) {
            window.location.href = "ArticleCommon.php?i=" + element.dataset.id
        }, false)
    })
</script>

</html>