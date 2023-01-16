<?php
include 'db/db.php';
$sqlL = "SELECT * FROM `article`  Where `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
$resL = $db->query($sqlL);
$resL->setFetchMode(PDO::FETCH_ASSOC);


$sqlQR = "SELECT * FROM `QA` Where `publish` = 1 ORDER BY id DESC ";

$resQR = $db->query($sqlQR);
$resQR->setFetchMode(PDO::FETCH_ASSOC);

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
    <title>Bowel Cancer News</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/articleIndex.css">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<style>
    .overflowText {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 0;
        max-width: 100%;
        min-height: 200px;

    }

    .QABtn {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        letter-spacing: 0.01em;
        color: #77A3E7;
        text-decoration: none;
        border: none;
        background: none;
        text-decoration-line: underline;
    }

    .menum {
        height: 100%;
    }

    .articleUl a {
        font-size: 16px !important;
        overflow: hidden;
        display: -webkit-box;
        text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        /*行數*/
        -webkit-box-orient: vertical;
        white-space: normal;
    }

    .articleUl h1,
    .QAUl h1 {
        font-size: 16px;
    }

    .QAUl a {
        font-size: 16px !important;
        overflow: hidden;
        display: -webkit-box;
        text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        /*行數*/
        -webkit-box-orient: vertical;
        white-space: normal;
    }

    #QA {
        z-index: 99999;
    }

    .cardGroup .card .articleTitle {
        font-weight: 600;
        font-size: 24px;
        line-height: 28px;
        letter-spacing: 0.01em;
        margin-top: 1rem;
        /* Dark/03 */

        overflow: hidden;
        display: -webkit-box;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        /*行數*/
        -webkit-box-orient: vertical;

        color: #424452;
    }

    .cardGroup .card .articleContent {
        overflow: hidden;
        display: -webkit-box;
        text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        /*行數*/
        -webkit-box-orient: vertical;

        margin-top: 1rem;
        line-height: 0;
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 36px;
        /* or 200% */

        letter-spacing: 0.01em;

        /* Dark/04 */

        color: #898B91;
    }

    .cardGroup .card:hover {
        cursor: pointer;
    }

    .cardGroup .errorImg {
        height: 45%;
    }
</style>



<body>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
    <script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

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

    <div class="commonCardSmall loginSmall"></div>
    <div class="commonCardSmall registerSmall"></div>
    <div class="commonCardSmall openPassSmall"></div>
    <div class="commonCardSmall registerCompletedSmall"></div>
    <div class="commonCardSmall forgetPasswordSmall"></div>
    <div class="menu1"></div>

    <div class="title">
        <div class="bigIcon">
            <img src="pic/articleIndex/bigIcon.png" alt="">
        </div>
        <div class="bigIconHide">
            <img src="pic/articleIndex/bigIcon.png" alt="">
        </div>

        <div class="option">
            <h1>腸癌新知</h1>
            <h5>有問題嗎 ?讓我們為你解答</h5>
            <div class="inputTextGroup">
                <img src="pic/Common/search.svg" alt="">
                <input type="text" placeholder="請輸入關鍵字">
                <div class="searchBox">
                    <div class="article">
                        <h3>最新消息</h3>
                        <ul class="articleUl">
                        </ul>
                    </div>
                    <div class="QA">
                        <h3>常見問答</h3>
                        <ul class="QAUl">
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="contentWrap">
        <div class="news">
            <div class="newsTitle">
                <div class="newsTitleLeft">
                    <img src="pic/Common/news.png" alt="">
                    <h4>最新消息</h4>
                </div>
                <div class="newsTitleRight">
                    <div class="newsTitleRight">
                        <input type="button" value="看全部">
                    </div>
                </div>



            </div>

            <div class="cardRwd">
                <div class="cardGroup">
                    <?php
                    foreach ($resL as $article) {
                        echo '
                        <div class="card" data-id = "' . $article['id'] . '">
                                    <img class="errorImg" src="' . $article['articlePath'] . '" alt="">
                                    <div class="text">
                                        <div class="tag">' . $article['topicSec'] . '</div>
                                        <div class= "articleTitle">' . $article['title'] . '</div>
                                        <div class= "articleContent">' . $article['content'] . '</div>
                                    </div>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>

            <div class="recommend">
                <div class="recommendTitle">
                    <img src="pic/Common/tags.png" alt="">
                    <h4>推薦標籤</h4>
                </div>
                <div class="cardGroup">
                    <a href="recommendArticle1.php?topicSec=腸癌治療">
                        <div class="card">
                            <img src="pic/articleIndex/iconTag1.png" alt="">
                            <h5>腸癌治療</h5>
                        </div>
                    </a>
                    <a href="recommendArticle2.php?topicSec=腸癌照護">
                        <div class="card">
                            <img src="pic/articleIndex/iconTag2.png" alt="">
                            <h5>腸癌照護</h5>
                        </div>
                    </a>
                    <a href="recommendArticle3.php?topicSec=癌症分期">
                        <div class="card">
                            <img src="pic/articleIndex/iconTag3.png" alt="">
                            <h5>癌症分期</h5>
                        </div>
                    </a>
                    <a href="recommendArticle4.php?topicSec=副作用">
                        <div class="card">
                            <img src="pic/articleIndex/iconTag4.png" alt="">
                            <h5>副作用</h5>
                        </div>
                    </a>
                    <a href="recommendArticle5.php?topicSec=生活品質">
                        <div class="card">
                            <img src="pic/articleIndex/iconTag5.png" alt="">
                            <h5>生活品質</h5>
                        </div>
                    </a>
                    <a href="recommendArticle6.php?topicSec=營養健康">
                        <div class="card">
                            <img src="pic/articleIndex/iconTag6.png" alt="">
                            <h5>營養健康</h5>
                        </div>
                    </a>


                </div>
            </div>
            <div class="question">
                <div class="questionTitle">
                    <img src="pic/Common/question.png" alt="">
                    <h4 id="commonQuestionTitle">常見問答</h4>
                </div>
                <div class="tags">
                    <div class="tag">全部類別</div>
                    <div class="tag">腸癌治療</div>
                    <div class="tag">腸癌照護</div>
                    <div class="tag">癌症分期</div>
                    <div class="tag">副作用</div>
                    <div class="tag">生活品質</div>
                    <div class="tag">營養健康</div>
                </div>
                <div class="tagsRWD">
                    <div class="box">
                        <h4>全部類別</h4>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>
                    <ul>
                        <li>全部類別</li>
                        <li>腸癌治療</li>
                        <li>腸癌照護</li>
                        <li>癌症分期</li>
                        <li>副作用</li>
                        <li>生活品質</li>
                        <li>營養健康</li>
                    </ul>

                </div>

                <div class="questionList">
                    <?php
                    foreach ($resQR as $QA) {
                        echo ' <div class="q" >
                                <div class="title">
                                    <img src="pic/Common/plus.svg">
                                    <h4>' . $QA['title'] . '</h4>
                                </div>
                                <div class="text">
                                    <div class="overflowText">' . $QA['content'] . '</div>' .

                            ' </div>
                            </div>';
                    }
                    ?>



                </div>
                <div class="pagination">
                    <div class="numberGroup">

                    </div>
                    <div class="next">
                        <img src="pic/Common/next.svg" alt="">
                    </div>
                </div>
            </div>

        </div>





        <div class="modal fade" id="QA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer"></div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
<script src="js/common.js"></script>

<script>
    let card = document.querySelectorAll(".cardGroup .card");

    if (card) {
        card.forEach(function (element) {
            element.addEventListener("click", function (e) {
                window.location.href = "ArticleCommon.php?i=" + element.dataset.id;
            }, false)
        })
    }


    //圖片錯誤
    let errorImg = document.querySelectorAll(".errorImg")
    errorImg.forEach(function (element) {
        element.addEventListener("error", function (e) {
            element.src = "pic/Common/R/r2.png"
        }, false)
    })
    //問答區跳轉
    var getUrlString = location.href;
    var uurl = new URL(getUrlString);

    if (uurl.searchParams.get('question')) {

        $('html,body').animate({
            scrollTop: $("#commonQuestionTitle").offset().top
        }, {
            duration: 500,
            easing: 'swing'
        });
    }
    //看全部
    let newsBtn = document.querySelector(".newsTitleRight input")
    if (newsBtn) {
        newsBtn.addEventListener("click", function (e) {
            window.location.href = "recommendArticle0.php";
        }, false)
    }


    //
    let questionList = document.querySelector(".questionList")
    let q = document.querySelectorAll(".q");
    let paginationNum = Math.ceil(q.length / 10);
    let paginationNumStr = "";
    let numberGroup = document.querySelector(".numberGroup");
    //製造分頁
    for (let i = 1; i <= paginationNum; i++) {
        paginationNumStr += `<div class="number"><h5>${i}</h5></div>`
    }
    numberGroup.innerHTML = paginationNumStr;

    //新增問答上去
    let numberBtn = document.querySelectorAll(".numberGroup .number")

    numberBtn.forEach(function (element, index) {
        //分頁Active
        element.addEventListener("click", function (e) {
            e.preventDefault();
            numberBtn.forEach(function (element) {
                element.classList.remove("numberActive")
            });
            element.classList.add("numberActive")


            let QStr = "";
            for (let i = index; i < index + 10; i++) {
                let n = i + index * 9
                if (q[n]) {
                    QStr += `${q[n].outerHTML}`
                }
            }
            questionList.innerHTML = QStr

            //新增問答上去

            //這邊也要取消點擊title的特效
            let qTitle = document.querySelectorAll(".q .title");
            qTitle.forEach(function (element) {
                element.addEventListener("click", function (e) {
                    if (element.parentNode.classList.contains("qActive")) {

                        element.parentNode.classList.remove("qActive");
                        element.parentNode.children[1].style = "display:none"
                        element.parentNode.children[0].children[0].src = "pic/Common/plus.svg"
                    } else {
                        element.parentNode.classList.add("qActive");
                        element.parentNode.children[1].style = "display:block"
                        element.parentNode.children[0].children[0].src = "pic/Common/minus.svg"
                    }
                }, false)

            })

            //q點擊展開

        }, false)
    })

    numberBtn[0].click();



    //tag區

    let tagsRWDBox = document.querySelector(".tagsRWD .box")
    let tagsRWDUL = document.querySelector(".tagsRWD ul");
    if (tagsRWDBox) {
        tagsRWDBox.addEventListener("click", function (e) {
            if (tagsRWDUL.style.display == "block") {
                tagsRWDUL.style = "display:none";
            } else {
                tagsRWDUL.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;";
            }
        }, false)
    }

    //選單切換
    let tagsRWDLi = document.querySelectorAll(".tagsRWD ul li")
    tagsRWDLi.forEach(function (element) {
        element.addEventListener("click", function (e) {
            $(document).ready(function () {
                e.preventDefault()
                $.ajax({
                    type: "Post",
                    url: "system/ArticleIndexTypeSupport.php",
                    data: {
                        topicSec: element.textContent
                    },
                    success: function (response) {
                        tagsRWDUL.style = "display:none"
                        console.log(response);
                        tag.forEach(function (element2) {
                            element2.classList.remove("tagActive")
                        })
                        element.classList.add("tagActive")
                        //
                        let questionList = document.querySelector(".questionList")
                        questionList.innerHTML = response;
                        if (response == "") {
                            questionList.innerHTML = response;
                            return
                        }
                        let q = document.querySelectorAll(".q");
                        let paginationNum = Math.ceil(q.length / 10);
                        let paginationNumStr = "";
                        let numberGroup = document.querySelector(".numberGroup");
                        //製造分頁
                        for (let i = 1; i <= paginationNum; i++) {
                            paginationNumStr += `<div class="number"><h5>${i}</h5></div>`
                        }
                        numberGroup.innerHTML = paginationNumStr;

                        //新增問答上去
                        let numberBtn = document.querySelectorAll(".numberGroup .number")

                        numberBtn.forEach(function (element, index) {
                            //分頁Active
                            element.addEventListener("click", function (e) {
                                e.preventDefault();
                                numberBtn.forEach(function (element) {
                                    element.classList.remove("numberActive")
                                });
                                element.classList.add("numberActive")


                                let QStr = "";
                                for (let i = index; i < index + 10; i++) {
                                    let n = i + index * 9
                                    if (q[n]) {
                                        QStr += `${q[n].outerHTML}`
                                    }
                                }
                                questionList.innerHTML = QStr

                                //js控制問答消失

                                //新增問答上去

                                //這邊也要取消點擊title的特效
                                let qTitle = document.querySelectorAll(".q .title");
                                qTitle.forEach(function (element) {
                                    element.addEventListener("click", function (e) {
                                        if (element.parentNode.classList.contains("qActive")) {

                                            element.parentNode.classList.remove("qActive");
                                            element.parentNode.children[1].style = "display:none"
                                            element.parentNode.children[0].children[0].src = "pic/Common/plus.svg"
                                        } else {
                                            element.parentNode.classList.add("qActive");
                                            element.parentNode.children[1].style = "display:block"
                                            element.parentNode.children[0].children[0].src = "pic/Common/minus.svg"
                                        }
                                    }, false)

                                })



                                //q點擊展開



                            }, false)
                        })

                        numberBtn[0].click();
                    },
                    error: function (err) {
                        console.log(err);
                    },
                });
            });
        }, false)
    })

    //抓類別
    let tag = document.querySelectorAll(".tags .tag");
    tag.forEach(function (element) {
        element.addEventListener("click", function (e) {
            $(document).ready(function () {
                e.preventDefault()
                $.ajax({
                    type: "Post",
                    url: "system/ArticleIndexTypeSupport.php",
                    data: {
                        topicSec: element.textContent
                    },
                    success: function (response) {
                        console.log(response);
                        tag.forEach(function (element2) {
                            element2.classList.remove("tagActive")
                        })
                        element.classList.add("tagActive")
                        //
                        let questionList = document.querySelector(".questionList")
                        questionList.innerHTML = response;
                        if (response == "") {
                            questionList.innerHTML = response;
                            return
                        }
                        let q = document.querySelectorAll(".q");
                        let paginationNum = Math.ceil(q.length / 10);
                        let paginationNumStr = "";
                        let numberGroup = document.querySelector(".numberGroup");
                        //製造分頁
                        for (let i = 1; i <= paginationNum; i++) {
                            paginationNumStr += `<div class="number"><h5>${i}</h5></div>`
                        }
                        numberGroup.innerHTML = paginationNumStr;

                        //新增問答上去
                        let numberBtn = document.querySelectorAll(".numberGroup .number")

                        numberBtn.forEach(function (element, index) {
                            //分頁Active
                            element.addEventListener("click", function (e) {
                                e.preventDefault();
                                numberBtn.forEach(function (element) {
                                    element.classList.remove("numberActive")
                                });
                                element.classList.add("numberActive")


                                let QStr = "";
                                for (let i = index; i < index + 10; i++) {
                                    let n = i + index * 9
                                    if (q[n]) {
                                        QStr += `${q[n].outerHTML}`
                                    }
                                }
                                questionList.innerHTML = QStr

                                //js控制問答消失

                                //新增問答上去

                                //這邊也要取消點擊title的特效
                                let qTitle = document.querySelectorAll(".q .title");
                                qTitle.forEach(function (element) {
                                    element.addEventListener("click", function (e) {
                                        if (element.parentNode.classList.contains("qActive")) {

                                            element.parentNode.classList.remove("qActive");
                                            element.parentNode.children[1].style = "display:none"
                                            element.parentNode.children[0].children[0].src = "pic/Common/plus.svg"
                                        } else {
                                            element.parentNode.classList.add("qActive");
                                            element.parentNode.children[1].style = "display:block"
                                            element.parentNode.children[0].children[0].src = "pic/Common/minus.svg"
                                        }
                                    }, false)

                                })

                                //q點擊展開



                            }, false)
                        })

                        numberBtn[0].click();
                    },
                    error: function (err) {
                        console.log(err);
                    },
                });
            });
        }, false)
    })



    //字數限制
    let articleContent = document.querySelectorAll(".cardGroup .articleContent")
    articleContent.forEach(function (element) {

        if (element.textContent.length > 50) {
            element.textContent = element.textContent.substr(0, 50) + "..."

        }

    }, false)


    let searchStr = "";
    $(document).ready(function () {
        $(".option .inputTextGroup input").keyup(function (e) {
            let value = $(this).val().trim();
            console.log(value);
            if (value != "") {
                $(".searchBox").show();
                document.querySelector(".cardRwd").style = "z-index:-1"
            } else {
                $(".searchBox").hide();
                document.querySelector(".cardRwd").style = "z-index:1"
            }

            $.ajax({
                type: "POST",
                url: "system/ArticleIndexSearch.php",
                data: {
                    "str": value
                },
                success: function (response) {
                    let arrayRes = response.split(',')
                    let arrayStr = "";
                    for (let i = 0; i < arrayRes.length - 1; i++) {
                        arrayStr += arrayRes[i]
                    }
                    let articleUl = document.querySelector(".searchBox .articleUl");
                    if (articleUl) {
                        articleUl.innerHTML = arrayStr
                    }
                    console.log(arrayStr);
                }
            });


            //QA
            $.ajax({
                type: "POST",
                url: "system/ArticleIndexSearchQA.php",
                data: {
                    "strQA": value
                },
                success: function (response) {
                    let arrayRes = response.split(',')
                    let arrayStr = "";
                    for (let i = 0; i < arrayRes.length - 1; i++) {
                        arrayStr += arrayRes[i]
                    }
                    let QAUl = document.querySelector(".searchBox .QAUl");
                    if (QAUl) {
                        QAUl.innerHTML = arrayStr
                    }
                    let searchQA = document.querySelectorAll(".QAUl li a");
                    searchQA.forEach(function (element) {
                        element.addEventListener("click", function (e) {
                            console.log(element.dataset.target);
                            // e.preventDefault();
                            let QATitle = document.querySelector("#QA .modal-title")
                            let QAContent = document.querySelector("#QA .modal-body")
                            // let QABtn = document.querySelectorAll(".QABtn")
                            console.log(this.dataset.title);
                            console.log(this.dataset.content);
                            QATitle.textContent = this.dataset.title
                            QAContent.innerHTML = this.dataset.content
                        }, false)
                    })
                }
            });
        })
    });

</script>

</html>