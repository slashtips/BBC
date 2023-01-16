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
    <title>心理健康</title>

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
        <h3>心理健康</h3>
    </div>

    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>5. 腸癌照護</h3>
            <h1>心理健康</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page14/page14_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>資訊來源：門諾醫院癌症中心 陳儀瑾臨床心理師
                        <br> 撰稿者：羅氏大藥廠 - Patient Journey Partner, Eric Hsiao</small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page14/page14_imgGroup1_1.png" alt="">
                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>在聽到醫師告知診斷時，有些人可能會說：「該不會搞錯了吧?」或是感覺晴天霹靂，也有些人會開始找可能罹癌的原因，從自己的飲食、生活習慣、人際互動、情緒狀態…等等。接受了壞消息的告知後，開始要做一連串的考量，要不要手術、要不要做化療、要不要做放射線治療…等，同時也會需要做許多的檢查，可能要陸續住院進行，然後就開始做治療。
                        </p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>很多人可能會在這個階段想很多，因為還不確定癌症的分期、不確定之後的存活期有多久，可能會因此而煩惱、失眠、吃不下，感覺緊繃、
                            疲憊。也有人會以為癌症就是不治之症、煩惱不久於人世、開始交代身後事。
                        </p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <p>也有人會以為癌症就是不治之症、煩惱不久於人世、開始交代身後事。 以上是在臨床上遇到的個案們曾經出現過的樣貌。但每一個人都不同，提供剛診斷的您們一些下列的方向可以進行調整：
                        </p>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>1. 快一點比較好：盡快做出檢查與治療的決策，並信任醫療的團隊會幫助您做出最適合您的治療計畫，才不至於因為延誤而讓病情惡化。
                            </p>
                            <p>2. 分工合作：將手上的事先分配好，如先將工作告一段落、家事由家人分擔，找到保險業務員問清楚給付。
                            </p>
                            <p>
                                3. 多吃多睡：注意自己的體力和睡眠，如果需要手術或後續進行化療， 都需要維持營養和體力才能順利地恢復及治療。
                            </p>
                            <p>4. 找到內心的平安：如果發現自己因為煩惱而出現了失眠、憂鬱、焦慮等症狀，可以先尋求專業的協助，如就診身心科、或是心理諮詢門診，
                                主動求助、讓自己內在感覺平安、減少治療歷程的害怕。</p>
                        </div>
                        <img src="pic/page14/page14_imgGroup2_1.png" alt="">
                    </div>
                </div>

                <div class="paragraph" style="margin-top: 60px;">
                    <div class="section">
                        <div class="text">
                            <h2>治療中的心理歷程及調適</h2>
                            <p>手術後等待的是病理組織的結果，醫療團隊會確認腫瘤的部位、分期，並訂定治療計畫，有些患者需要接受後續的化療或放射線治療，可能有些標靶或免疫治療藥物可用、有些是健保給付、而有些需自費，這些都需要討論、並且與整個醫療團隊合作、建立信任感。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>住院中可能會有許多醫院裡的人前來探望，醫師、護理師、造口師、傷口護理團隊、營養師、心理師、關懷師…等，先不用急著以為自己的狀況很嚴重才會有這麼多人來，這些都是因為希望您能得到更完整的照護而存在的醫療
                                團隊成員。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>您需要做的是：
                            </p>
                        </div>
                    </div>
                </div>


                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>1. 要休息也要活動：住院中因醫療措施繁雜、很多時候睡眠並沒有辦法有很好的品質，除了多休息之餘、在有體力的時候也需要在注意安全的前提下活動。
                            </p>
                            <p>2.
                                讓藥物發揮作用：進行治療或追蹤的過程會安排一些相關的檢查，醫療團隊會以此評估手術或化學治療的效果；此外，手術治療後或化療期間可能會有疼痛、失眠等困擾，在化療的過程有些人可能會出現副作用，可以及時向醫師或護理師反映、開立相關症狀處置的藥物，以協助您有好的休息品質。
                            </p>
                            <p>3. 申請資源：如若擔憂住院或醫療費用，可在住院期間照會社工或各醫院的癌症資源中心，協助進行相關資源的申請。</p>
                            <p>4. 心理諮詢：有些人在治療的期間可能會歷經病情的變化、或是療程結束後擔心復發，進而產生較為焦慮或是憂鬱的情緒狀態，可以主動尋求身心壓力的心理協助，至身心科就診或是接受心理治療。
                            </p>
                            <p>5. 增加對未來的希望感：做自己喜歡做的事、也可以想一想有沒有想做的事、增加自己的成就感和意義感，為自己的未來做規劃。</p>
                        </div>
                    </div>
                </div>



                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h3>復發的心理歷程及調適</h3>
                            <p>疾病的復發相信一定形成了不小的壓力，有些人會開始回想是不是治療期間吃了什麼？或是什麼生活習慣所引起的？更甚至有些人會開始擔心：「是不是不會好了？」另外則是會有一群人會擔心再做一次化療、再經歷一次副作用的不適。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>想給正在擔心的您一些調適的方法做為參考：</p>
                        </div>
                    </div>
                </div>


                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>1. 建立規律的作息：將自己的生活步調穩定下來，盡量使生活如常。</p>
                            <p>2. 放鬆練習：嘗試做放鬆練習、降低壓力感受。</p>
                            <p>3. 維持與親友間的聯繫：找可以信任的人談一談，減少壓抑情緒，找到支持和宣洩的管道。</p>
                            <p>4. 勿聽信偏方：可能這個時候會有人推薦貴重的偏方或是保健食品，建議多聽多看、但不要貿然嘗試，可以和醫療團隊討論使用的適切性。</p>
                        </div>
                    </div>
                </div>



                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h3>晚期的心理歷程及調適</h3>
                            <p>如果治療的效果不如預期、疾病還是惡化了，或是一開始發現的時
                                候，被告知已經無法手術或做其他的治療，此時醫師會與家人和您一起討論，是否接受安寧緩和療護。有些人可能因此內心會百感交集，感到遺憾、自責、悲傷。<br>
                                也有一部份的人會覺得自己看開了，人總有生老病死，走過了這一遭，有什麼放不下的也得放下。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>但在這時候，還有一些能做的事：</p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>1. 減少遺憾：多和自己所在意的人在一起，向彼此道謝、道歉、道愛， 珍惜相處的時光。</p>
                            <p>2. 尋求舒適自在：感覺疼痛時可以和醫師討論止痛藥物的使用，活動上如果感覺不便、也可以尋求復健或輔具的協助，進食方面也可以向營養師諮詢，但如果是胃腸道阻塞、腹脹也不要勉強進食。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>3.
                                預立醫療醫囑：如果到了末期，要不要急救、要不要插管、要不要插鼻胃管維持營養、要不要使用抗生素…等治療，趁著自己還清醒的時候為自己做決定，也向家人清楚表達自己的意願，達到尊嚴、善終的目的。
                                <br> 4. 回顧生命歷程：有機會也可以和家人或是心理師談，自我生命的回顧、 一生所追求的那些意義感，也藉這個機會、好好地向家人道別。
                            </p>
                        </div>
                        <img src="pic/page14/page14_imgGroup3_1.png" alt="">
                    </div>
                </div>



                <div class="paragraph" style="margin-top: 60px ;">
                    <div class="section">
                        <div class="text">
                            <h2>家屬的心理調適</h2>
                            <p>1. 適時的陪伴與分工：當家人被診斷出罹癌，家屬成為了照顧者、會希望能提供給罹癌的家人幫助，“陪伴”就是最好的支持，此外，與其他的家人之間討論好“分工合作”、以減少照顧者負荷也很重要。
                            </p>
                            <p>2. 資訊的取得：有時候會很希望可以多找一些資料、了解癌症的治療或是照顧等相關的資訊，建議盡量避免由社群軟體取得，可以主動請醫療人員提供“衛教手冊”作為參考，也可以加入“病友會”、共享一些相關的資訊。</p>
                            <p>3. 自我照顧：照顧者本身也會有壓力，不管是照顧的過程因為患者身體
                                不舒服而直接拋出的情緒、或是照顧者感覺只能看著家人的不適而沒有辦法為其做些什麼，有時甚至會形成照顧者自己的情緒變化，也因此更需要“自我覺察”。如果當照顧者自己的情緒狀態變得有些焦慮或憂鬱之時，建議可以找“心理師或身心科醫師”諮詢自身的心理狀態，會提供給照顧者專業的建議、有助於減少壓抑等內在感受的不適。照顧者也需要好好照顧自己，才不至於像蠟燭兩頭燒一樣感到耗竭。</p>
                        </div>
                    </div>
                </div>

                <div class="other">
                    <small>
                        M-TW-00002113
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
                    <a href="page13.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>營養建議</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page15.php">
                        <img src="pic/Common/next.svg" alt="">
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