<?php
include 'db/db.php';
$sql = "SELECT * FROM `article` WHERE `topicSec` = '癌症分期' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
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
    <title>疾病症狀</title>

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
    <div id="fb-root"></div>

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
        <h3>疾病症狀</h3>
    </div>
    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>
    <div class="topic">
        <div class="text">
            <h3>1. 症狀察覺</h3>
            <h1>疾病症狀</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page2/page2_bigIcon.png" alt="">
        </div>
    </div>





    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>資訊來源：和信醫院血液腫瘤科 鄭小湘 醫師
                        <br>羅氏大藥廠 - Patient Journey Partner, Fred Huang</small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page2/page2_imgGroup1_1.png">

                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>大腸癌近年來成為國人常見癌症的首位，且還有每年增加的區域。大腸癌是可以透過早期的診斷發現的，早期發現的患者透過妥善的治療，可以大幅增加存活率。
                            現今國建署針對50-74歲的民眾，有提供2年1的糞便潛血檢查，民眾們可以多加利用。相關資訊都可以洽詢各大醫院或當地衛生局。除了糞便潛血檢查之外，民眾也可以透過觀察自身的排便習慣是否改變。
                        </p>
                    </div>
                    <div class="section">
                        <p>例如：</p>
                    </div>
                    <div class="section">
                        <p>第一：大便中是否出血，撇除痔瘡導致的出血之外，此時有可能是腫瘤生長與糞便進行摩擦，而導致血的情形。</p>
                    </div>
                    <div class="section">
                        <p>第二：排便的習慣是否有改變。例如排便的次數突然變很多，或是突然變少，或是大便變得非常細小，都特別的注意。</p>
                    </div>
                    <div class="section">
                        <p>第三：常有”裡急厚重”的感覺，當腫瘤部位生長時，會讓患者感受到便意，但又沒有解出糞便。</p>
                    </div>
                    <div class="section">
                        <p>第四：出現不明的貧血症狀，大腸癌的生長部位不同，也有可能會出現不同的症狀。</p>
                    </div>
                    <div class="section">
                        <p>尤其當腫瘤生長在右側大腸時，因為離肛門口較遠，一般較不易發現出血的情形。 若民眾有發生上述的情形，或是家族中有大腸癌病史，建議到各醫院安排篩檢，並洽詢專業的臨床醫師進行診斷。
                        </p>
                    </div>

                </div>
                <div class="other">
                    <small>M-TW-00002180
                        <br>「本文章由羅氏大藥廠與醫護人員共同協作而成」
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
                    <a href="page1.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>疾病篩檢</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page3.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>病理報告</h4>
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

        <div class="menuArticleSmall">
            <div class="menuArticleSmallBtnGroup">
                <img class="homeS" src="pic/Common/menuArticleSmallBtn1.svg" alt="">
                <img class="sourceS" src="pic/Common/menuArticleSmallBtn2.svg" alt="">
                <img class="catelogS" src="pic/Common/menuArticleSmallBtn3.svg" alt="">
            </div>
        </div>

        <div class="fansCard"></div>
        <div class="catelogCard"></div>

    </div>
    <div class="footer"></div>

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