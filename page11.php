<?php
include 'db/db.php';
$sql = "SELECT * FROM `article` WHERE `topicSec` = '副作用' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
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
    <title>手術後照護</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">

    <style>
        .arrow {
            height: 30%;
            align-self: center;
        }
    </style>
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
        <h3>手術後照護</h3>
    </div>
    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>4. 後續追蹤</h3>
            <h1>手術後照護</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page11/page11_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>資訊來源：林口長庚醫院 廖俊凱 醫師
                        <br> 撰稿者：羅氏大藥廠 - Patient Journey Partner, Fred Huang</small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page11/page11_imgGroup1_1.png">
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>腸癌的患者需要進行手術時，可以取分成以下兩種目的。第一因為腫瘤過大或是無法立即切除，需要先以化療藥物進行治療。此時，醫師可能會在患者的鎖骨地方，手術將人工血管植入，以利後續施打化療藥物。因此，有植入人工血管的患者，應盡量減少大揮臂的動作，或是手提重物，減少因為動作而導致人關血管位移或是斷針的情形。
                            </p>
                        </div>
                    </div>
                    <div class="scrtion">
                        <p>第二種情況則是，患者因為腫瘤生長導致腸阻塞，需要開刀將腫瘤移除，以維持患者的正常生活機能。目前腸道的手術傷口都不會太大，若於住院期間患者在傷口照護上，可以詢問專業的醫護人員進行協助。傷口癒合返家之後，初期應減少避免劇烈的運動，飲食方面應由流質飲食開始，在慢慢轉換成糜狀，再轉換成固態。避免術後立即吃太堅硬或難以消化的食物，造成腸道功能的負擔。
                        </p>
                    </div>
                </div>

                <div class="imgGroup1">
                    <img src="pic/page11/page11_imgGroup2_1.png">
                    <img class="arrow" src="pic/page11/arrow.png">
                    <img src="pic/page11/page11_imgGroup2_2.png">
                    <img class="arrow" src="pic/page11/arrow.png">
                    <img src="pic/page11/page11_imgGroup2_3.png">
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>有些時候患者會需要進行造口的手術，有些暫時性的造口，目的則是希望讓患者治療期間，依舊可以維持正常的身體機能，增加體重恢復體力，讓患者盡快可以恢復進食。造口的護理上，建議應與院內的造口師進行討論，注意居家照顧時該注意的細節。
                            </p>
                        </div>
                    </div>
                    <div class="section">
                        <p>患者不論接受那一種手術，皆應維持良好的飲食習慣，並且適當的運動，增加自身的體力，才能已接受日後的藥物治療，也為抗癌的道路奠定下基礎。</p>
                    </div>
                </div>

                <div class="other">
                    <small>
                        M-TW-00002114
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
                    <a href="page10.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>標靶治療</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page12.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>副作用管理</h4>
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