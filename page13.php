<?php
include 'db/db.php';
$sql = "SELECT * FROM `article` WHERE `topicSec` = '營養健康' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
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
    <title>營養建議</title>

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
        <h3>營養建議</h3>
    </div>

    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>4. 後續追蹤</h3>
            <h1>營養建議</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page13/page13_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>資訊來源：義大醫院 大腸直腸外科  陳致一醫師
                        <br> 撰稿者：羅氏大藥廠 - Patient Journey Partner, Felicity Chen
                    </small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img style="transform: rotate(-15.15deg);" src="pic/page13/page13_imgGroup1_1.png">
                    <img style="transform: rotate(15deg);" src="pic/page13/page13_imgGroup1_2.png">
                    <img src="pic/page13/page13_imgGroup1_3.png">
                    <img src="pic/page13/page13_imgGroup1_4.png">
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>我得了大腸癌，是不是要節制飲食少吃肉?</h2>
                            <p>得了大腸癌更需有充足的營養，才有足夠體力迎接後續的治療。</p>
                        </div>
                    </div>
                    <div class="section">
                        <p>健康烹煮，均衡攝取，減少加工食品，是大腸癌患者的飲食準則。
                            營養補充對癌症患者格外重要，對癌症患者來說，營養不良不僅可能延遲手術後接受藥物治療的黃金時機，甚至可能導致生命危險。歐美各國在治療前會進行患者的營養評估，台灣也落實營養的介入，除了輔助治療成效，也希望改善患者的生活品質。
                        </p>
                    </div>
                    <div class="section">
                        <p>尤其是大腸癌患者，未來可能會面臨多元的治療方法 (手術、化療、標靶、放療等)，因此充足的營養不只可以幫助術後傷口癒合、增加免疫力，更可舒緩治療中的癌因性疲倦與不適。
                        </p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>營養不良是因為手術後腸子縮短造成的嗎?</h2>
                            <p>手術並非主因。</p>
                            <p>臨床觀察到大約7成第四期患者，在被診斷出大腸癌之前，就已營養不良。
                                腫瘤在發展的時候，會開始大量吸收人體的養分，導致體重減輕，若惡化到一定程度，更會阻塞腸道，導致食慾不振，營養狀況更是雪上加霜。大腸主要功能為吸收水分，大多數的營養成分依靠小腸吸收，因此手術後大腸雖然縮短，但不影響養分吸收，也可維持人體需要的基本生理機能。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>大腸切掉後，吃飯喝水會受影響嗎?</h2>
                            <p>手術後大腸雖然被縮短，但不至於嚴重影響養分吸收，仍可維持人體需要的基本生理機能。
                            </p>
                        </div>
                    </div>
                    <div class="section">
                        <p>無論術後有/無造口，患者喝水飲食皆可正常，但手術後身體仍有一段時間需要適應，術後初期可能會有多次稀便的情形，身體逐漸調適後，就會慢慢恢復了。</p>
                    </div>
                    <div class="section">
                        <p>有造口患者，需特別注意，若有水便過量，應及時向醫師反應，醫師可適時投予止瀉藥物，幫助患者有更好的生活品質。</p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <h2>大腸癌手術後，我該多吃或少吃什麼食物嗎?</h2>
                    </div>
                    <div class="section">
                        <div class="text">

                            <p>術後可攝取蛋白質幫助傷口癒合，例如: 魚 (吃魚肉而非只喝湯)、肉、蛋、奶，但記得要循序漸進，切忌暴飲暴食。
                            </p>
                            <br><br>
                            <p>蛋白質不只可幫助傷口癒合，還可以提升免疫力與體力，幫助患者有充足的體力邁向藥物療程。吃健康烹煮的天然肉類都是最好的補充方式，如果胃口還是不好，也可以適度搭配市售營養補充品。
                            </p>
                        </div>
                        <img src="pic/page13/page13_imgGroup2_1.png" alt="">
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>大腸癌手術後，我該多吃或少吃什麼食物嗎?</h2>
                            <p>大多數的養份是依靠小腸吸收，因此手術切除大腸後，並不會直接影響養分吸收。
                            </p>
                            <br><br>
                            <p>術後患者與家屬毋須感到恐慌，不敢吃或吃太多補過頭，反而對身體復原沒有正向幫助。無論是術後或接受化療期間，都要把握循序漸進，均衡飲食的原則，就足以支持身體所需的營養需求了。</p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>醫師說要吃蛋白質補充體力，但我吃素怎麼辦?</h2>
                            <p>大腸癌患者的飲食目標，就是要有充足的體力面對接下來的治療，因此蛋白質的補充特別重要。
                            </p>
                            <br><br>
                            <p>術後可正常飲食的時候，如果可以改吃蛋奶素，其實雞蛋與牛奶就可以提供所需的蛋白質。市售營養補充品也屬於蛋奶素，可考慮適量補充。</p>
                            <br><br>
                            <p>如果無法改吃蛋奶素，則可透過攝取豆類製品(例如:豆漿、豆腐)或高蛋白質的蔬菜 (例如:
                                花椰菜、菠菜、馬鈴薯等)來做補充。但要特別注意，切勿恐慌蛋白質吃不夠就過量攝取，因為豆類易產氣，蔬菜粗纖維高，因此都不宜過量，均衡飲食才能減少腸胃不適。</p>

                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <h2>大腸癌化療會造成貧血嗎? 我該多吃甚麼來補血?</h2>
                    </div>
                    <div class="section">
                        <div class="text">

                            <p>化療不會直接造成貧血。
                            </p>
                            <br><br>
                            <p>病友可能因為化療期間頭暈虛弱就誤會是貧血，但其實這是癌因性疲倦造成的，大部分的病友驗血後，血色素都在正常範圍。</p>
                            <br><br>
                            <p>病友們無須刻意攝取特定食物或補品，癌因性疲倦主要是因為治療過程中，患者會產生心理與生理的不適，進而感受到身體虛弱無力。研究顯示，癌因性疲倦可透過均衡的飲食攝取，運動，按摩，伸展與休閒活動等的介入獲得改善，因此在療程中找到舒緩方式，會比過度攝取特定飲食或補品更重要。
                            </p>
                        </div>
                        <img src="pic/page13/page13_imgGroup3_1.png" alt="">
                    </div>
                </div>
                <div class="other">
                    <small>M-TW-00002117 <br>
                        「本文章由羅氏大藥廠與醫護人員共同協作而成」
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
                    <a href="page12.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>副作用管理</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page14.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>心理健康</h4>
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