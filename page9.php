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
    <meta charset="UTF- 8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>放射治療</title>

    <link rel="p reconnect" href="https://fonts.googleapis.com">
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
        <h3>放射治療</h3>
    </div>
    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>3. 治療種類</h3>
            <h1>放射治療</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page9/page9_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>受訪者：台北醫學大學附設醫院放射腫瘤科 李欣倫主任
                        <br>撰稿者：羅氏大藥廠 - Patient Journey Partner, Genie Wang</small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page9/page9_imgGroup1_1.png" alt="">
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>根據最新衛福部國建署108年癌登統計1，2019年新診斷的癌症人數為121,254人，較2018年增加了5,123人，而其中大腸直腸癌更是連續14年位居新診斷癌症之首。在癌症死亡率方面，2021年癌症死亡時鐘顯示平均每10分10秒就有一人因癌症喪命，相較2020年的10分30秒已經快轉20秒，而其中大腸直腸癌則位居癌症死亡率的第三名。據統計每年有6,657人死於大腸直腸癌，死亡高風險族群則集中在中高齡65-84歲2。因應腸癌現況，政府致力於提升早期腸癌的篩檢，包括持續補助50至未滿75歲民眾每2年1次的糞便潛血篩檢，以早期發現早期治療；醫療端則致力於治療的精準化，體現在近年來各期別腸癌患者治療後存活率的提升。</p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h4>低位腸癌精準治療的好夥伴 -「放射治療」, 維持生活品質 </h4>
                            <p>根據108年癌登報告1，雖然大腸直腸癌於首次療程使用放射治療比例僅有2.42%，但若為低位腸癌，包括乙狀結腸、直腸及肛門癌等，其首次療程使用放射治療的比例則大幅提高為 28.7%；若包含復發或轉移者，更有40%-60%的病人會接受放射治療。這些病人接受放射治療的主要目的為使癌症分期下降、增加肛門保留機率與降低癌症復發風險。
                        </div>
                    </div>
                    <div class="section">
                        <div class="text">
                            <p>
                                根據NCCN治療準則3，大腸癌的放射治療適應症包含如下：
                                <br>(1) 術前放射治療 - 第三、四期或有淋巴轉移
                                <br>(2) 術後放射治療 – 術後診斷為第三、四期、淋巴管血管侵犯、分化不良惡性腫瘤、腫瘤切除邊緣仍有腫瘤細胞、黏膜下深度侵犯或淋巴轉移等
                                <br>(3) 局部復發無法手術
                                <br>(4) 轉移腫瘤
                            </p>
                        </div>
                    </div>

                    <div class="section">
                        <div class="text">
                            <p>
                                對於符合這些條件的低位腸癌患者來說放射治療已被證實是必要的，其重要性也是不言而喻。
                            </p>
                        </div>
                    </div>

                    <div class="paragraph">
                        <div class="section">
                            <div class="text">
                                <h3>精準個人化醫療，滾動式客製化治療方案</h3>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph">
                        <div class="section">
                            <div class="text">
                                <p>手術、化學治療和放射治療被稱為癌症治療的鐵三角。這三種療法是可以互相搭配甚至一起進行的。舉例來說放療可以與化療同步進行，但不同的放療劑量搭配不同的化療藥物會產生不同程度的治療效果與副作用，因此臨床醫師需要針對每個個案進行綜合評估，包括患者身體狀態、年紀和癌症期別等各項指標，經由跨專科團隊共同決策並擬定最佳的治療方案，將治療鐵三角做最完美的搭配，為病人規劃最完整的治療計畫。臨床醫師也會定期監測病人的治療效果，當治療策略需要改變時，跨專科團隊就會再次就該個案的狀況進行討論並及時調整治療方案，以確保治療療效。
                                </p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="text">
                                <p>放射治療俗稱「電療」或「照光」，和手術一樣都是殺死腫瘤的主要方法。雖然腸癌的治療以手術為主以放療為輔，但放射治療在治療上有它不可取代的治療角色。放射治療特別適合臨床上因為某些因素無法執行手術的狀況，或是單靠手術無法根除腫瘤的狀況。放療搭配手術的治療時機點可簡單分為手術前和手術後，手術前作為「前導性治療」能縮小腫瘤，幫助癌症分期下降或增加肛門保留機率；手術後則作為「輔助性治療」，能有效幫助降低癌症復發的風險。
                                    .</p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="text">
                                <p>腸癌的放射治療可再細分很多種，照射方式分為一般放射治療以及放射手術等，照射機器則包括一般的X光放射治療和粒子放射治療（如質子、重粒子治療），各有其特點與適用情況。一般的放射治療像是「機關槍」，每次放射劑量較輕，需要較長的療程才能壓制腫瘤，其精準度約為1-2公分，治療過程中會稍微影響周邊正常組織，所以設定為週一到週五每天治療，週末做休息，讓受損的正常組織得以修復。放射手術則是針對較小或特殊狀況的腫瘤，透過高端腫瘤定位技術將放射線的精準度提高到接近1公釐（mm）。在降低周邊正常細胞組織的傷害之下，如同手術刀，可以大幅提高劑量精準打在腫瘤的位置並降低周邊正常細胞組織的影響，也正因以普通放射線三到五倍的劑量施打，總療程能縮短在5-6次內完成並達成近似開刀的效果。照射機器來說質子或重粒子等粒子放射治療像是「深水炸彈」，放射線的能量在抵達腫瘤位置才會大量釋放，可大幅降低周邊正常組織的劑量。由於這樣的物理特性，粒子放射治療不管是運用於一般放射治療或是放射手術都有潛在於X光放射治療的好處。</p>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph">
                        <div class="section">
                            <img src="pic/page9/page9_imgGroup2_1.png" alt="">
                        </div>
                    </div>

                    <div class="paragraph">
                        <div class="section">
                            <div class="text">
                                <h4>北醫質子中心9月已正式啟用 放射治療精準再升級
                                </h4>
                                <p>放射治療是一種非侵入性的治療，然而若治療不夠精準恐會造成正常組織的傷害進而產生嚴重副作用。在腸癌的放射治療方面，由於腸道與其他器官較為不同，腸道蠕動可能造成腸子移位，造成治療定位上的困難，因此臨床上有時會透過治療當下的即時影像來幫助精準瞄準治療位置。
                                </p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="text">
                                <p>和一般的X光放射治療相比，質子治療能更精確地瞄準固態腫瘤，對正常細胞的傷害降到最低使副作用大幅減少。質子治療在放射線穿越路徑上只會釋放少許能量，等到達腫瘤時才釋放大量能量，其優點更加適合治療偏下段較不會移動的腸段，如直腸。台北醫學大學附設醫院放射腫瘤科李欣倫主任表示：「除了一般放射治療的適應症，若有無法開刀、直腸癌復發或寡轉移到肝臟者，都是適合評估質子治療的族群。」</p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="text">
                                <p>北醫質子治療中心已於今年9月啟用開始執行質子治療，是目前全台第三家質子中心，且是唯一一個設置在市中心的質子中心，大幅增進患者的就醫便利性。這幾年來質子治療機型持續優化，而北醫採用的質子機台效能則更進化，每次治療時間縮短到20分鐘左右，是過去質子治療所達不到的高治療效率。</p>
                            </div>
                        </div>
                    </div>


                    <div class="paragraph">
                        <div class="section">
                            <div class="text">
                                <h4>放射治療安全性高 日常飲食清淡為主
                                </h4>
                                <p>
                                    放射治療雖然台語俗稱「電療」，但並非用真的用電來治療。一般放射治療其實是用高能量的X光去照射腫瘤，約7到8成機率可破壞癌細胞，而且在治療過程中病人並不會感覺到不舒服。放射治療為非侵入性治療，可以免除麻醉和開刀的風險，並且可以分為多次治療，體力負擔較小，適合無法開刀或身體狀態不適合開刀的患者。
                                </p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="text">
                                <p>放射治療為局部治療，故副作用以照射區域為主，但部分病人也會出現像是疲勞、食欲不振等全身性的副作用。腸癌的放射治療以骨盆腔照射為主，可能出現的急性副作用包含腹瀉、頻尿、膀胱炎、會陰部皮膚反應等；長期的慢性副作用發生比例甚低，包含腸胃功能異常、腸胃道慢性發炎或出血。治療期間出現輕微副作用時可考慮觀察或開立症狀緩解藥物，並繼續放射治療。若副作用較為嚴重，則會考慮暫停放射治療並由醫師判斷是否需要住院做症狀治療。台北醫學大學附設醫院放射腫瘤科李欣倫主任表示：「以直腸癌的治療為例，直腸腫瘤被放射線殺死的過程當中周圍的器官會有發炎反應，若腸道發炎較嚴重，病人就會有拉肚子的狀況。另外由於直腸前方貼近的器官是膀胱，所以直腸的放射治療也有可能造成包含膀胱發炎、頻尿或排尿不舒服等副作用。」</p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="text">
                                <p>放射治療中的日常飲食應避免刺激性食物，並以煮熟乾淨衛生為主以降低腸胃發炎甚至感染的風險。治療中建議減少攝取會產氣的根莖類食物、避免喝酒、避免生食、水果盡量去皮、並避免過量肉、蛋、奶類等容易產生宿便的食物，也要確保食物乾淨衛生。
                                    病人接受放射線照射後，在體內並不會殘存任何含有放射線的危險物質，因此可以維持日常起居並安心與家人正常互動。另外，由於生殖系統位於骨盆腔的位置，腸癌的放射治療很難避免生殖系統受到放射線的傷害。過去研究顯示生殖系統只要接收到低劑量的放射線 （0.15葛雷）就可能造成生殖細胞減少，而當劑量累積到超過2葛雷（育齡女性）時就可能造成不孕4。此外，化學治療也可能造成生育能力受損。台北醫學大學附設醫院放射腫瘤科李欣倫主任提醒：「由於近年來癌症有年輕化的趨勢，對於位於育齡、45歲以下有生育需求的患者們，我們特別建議應該在放射及化學治療前先轉介至生殖醫學中心做生殖保存（oncofertility）的評估，如凍卵、凍精等安排，以避免癌症治療後無可挽回的不孕等後遺症。」</p>
                            </div>
                        </div>
                    </div>


                    <div class="paragraph">
                        <div class="section">
                            <h3>資料出處</h3>
                        </div>
                        <div class="section">
                            <ul>
                                <li> <a href="https://www.hpa.gov.tw/Pages/Detail.aspx?nodeid=269&pid=14913"> 衛生福利部國民健康署108年癌症登記報告</a></li>
                                <li> <a href="https://www.mohw.gov.tw/cp-16-70314-1.html"> 衛生福利部110年國人死因統計結果</a></li>
                                <li> <a href="https://www.nccn.org/guidelines/category_1"> NCCN guideline – Rectal Cancer 2022</a></li>
                                <li> <a href="#"> 洪世凱, 黃正仲（譯）（2013）。《分子輻射生物學》（原作者：Eric J. Hall‧Amato J. Giaccia）。藝軒圖書出版社。</a></li>
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

            <div class="hr hideHR"></div>
            <div class="LR">
                <div class="previous">
                    <a href="page8.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>手術治療</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page10.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>標靶治療</h4>
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