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
    <title>癌症資源中心</title>

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
        <h3>癌症資源中心</h3>
    </div>

    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>5. 腸癌照護</h3>
            <h1>癌症資源中心</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page16/page16_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>受訪者: 萬芳醫院 血液腫瘤科 張家崙主任
                        <br> 撰稿者：羅氏大藥廠 - Patient Journey Partner, Genie Wang</small>
                </div>
                <div class="hr"></div>

                <div class="paragraph" style="margin-top: 20px;">
                    <div class="section">
                        <div class="text">
                            <p>在醫生告知確診之後『到底我該怎麼辦?!』這個問題通常在第一時間就會從腦中閃過，除了怎麼選擇治療之外，往往更令人困擾的是接下來的日常生活會有什麼變化、會遇到什麼狀況、遇到問題可以找誰幫忙….等等。治療過程中會遇到許多問題及挑戰，除了有家人的支持以外，各方面的心靈諮詢與衛教諮詢也是迫切需要的資源。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <img src="pic/page16/page16_imgGroup1_1.png" alt="">
                    </div>
                </div>

                <div class="paragraph" style="margin-top: 60px">
                    <div class="section">
                        <div class="text">
                            <h2>初診斷的心理歷程及調適
                            </h2>
                            <p>雖然平常就診最常接觸的是醫師跟臨床的護理人員，但事實上「癌症中心」才是整個癌症治療幕後的主要推手。癌症中心統籌癌症相關的業務，包含癌症預防、癌症篩檢、癌症登記、癌症團隊成立、個案追蹤與管理與治療指引的修訂。癌症中心同時也是一個醫療監督者，監督醫師在治療上是否背離一般治療原則、或是否有遵守治療品質要求。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph" style="margin-top: 60px">
                    <div class="section">
                        <div class="text">
                            <h2>癌症治療好夥伴 - 「癌症資源中心」
                            </h2>
                            <p>
                                此外，萬芳醫院血液腫瘤科張家崙主任表示「癌症資源中心」更是治療旅程上的好夥伴，個管師為主要樞紐與橋梁幫助連結各項資源，包含癌症資源轉介、假髮租借、心理輔導、營養諮詢、社會資源連結等等，解決治療旅程中的問題，進而讓治療更順暢。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>
                                個管師不僅僅是病友主要的聯絡窗口，也同時是醫院端治療、檢查完整性上的把關者，臨床上協助釐清需求並統籌各項資源服務，例如:
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>
                                個管師不僅僅是病友主要的聯絡窗口，也同時是醫院端治療、檢查完整性上的把關者，臨床上協助釐清需求並統籌各項資源服務，例如:
                            </p>
                            <p>1. 營養諮詢 : 遇到腸道阻塞或因為腸道腫瘤導致消化功能異常而無法好好進食，個管師會轉介營養師做營養諮詢，幫助改善症狀。</p>
                            <p>2. 藥物諮詢 : 當用藥上遇到問題，或擔心有藥物交互作用時，萬芳醫院也設有癌症專責藥師可以做藥物諮詢，藉此可以幫助病友減少服藥上的困難和障礙。</p>
                            <p>3. 社會資源 : 若有經濟困難或是交通不便的狀況，個管師也會協助轉介社工或社福機構提供協助。</p>
                            <p>4. 治療計畫統籌 : 針對多專科治療，個管師也是主要的橋樑，協助各科室間的協調、統整各個醫師看診的時間，優化就診流程與安排治療行程。</p>
                        </div>
                    </div>
                </div>

                <div class="paragraph" style="margin-top: 60px">
                    <div class="section">
                        <div class="text">
                            <h2>疫情期間，癌症中心服務不中斷！
                            </h2>
                            <p>萬芳醫院個管師平時就會與病友保持密切聯繫，平常可以在上班時間透過電話提出需求，若需要醫師的協助也能幫忙轉介。另外癌症中心網頁上有相當豐沛的衛教資訊可以即時查閱，做為疫情期間無法到醫院的配套措施。疫情期間病友治療不能斷，除了醫療人員給予關懷之外，病友與病友之間也會互相給予支持鼓勵，癌症中心各項資源更陪伴著病友及家屬在各個抗癌的階段中不孤單，持續支持與鼓勵，給予繼續治療的勇氣。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="other">
                    <small>M-TW-00002176
                        <br>「本文章由羅氏大藥廠與醫護人員共同協作而成」
                    </small>
                </div>

            </div>






            <div class="fans">
                <a href="#"><img src="pic/Common/line.svg" alt=""></a>

                <a href="#"><img src="pic/Common/facebook.svg" alt=""></a>
            </div>

            <div class="hr hideHR"></div>
            <div class="LR">
                <div class="previous">
                    <a href="page15.html">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>社會資源</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page17.html">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>個人化精準醫療</h4>
                    </a>
                </div>
            </div>
            <div class="hr hideHR"></div>


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