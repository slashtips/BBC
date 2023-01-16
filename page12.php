<?php
include 'db/db.php';
$sql = "SELECT * FROM `article` WHERE `topicSec` = '腸癌照護' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
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
    <title>副作用管理</title>

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
        <h3>副作用管理</h3>
    </div>
    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>4. 後續追蹤</h3>
            <h1>副作用管理</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page12/page12_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>資訊來源：中國醫學大學附設醫院 陳宇詩 專科護理師
                        <br> 撰稿者：羅氏大藥廠 - Patient Journey Partner, Fred Huang & IT, Kai Chen</small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page12/page12_imgGroup1_1.png">
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h3>其實癌症藥物治療並沒有想像中的可怕！</h3>
                            <p>很多患者，因為電視劇的關係，看到癌症治療之後會有掉頭髮以及嘔吐等現象，或者聽聞其他親戚朋友轉述情形，往往在還沒接受治療之前都會對於副作用產生恐懼。他們會擔心打標靶藥物會不會很不舒服？會不會想嘔吐？會不會掉頭髮？但是，這些不舒服來源，很多時候大部分是來自化學治療而不是標靶藥物。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>癌症治療的藥物可分成，標靶藥物治療以及化學藥物治療。這些藥物產生的副作用，依照每個人不同的身體狀況反應也會不同，大抵來說這些副作用都不會太難處理。面對這些副作用的處理，依臨床照護的經驗，都會跟患者先進行溝通，讓患者在進行藥物治療之前，先對這些藥物產生的副作用有正確的認知觀念，包括會有那些症狀發生，發生之後臨床端會如何協助，讓患者先有正確的心理準備，即便是發生了也可以有管道可以協助，來降低患者的恐慌與擔憂。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>一般來說患者如果體能狀況可以負擔，或者是比較年輕的族群，都會先鼓勵患者，能盡量忍受短暫的不舒服，不依靠外在藥物介入緩解。但如果治療藥物的反應太大，身體很不舒服也可以跟醫師、護理師和個管師反映。臨床照護上也都會協助準備進行副作用緩解的藥品，讓患者減少藥物治療不適的情形。假設有持續不舒服的情形，也可以跟負責的照護個管師或護理師詢問處理方法。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>除此之外，患者在治療前可以先跟醫護人員多討論，對疾病以及藥物治療的反應有正確的衛教知識，幫助自己有正確的心理建設。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>最後也想跟病友們分享，生病來到醫院治療，總是會有一些不舒服不方便的地方，也必須調整自己的心態。而疾病治療當中也可以與其他病友交流互相打氣，可以聽聽病友之間的成功故事勉勵自己。讓自己知道，在抗癌這條道路上不只是您的戰鬥而已，您的家人、醫師以及護理人員都會跟您一起戰勝病魔。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="other">
                    <small>
                        M-TW-00002112
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
                    <a href="page11.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>手術後照護</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page13.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>營養建議</h4>
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
            if (element.textContent.trim() == title.textContent.trim()) {
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