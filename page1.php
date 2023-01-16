<?php
include 'db/db.php';


$sql = "SELECT * FROM `article` WHERE `topicSec` = '癌症分期' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


$sqlGA = "SELECT * FROM `GACode` ORDER BY id  LIMIT 0 , 1";
$resGA = $db->query($sqlGA);
$resGA->setFetchMode(PDO::FETCH_ASSOC);



// $sqlR = "SELECT * FROM `article` WHERE `topicSec` = '癌症分期' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
// $resR = mysqli_query($connect, $sqlR);


// $sqlGA = "SELECT * FROM `GACode`";
// $resGA = mysqli_query($connect, $sqlGA);
// $rowGA = mysqli_fetch_array($resGA);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>疾病篩檢</title>

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
        <h3>疾病篩檢</h3>
    </div>
    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>1. 症狀察覺</h3>
            <h1>疾病篩檢</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page1/page1_bigIcon.svg" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>受訪者：高雄醫學大學附設中和紀念醫院 王照元 副院長
                        <br> 撰稿者：羅氏大藥廠 - Patient Journey Partner, Steve Yeh</small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page1/page1_imgGroup1_1.svg" alt="">
                    <img src="pic/page1/page1_imgGroup1_2.svg" alt="">
                    <img src="pic/page1/page1_imgGroup1_3.svg" alt="">
                </div>

                <div class="paragraph">
                    <div class="section">

                        <p>近年來COVID19肆虐，疫情降低了民眾接受癌篩的意願，也連帶減少了大腸癌篩檢的人數，衛生福利部屏東醫院院長王照元教授指出，在COVID19的這段時間，國內於民國110年的大腸癌篩檢量，比起民國109年降低了15%，大腸癌篩檢總人數減少了19.4萬人，若是以大腸癌陽性率來換算的話，將會少了680位大腸癌患者早期被診斷出來，若是能早期發現大腸癌的話，5年存活率在9成以上，但如果是在第四期的話大腸癌5年存活率就會掉到1成3左右，因此早期診斷出大腸癌是非常重要的。
                        </p>

                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>目前大腸癌的篩檢方式有兩種，分別為免疫法糞便潛血檢查以及大腸鏡，王照元教授指出，根據國民健康署110年的資料，透過糞便潛血檢查發現有31,611位是屬於癌前病變，而2,191位為大腸癌。
                        </p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">

                        <p>根據國民健康署政策，提供50-74歲的民眾每2年免費一次的「定量免疫法」糞便潛血檢查，檢查前亦不需要限制飲食，非常方便。王照元教授表示，透過每兩年一次的糞便潛血檢查，可以降低35%的大腸癌死亡率，若從大腸癌篩檢的資料來看，有將近一半的0-2期大腸癌患者是透過篩檢檢查出來的，透過篩檢可以將早期的大腸癌病人偵測出來。
                        </p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>如果糞便潛血檢查為陽性的話，民眾也先不用慌張，王照元教授指出，若糞便潛血檢查為陽性的話，有3成以上是瘜肉或是癌症，還是要接著做大腸鏡來檢查會比較準確，如果是糞便潛血檢查陽性，超過6個月以上才做大腸鏡的話，得到大腸癌的風險會增加3成左右，若是一直不去做大腸鏡的話，死亡風險會增加到6成4，所以若是糞便潛血檢查陽性的話建議大家還是要去做大腸鏡。
                        </p>
                        <img src="pic/page1/paragraph_img1.svg" alt="">
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>可能有民眾會覺得大腸鏡是比較侵入性、過程中也會有不適感，因此降低了做大腸鏡的意願，王照元教授指出，現今有無痛大腸鏡檢查可供大家選擇，無痛大腸鏡檢查是透過麻醉的方式減少檢查過程中的不適感，可以降低民眾對於大腸鏡檢查的恐慌。
                        </p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>王照元教授呼籲大家，免疫法糞便潛血檢查是一個非常方便、簡單的工具，政府也有相關的補助措施，若是符合條件的民眾，還是需要做大腸癌的篩檢，透過大腸癌篩檢可以早期發現異常、早期接受治療，進而阻止大腸癌的發生及惡化。
                        </p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">

                        <div class="reference">
                            <h3>參考資料</h3>
                            <ul>
                                <li><a href="https://www.hpa.gov.tw/Home/Index.aspx">國民健康署
                                        https://www.hpa.gov.tw/Home/Index.aspx</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="other"
                    style="font-weight: 400;font-size: 18px;line-height: 36px;text-align: right;letter-spacing: 0.01em;color: #898B91">
                    <h5>M-TW-00002172</h5>
                    <h5>「本文章由羅氏大藥廠與醫護人員共同協作而成」</h5>
                </div>



            </div>


            <div class="contnetBottom">
                <div class="fans">

                </div>

                <div class="hr hrSN"></div>
                <div class="LR" style="justify-content: end;">

                    <div class="next">
                        <a href="page2.php">
                            <img src="pic/Common/next.svg" alt="">
                            <h4>疾病症狀</h4>
                        </a>
                    </div>
                </div>
                <div class="hr hrSN"></div>
            </div>

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