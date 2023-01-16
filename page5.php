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
    <title>基因測試</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">

    <style>
        .sourceSmall {
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            text-align: right;
            letter-spacing: 0.01em;
            color: #424452;
        }

        .paragraph ul li {
            font-weight: 400;
            font-size: 18px;
            line-height: 36px;
            /* or 200% */

            letter-spacing: 0.01em;

            /* Dark/03 */

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
        <h3>基因測試</h3>
    </div>
    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>2. 疾病診斷</h3>
            <h1>基因測試</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page5/page5_bigIcon.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small class="sourceSmall">受訪者：高雄長庚醫院 大腸直腸外科 陳鴻華教授
                        <br> 撰稿者：羅氏大藥廠 - Patient Journey Partner, Felicity Chen</small>
                </div>
                <div class="hr"></div>
                <div class="imgGroup1">
                    <img src="pic/page5/page5_imgGroup1_1.png">

                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>1. 都知道是大腸癌了，為什麼醫師還要我做基因檢測？</h2>
                            <p>大腸癌涉及多種基因的病變，研究顯示，對於個別癌症基因型別採取對應的治療方式，可能有更佳的治療效果。因此，現今的癌症治療邁向精準且個人化的設計，透過基因檢測，可以精準有效率的幫助醫師為病患制定更合適的治療方式與藥物的選擇。以第四期大腸癌常見的RAS基因為例，就有野生型與突變型兩種。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>2. 台灣常見的大腸癌基因型別有哪幾種？男女會有不同比例嗎？</h2>
                            <p>台灣與全球常見的基因型別，根據目前的數據顯示，並沒有顯著的差異。性別之間的差異性也不顯著。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>大腸癌相關的基因型別有很多，常見的基因型別以RAS及其衍生/突變型為主，其中RAS野生型約40%，突變型約45%，其餘尚有10-15%為BRAF、MSI與HER2等基因。
                            </p>
                            <img src="pic/page5/page5_imgGroup2_1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>3. 不同基因型別代表什麼意思？</h2>
                            <p>目前研究數據與臨床經驗都顯示，不同基因型別不只在藥物選擇上會受到影響，病患的治療效果與病程發展(醫學術語: 預後)也會不同。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>不同基因型別也對於大腸癌的整體病程發展有不同的影響，RAS野生型的預後表現較佳，其次為RAS突變型，再來為BRAF突變型。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>即使是預後表現沒這麼理想的BRAF突變型，除了透過手術切除，現在也有許多藥品的治療組合
                                可使用，病友積極接受治療，仍可爭取更長的存活期以及與家人相處的時間。透過基因型別的確認，不只可以協助醫師制定更精準的治療，也提供治療時機與效果預測的資訊，提供病友與醫師治療進程的參考。
                            </p>
                            <img src="pic/page5/page5_imgGroup3_1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>4. 哪些基因型跟遺傳有關？是否要請家人及早檢測、及早預防癌症？</h2>
                            <p>由於大腸癌具有家族遺傳特性，民眾可從家族病史中觀察到警訊。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>目前已知有兩個極高機率會演變為大腸癌的病症，都屬於顯性基因遺傳，家族中若有人經診斷下列其中之一病症，應提高警覺、及早透過內視鏡檢查做預防。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>家族性結直腸瘜肉綜合症(Familial Adenomatous Polyposis, FAP)
                                <br>(2) 遺傳性非瘜肉結直腸癌綜合症(Hereditary Nonpolyposis Colorectal Cancer HNPCC,
                                or Lynch Syndrome)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h3>(1) 家族性結直腸瘜肉綜合症 (Familial Adenomatous Polyposis, FAP)</h3>
                            <p>顯性基因遺傳，父母一方有，子女就有50%的機率會得到，而且從青少年時期就會開始發生。這類患者腸道內會出現數以百計的瘜肉，50歲前若未接受預防性介入，未來有100%的癌化機率，因此建議有此家族史的民眾，國中開始就應做內視鏡，必要時需做預防性切除。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h3>(2) 遺傳性非瘜肉結直腸癌綜合症 (Hereditary Nonpolyposis Colorectal Cancer HNPCC, or Lynch Syndrome)
                            </h3>
                            <p>顯性基因遺傳，雖然息肉不多，但有70-80%的機率可能演變為大腸癌，而且此類病患也有較高的機率在年輕時發生其他癌病變。若兩代中有3個人得到大腸直腸癌(如:
                                爸爸、叔叔、本人，且其中一位小於50歲)，家族下一代子女更應高度警覺。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>5. 基因檢測有健保給付嗎？為什麼還有自費的基因檢測？自費檢測跟健保檢測差異在哪裡呢？</h2>
                            <p>台灣目前針對大腸癌有健保給付RAS的基因檢測。其他型別尚未納入健保給付。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>然而與大腸癌相關的基因型與狀態眾多，例如有BRAF基因、基因微衛星不穩定（MSI, microsatellite
                                instability)等，不同的基因型別亦對應不同的治療選擇與治療效果，因此，若民眾希望醫師可以量身訂製更精準地治療方案，則可考慮自費進行全面性的基因檢測，幫助醫師掌握疾病狀態，提供精準的治療計畫。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>6. 基因檢測怎麼測？只能透過大腸鏡切組織檢體嗎？</h2>
                            <p>除了透過內視鏡取得大腸的組織檢體做基因檢測，現在也可透過抽血取得血液中游離的組織碎片，以液態活體檢測 (Liquid Biopsy) 的方式來進行基因檢測。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <p>液態活體檢測的優點，除了減少侵入性，更有利於監測治療期間病兆處的基因變化，讓醫師可以即時掌握病況，制定治療策略，達到更高效精準的治療目標。
                            </p>
                            <img src="pic/page5/page5_imgGroup4_1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="section">
                        <div class="text">
                            <h2>參考資料</h2>
                            <ul>
                                <li>Gut Liver. 2010 Jun;4(2):151-60. doi: 10.5009/gnl.2010.4.2.151.Epub 2010 Jun 16.
                                </li>
                                <li>Biomark Med. 2017 Sep;11(9):751-760. doi: 10.2217/bmm-2016-0358.Epub 2017 Jul 27.
                                </li>
                                <li>Familial Adenomatous Polyposis [Stephanie
                                    Carr](https://pubmed.ncbi.nlm.nih.gov/?term=Carr+S&cauthor_id=30855821)
                                    [1](https://pubmed.ncbi.nlm.nih.gov/30855821/#affiliation-1), [Anup
                                    Kasi](https://pubmed.ncbi.nlm.nih.gov/?term=Kasi+A&cauthor_id=30855821)
                                    [2](https://pubmed.ncbi.nlm.nih.gov/30855821/#affiliation-2) In: StatPearls
                                    [Internet]. Treasure Island (FL): StatPearls
                                    Publishing; 2022 Jan. 2022 May 15.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="other">
                    <small>M-TW-00002116 <br> 「本文章由羅氏大藥廠與醫護人員共同協作而成」</small>
                </div>

            </div>



            <div class="fans">
                <a href="#"><img src="pic/Common/line.svg" alt=""></a>

                <a href="#"><img src="pic/Common/facebook.svg" alt=""></a>
            </div>

            <div class="hr"></div>
            <div class="LR">
                <div class="previous">
                    <a href="page4.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>影像學</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page6.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>癌症分期</h4>
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