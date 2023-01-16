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
    <title>手術治療</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">
    <style>
        .content .source {
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            text-align: right;
            letter-spacing: 0.01em;
            color: #424452;
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
        <h3>手術治療</h3>
    </div>
    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>3. 治療種類</h3>
            <h1>手術治療</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page8/page8_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small class="source">受訪者：高雄長庚醫院 大腸直腸外科  李克釗醫師
                        <br> 撰稿者：羅氏大藥廠 - Patient Journey Partner, Felicity Chen</small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page8/page8_imgGroup1_1.png" alt="">
                    <img src="pic/page8/page8_imgGroup1_2.png" alt="">
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>大腸直腸癌一定要手術嗎?</h2>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h3>還有機會切除，就表示還有長期存活的機會</h3>
                            <p>大腸癌是預後相對良好的癌症，即使是第三期大腸癌，透過手術切除癌細胞，研究顯示患者的五年存活率仍可高達65%。目前台灣的健保已給付相當多元的藥物與手術治療，民眾積極配合醫師治療仍可預期有較佳的預後。
                        </div>
                    </div>

                </div>

                <div class="paragraph">
                    <div class="section">
                        <img src="pic/page8/page8_imgGroup2_1.png" alt="">

                    </div>
                </div>

                <div class="paragraph" style="margin-top: 60px;">

                    <div class="section">
                        <div class="text">
                            <h2>可以不要做造口嗎?</h2>
                            <p>90%的造口是暫時性的，3個月後即可移除。<br>造口提供大腸接合處更好的癒合環境，幫助患者恢復得更好、更快。<br>
                                造口一般位在大腸接合處之前，目的是提早攔截夾帶毒素的糞便，減少傷口汙染，促進傷口癒合。<br>民眾恐懼造口影響生活品質，但造口不只可以有效的幫助排除身體毒素、避免接合處遭受糞便感染、促進接合處的癒合，更可幫助患者快速恢復正常飲食，讓身體補足養分，儘快邁入下個療程。因此建議患者，不妨考慮透過三個月的短期造口，換取治療黃金時機。
                            </p>
                        </div>
                    </div>

                </div>

                <div class="paragraph" style="margin-top: 60px;">
                    <div class="section">
                        <div class="text">
                            <h2>造口受益族群</h2>


                        </div>

                    </div>
                    <div class="section">
                        <img src="pic/page8/page8_imgGroup3_1.png" alt="">
                    </div>
                </div>
                <div class="paragraph" style="margin-top: 60px;">
                    <div class="section">
                        <div class="text">
                            <h2>造口會有臭味嗎? 會不會被發現?</h2>
                            <p>台灣目前的造口器材非常進步，可有效阻隔氣味的滲漏，防水，而且體積輕薄，穿著寬鬆的衣服，其實看起來與一般人無異。只有在更換便袋的時候會聞到氣味，但與一般如廁的狀況相似，因此毋須過度恐慌。
                            </p>
                        </div>

                    </div>
                </div>



                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>大腸癌手術傷口會很大嗎?</h2>

                        </div>
                    </div>
                    <div class="section">
                        <div class="text">
                            <h3>手術傷口取決於腫瘤大小</h3>
                            <p>第1-3期的大腸癌手術主要採用腹腔鏡術式，傷口相較傳統開腹手術小，恢復時間也較快，但腫瘤尺寸若過大或已侵犯周邊組織，醫師為了將腫瘤更徹底的清除，則可能改採傳統開腹手術，即使如此，傷口也約在10公分左右，較其他器官開腹傷口小，照護上也不至於太困難。(其他器官的開腹傷口約為20公分)
                            </p>
                        </div>
                    </div>

                </div>

                <div class="paragraph" style="margin-top: 60px;">
                    <div class="section">
                        <div class="text">
                            <h2>大腸癌手術傷口不大，算是小手術嗎?</h2>
                        </div>
                    </div>
                    <div class="section">
                        <div class="text">
                            <h3>大腸癌手術是小傷口的大手術</h3>
                            <p>由於手術技術的進步，大腸癌手術傷口與出血量可以控制得比較小，但關聯到的內臟器官眾多，因此影響層面也較廣，術後照護應格外注意。</p>
                        </div>
                    </div>
                    <div class="section">
                        <div class="text">
                            <h3>面對大手術，術前患者應補足營養，儲備體力</h3>
                            <p>大腸癌手術全程約5小時，非常消耗患者體力，術後若沒做造口，飲食受限中下，術後營養可能無法滿足傷口癒合的需求，更會影響整體預後、延誤治療的黃金時機。</p>
                        </div>
                    </div>
                </div>

                <div class="paragraph" style="margin-top: 60px;">
                    <div class="section">
                        <div class="text">
                            <h2>大腸癌手術後該注意什麼?</h2>

                        </div>

                    </div>
                    <div class="section">
                        <div class="text">
                            <p>應優先注重營養的補充。(病友可參考營養篇)</p>
                        </div>
                    </div>

                    <div class="section">
                        <div class="text">
                            <p>充足的營養與蛋白質可促進傷口癒合、提升免疫力、為患者儲備體力，快速進入下個療程，爭取治療黃金時間。</p>
                        </div>
                    </div>

                    <div class="section">
                        <div class="text">
                            <p>術後多數患者可正常行走與活動，但術後一個月內請避免激烈、大量使用腹部肌肉的活動 (例如: 提重物、仰臥起坐)，術後滿一個月，則可嘗試循序漸進的增加運動強度。</p>
                        </div>
                    </div>

                </div>

                <div class="paragraph" style="margin-top: 60px;">
                    <div class="section">
                        <div class="text">
                            <h2>手術會不會導致腸沾黏，還要再開一次刀?</h2>

                        </div>
                    </div>
                    <div class="section">
                        <div class="text">
                            <p>術後是否會沾黏，目前並沒有直接的臨床指標可以預測，但醫師在關閉造口時，或許可透過造口觀察沾黏情形。
                            </p>
                        </div>


                    </div>
                    <div class="section">
                        <div class="text">
                            <p>少數腸沾黏合併腸阻塞患者，由於出現腹痛與排便不順症狀，嚴重影響生活品質，的確有需要再次手術的可能。</p>
                        </div>
                    </div>

                    <div class="section">
                        <p>若民眾擔心有沾黏發生，也可考慮請醫師評估，是否需要使用防沾黏材料。</p>

                    </div>
                </div>

                <div class="paragraph" style="margin-top: 60px;">
                    <div class="section">
                        <div class="text">
                            <h2>為什麼都要手術了，醫師還要我做化療?</h2>

                        </div>
                    </div>
                    <div class="section">
                        <p>術前的藥物治療(化療或合併標靶治療)是為了提高可切除率，爭取保留器官機能。
                        </p>
                    </div>
                    <div class="section">
                        <p>術後的藥物治療是為了減少高風險大腸癌的復發風險。</p>

                    </div>

                    <div class="section">
                        <p>腫瘤越大，不只需要切除的範圍大、關聯的器官多，對患者的身體負荷也越大。事先透過藥物投予，有機會遏止腫瘤持續的侵犯、縮小腫瘤與切除範圍，提高可切除率，就有機會爭取較好的預後。
                        </p>

                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>參考資料</h2>
                            <ul>
                                <li>
                                    J Natl Cancer Inst. 2009;101(20):1412-22
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="other">
                    <small>M-TW-00002115<br>「本文章由羅氏大藥廠與醫護人員共同協作而成」</small>
                </div>


            </div>



            <div class="fans">
                <a href="#"><img src="pic/Common/line.svg" alt=""></a>

                <a href="#"><img src="pic/Common/facebook.svg" alt=""></a>
            </div>

            <div class="hr"></div>
            <div class="LR">
                <div class="previous">
                    <a href="page7.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>化學藥物治療</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page9.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>放射治療</h4>
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