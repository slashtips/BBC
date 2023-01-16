<?php
include 'db/db.php';
$sqlL = "SELECT * FROM `meeting`  Where `publish` = 1 ORDER BY id DESC ";
$resL = $db->query($sqlL);
$resL->setFetchMode(PDO::FETCH_ASSOC);

$sqlC = "SELECT COUNT(id) as `total` FROM `meeting` WHERE`publish` = 1;";
$resC = mysqli_query($connect, $sqlC);
$rowC = mysqli_fetch_array($resC);
$total = "";
foreach ($resC as $rowC) {
    $total = $rowC['total'];
}

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
    <title>會議活動</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/news.css">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

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


    <div class="titleRWD">
        <a href="MedicalArea.php"><img src="pic/Common/backWhite.png" alt=""></a>
        <h5>個管師專區</h5>
    </div>

    <div class="meetingSmallCard meetingSmallCardSearch">
        <div class="title">
            <h3>搜尋</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="inputTextGroup">
            <img src="pic/Common/search.svg" alt="">
            <input type="text" placeholder="請輸入關鍵字">
            <div class="searchBox">
                <div class="article">
                    <h3>會議活動</h3>
                    <ul class="articleUl">
                    </ul>
                </div>
                <!-- <div class="QA">
                    <h3>常見問答</h3>
                    <ul class="QAUl">
                    </ul>
                </div> -->
            </div>
        </div>
    </div>

    <div class="meetingSmallCard meetingSmallCardActiveStatus">
        <div class="title">
            <h3>活動狀態</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="timeOrder">
            <label for="">活動排序</label>
            <div class="select">
                <div class="box">活動時間近到遠
                    <img src="pic/Common/arrowDown.png" alt="">
                </div>
                <ul>
                    <li>活動時間近到遠</li>
                    <li>活動時間遠到近</li>
                </ul>
            </div>
        </div>
        <div class="activeStatus">
            <label for="">活動狀態</label>
            <div class="select">
                <div class="box">
                    進行中
                    <!-- <div class="number">+1</div> -->
                    <img src="pic/Common/arrowDown.png" alt="">
                </div>
                <ul>
                    <li><input type="checkbox" id="meetingStatus1S" class="meetingStatus" value="進行中"><label
                            for="meetingStatus1S">進行中</label>
                    </li>
                    <li><input type="checkbox" id="meetingStatus2S" class="meetingStatus" value="即將到來"><label
                            for="meetingStatus2S">即將到來</label></li>
                    <li><input type="checkbox" id="meetingStatus3S" class="meetingStatus" value="已結束"><label
                            for="meetingStatus3S">已結束</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="menu1"></div>
    <div class="loginH"></div>
    <div class="wrap MeetingM">
        <div class="top">
            <div class="left">
                <img src="pic/Common/back.svg" alt="">
            </div>
            <div class="right">
                <div class="inputTextGroup">
                    <img src="pic/Common/search.svg" alt="">
                    <input type="text" placeholder="請輸入關鍵字">
                    <div class="searchBox">
                        <div class="article">
                            <h3>會議活動</h3>
                            <ul class="articleUl">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <h1>會議活動</h1>
            <div class="titleRight">
                <div class="timeOrder">
                    <label for="">活動排序</label>
                    <div class="select">
                        <div class="box">活動時間近到遠
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>
                        <ul>
                            <li>活動時間近到遠</li>
                            <li>活動時間遠到近</li>

                        </ul>
                    </div>
                </div>
                <div class="activeStatus">
                    <label for="">活動狀態</label>
                    <div class="select">
                        <div class="box">
                            進行中
                            <!-- <div class="number">+1</div> -->
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>
                        <ul>
                            <li><input type="checkbox" id="meetingStatus1" class="meetingStatus" value="進行中"><label
                                    for="meetingStatus1">進行中</label></li>
                            <li><input type="checkbox" id="meetingStatus2" class="meetingStatus" value="即將到來"><label
                                    for="meetingStatus2">即將到來</label></li>
                            <li><input type="checkbox" id="meetingStatus3" class="meetingStatus" value="已結束"><label
                                    for="meetingStatus3">已結束</label></li>
                        </ul>
                    </div>
                </div>
                <div class="RWDIcon">
                    <img src="pic/Common/uu.png" alt="">
                </div>
            </div>
        </div>

        <div class="dataTitle">

            <h5 style="margin-left: auto;">共<?php echo $total ?>場</h5>
        </div>

        <div class="cardGroup">
            <?php
            foreach ($resL as $meeting) {
                echo '
                <div class="row">
                    <div class="card" data-id = "' . $meeting['id'] . '">
                        <img class="errorImg" src = "' . $meeting['imgPath'] . '"  alt="">
                        <div class="textWrap">
                            <div class="cardTitle">
                                <div class="tag">' . $meeting['tag'] . '</div>
                                <small>' . $meeting['date'] . '</small>
                            </div>
                            <h5>會議地點 :' . $meeting['location'] . '</h5>
  
                            <div class="content">' . $meeting['content'] . '</div>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>

        </div>

        <div class="pagination"></div>
    </div>
    <div class="footer"></div>
</body>
<script src="js/common.js"></script>
<script>


    //圖片錯誤
    let errorImg = document.querySelectorAll(".errorImg")
    errorImg.forEach(function (element) {
        element.addEventListener("error", function (e) {
            element.src = "pic/Common/R/r3.png"
        }, false)
    })

    //即將到來
    let CardTag = document.querySelectorAll(".card .tag")
    if (CardTag) {
        CardTag.forEach(function (element) {
            if (element.textContent == "即將到來") {
                element.classList.add("tagComing")
            }
        })
    }

    //活動排序
    let timeOrderBox = document.querySelector(".titleRight .timeOrder .box");
    timeOrderBox.addEventListener("click", function (e) {
        if (timeOrderBox.parentNode.children[1].style.display == "block") {
            timeOrderBox.parentNode.children[1].style = "display:none"
        } else {
            timeOrderBox.parentNode.children[1].style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        }
    }, false)

    let timeOrderSelectUL = document.querySelector(".titleRight .timeOrder .select ul");

    //近到遠
    timeOrderSelectUL.children[0].addEventListener("click", function (e) {
        let methodN = 0;
        $.ajax({
            type: "POST",
            url: "system/meetingSupport.php",
            data: {
                "methodN": methodN,

            },
            success: function (response) {
                console.log(response);
                document.querySelector(".cardGroup").innerHTML = response
                //圖片錯誤
                let errorImg = document.querySelectorAll(".errorImg")
                errorImg.forEach(function (element) {
                    element.addEventListener("error", function (e) {
                        element.src = "pic/Common/R/r3.png"
                    }, false)
                })
                //卡片
                let card = document.querySelectorAll(".cardGroup .card");
                if (card) {
                    card.forEach(function (element) {
                        element.addEventListener("click", function (e) {
                            window.location.href = "meetingCommon.php?i=" + element.dataset.id;
                        }, false)
                    })
                }
                //tag變色
                //即將到來
                let CardTag = document.querySelectorAll(".card .tag")
                if (CardTag) {
                    CardTag.forEach(function (element) {
                        if (element.textContent == "即將到來") {
                            element.classList.add("tagComing")
                        }
                    })
                }
            }
        });
    }, false)

    //遠到近
    timeOrderSelectUL.children[1].addEventListener("click", function (e) {
        let methodN = 1;
        $.ajax({
            type: "POST",
            url: "system/meetingSupport.php",
            data: {
                "methodN": methodN,

            },
            success: function (response) {
                console.log(response);
                document.querySelector(".cardGroup").innerHTML = response
                //圖片錯誤
                let errorImg = document.querySelectorAll(".errorImg")
                errorImg.forEach(function (element) {
                    element.addEventListener("error", function (e) {
                        element.src = "pic/Common/R/r3.png"
                    }, false)
                })

                //卡片
                let card = document.querySelectorAll(".cardGroup .card");
                if (card) {
                    card.forEach(function (element) {
                        element.addEventListener("click", function (e) {
                            window.location.href = "meetingCommon.php?i=" + element.dataset.id;
                        }, false)
                    })
                }
                //tag變色
                //即將到來
                let CardTag = document.querySelectorAll(".card .tag")
                if (CardTag) {
                    CardTag.forEach(function (element) {
                        if (element.textContent == "即將到來") {
                            element.classList.add("tagComing")
                        }
                    })
                }
            }
        });
    }, false)

    //活動狀態
    let activeStatusBox = document.querySelector(".titleRight .activeStatus .box");
    activeStatusBox.addEventListener("click", function (e) {
        if (activeStatusBox.parentNode.children[1].style.display == "block") {
            activeStatusBox.parentNode.children[1].style = "display:none"
        } else {
            activeStatusBox.parentNode.children[1].style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        }
    }, false)


    let activeStatusSelectUlInput = document.querySelectorAll(".MeetingM .activeStatus .select ul input");

    //預測勾選
    activeStatusSelectUlInput.forEach(function (element) {
        element.checked = true;
    }, false)
    let SelectNumber = [];

    activeStatusSelectUlInput.forEach(function (element) {

        element.addEventListener("change", function (e) {


            SelectNumber = []
            for (let i = 0; i < activeStatusSelectUlInput.length; i++) {
                if (activeStatusSelectUlInput[i].checked == true) {
                    SelectNumber.push(activeStatusSelectUlInput[i].value)
                }
            }
            console.log(SelectNumber);

            let methodN = 2;
            $.ajax({
                type: "POST",
                url: "system/meetingSupport.php",
                data: {
                    "methodN": methodN,
                    "SelectNumber": SelectNumber
                },
                success: function (response) {
                    console.log(response);
                    document.querySelector(".cardGroup").innerHTML = response
                    //圖片錯誤
                    let errorImg = document.querySelectorAll(".errorImg")
                    errorImg.forEach(function (element) {
                        element.addEventListener("error", function (e) {
                            element.src = "pic/Common/R/r3.png"
                        }, false)
                    })

                    //數字
                    let dataTitleText = document.querySelector(".dataTitle h5");
                    //卡片
                    let card = document.querySelectorAll(".cardGroup .card");
                    if (dataTitleText) {
                        dataTitleText.textContent = `共${card.length}場`
                    }
                    if (card) {
                        card.forEach(function (element) {
                            element.addEventListener("click", function (e) {
                                window.location.href = "meetingCommon.php?i=" + element.dataset.id;
                            }, false)
                        })
                    }
                    //tag變色
                    //即將到來
                    let CardTag = document.querySelectorAll(".card .tag")
                    if (CardTag) {
                        CardTag.forEach(function (element) {
                            if (element.textContent == "即將到來") {
                                element.classList.add("tagComing")
                            }
                        })
                    }
                }
            });


        }, false)

    }, false)





    let card = document.querySelectorAll(".cardGroup .card");
    if (card) {
        card.forEach(function (element) {
            element.addEventListener("click", function (e) {
                window.location.href = "meetingCommon.php?i=" + element.dataset.id;
            }, false)
        })
    }

    //搜尋
    let searchStr = "";
    $(document).ready(function () {
        $(" .inputTextGroup input").keyup(function (e) {
            let value = $(this).val().trim();
            console.log(value);
            if (value != "") {
                $(".searchBox").show();
            } else {
                $(".searchBox").hide();
            }

            $.ajax({
                type: "POST",
                url: "system/meetingSearch.php",
                data: {
                    "str": value
                },
                success: function (response) {
                    let arrayRes = response.split(',')
                    let arrayStr = "";
                    for (let i = 0; i < arrayRes.length - 1; i++) {
                        arrayStr += arrayRes[i]
                    }
                    let articleUl = document.querySelectorAll(".searchBox .articleUl");
                    articleUl.forEach(function (element) {
                        element.innerHTML = arrayStr
                    }, false)

                    console.log(arrayStr);
                }
            });

        })
    });

    //手機
    //活動排序打開
    let selectBoxS = document.querySelector(".meetingSmallCard .select .box")
    let activeStatusBoxS = document.querySelector(".meetingSmallCard .activeStatus .select .box")
    if (selectBoxS) {
        selectBoxS.addEventListener("click", function (e) {
            if (this.parentNode.children[1].style.display == "block") {
                this.parentNode.children[1].style = "display:none"
            } else {
                this.parentNode.children[1].style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            }

        }, false)
    }

    let timeOrderSelectULS = document.querySelector(".meetingSmallCard .timeOrder .select ul")
    //近到遠
    if (timeOrderSelectULS) {
        timeOrderSelectULS.children[0].addEventListener("click", function (e) {
            let methodN = 0;
            $.ajax({
                type: "POST",
                url: "system/meetingSupport.php",
                data: {
                    "methodN": methodN,

                },
                success: function (response) {
                    console.log(response);
                    document.querySelector(".cardGroup").innerHTML = response
                    //圖片錯誤
                    let errorImg = document.querySelectorAll(".errorImg")
                    errorImg.forEach(function (element) {
                        element.addEventListener("error", function (e) {
                            element.src = "pic/Common/R/r3.png"
                        }, false)
                    })
                    //卡片
                    let card = document.querySelectorAll(".cardGroup .card");
                    if (card) {
                        card.forEach(function (element) {
                            element.addEventListener("click", function (e) {
                                window.location.href = "meetingCommon.php?i=" + element.dataset.id;
                            }, false)
                        })
                    }
                    //tag變色
                    //即將到來
                    let CardTag = document.querySelectorAll(".card .tag")
                    if (CardTag) {
                        CardTag.forEach(function (element) {
                            if (element.textContent == "即將到來") {
                                element.classList.add("tagComing")
                            }
                        })
                    }
                    document.querySelector(".meetingSmallCardActiveStatus").style = "display:none";
                    cover.style = "display:none";
                    selectBoxS.parentNode.children[1].style = "display:none"
                }
            });
        }, false)
    }
    //遠到近
    if (timeOrderSelectULS) {
        timeOrderSelectULS.children[1].addEventListener("click", function (e) {
            let methodN = 1;
            $.ajax({
                type: "POST",
                url: "system/meetingSupport.php",
                data: {
                    "methodN": methodN,

                },
                success: function (response) {
                    console.log(response);
                    document.querySelector(".cardGroup").innerHTML = response
                    //圖片錯誤
                    let errorImg = document.querySelectorAll(".errorImg")
                    errorImg.forEach(function (element) {
                        element.addEventListener("error", function (e) {
                            element.src = "pic/Common/R/r3.png"
                        }, false)
                    })

                    //卡片
                    let card = document.querySelectorAll(".cardGroup .card");
                    if (card) {
                        card.forEach(function (element) {
                            element.addEventListener("click", function (e) {
                                window.location.href = "meetingCommon.php?i=" + element.dataset.id;
                            }, false)
                        })
                    }
                    //tag變色
                    //即將到來
                    let CardTag = document.querySelectorAll(".card .tag")
                    if (CardTag) {
                        CardTag.forEach(function (element) {
                            if (element.textContent == "即將到來") {
                                element.classList.add("tagComing")
                            }
                        })
                    }
                    document.querySelector(".meetingSmallCardActiveStatus").style = "display:none";
                    cover.style = "display:none";
                    selectBoxS.parentNode.children[1].style = "display:none"

                }
            });
        }, false)
    }

    //活動狀態打開

    if (activeStatusBoxS) {
        activeStatusBoxS.addEventListener("click", function (e) {
            if (this.parentNode.children[1].style.display == "block") {
                this.parentNode.children[1].style = "display:none"
            } else {
                this.parentNode.children[1].style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            }
        }, false)
    }

    let activeStatusSelectUlInputS = document.querySelectorAll(".meetingSmallCardActiveStatus .activeStatus .select ul input")

    if (activeStatusSelectUlInputS) {
        activeStatusSelectUlInputS.forEach(function (element) {
            element.checked = true;
        }, false)
        let SelectNumberS = [];

        activeStatusSelectUlInputS.forEach(function (element) {

            element.addEventListener("change", function (e) {


                SelectNumberS = []
                for (let i = 0; i < activeStatusSelectUlInputS.length; i++) {
                    if (activeStatusSelectUlInputS[i].checked == true) {
                        SelectNumberS.push(activeStatusSelectUlInputS[i].value)
                    }
                }
                console.log(SelectNumberS);

                let methodN = 2;
                $.ajax({
                    type: "POST",
                    url: "system/meetingSupport.php",
                    data: {
                        "methodN": methodN,
                        "SelectNumber": SelectNumberS
                    },
                    success: function (response) {
                        console.log(response);
                        document.querySelector(".cardGroup").innerHTML = response
                        //圖片錯誤
                        let errorImg = document.querySelectorAll(".errorImg")
                        errorImg.forEach(function (element) {
                            element.addEventListener("error", function (e) {
                                element.src = "pic/Common/R/r3.png"
                            }, false)
                        })

                        //數字
                        let dataTitleText = document.querySelector(".dataTitle h5");
                        //卡片
                        let card = document.querySelectorAll(" .cardGroup .card");
                        if (dataTitleText) {
                            dataTitleText.textContent = `共${card.length}場`
                        }
                        if (card) {
                            card.forEach(function (element) {
                                element.addEventListener("click", function (e) {
                                    window.location.href = "meetingCommon.php?i=" + element.dataset.id;
                                }, false)
                            })
                        }
                        //tag變色
                        //即將到來
                        let CardTag = document.querySelectorAll(".card .tag")
                        if (CardTag) {
                            CardTag.forEach(function (element) {
                                if (element.textContent == "即將到來") {
                                    element.classList.add("tagComing")
                                }
                            })
                        }
                    }
                });


            }, false)
        }, false)
    }


    document.querySelector(".RWDIcon img").addEventListener("click", function (e) {
        cover.style = "display:block"
        document.querySelector(".meetingSmallCardActiveStatus").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    }, false)
    //關閉
    let meetingSmallCardClose = document.querySelectorAll(".meetingSmallCard .title");
    meetingSmallCardClose.forEach(function (element) {
        element.addEventListener("click", function (e) {
            cover.style = "display:none"
            document.querySelectorAll(".meetingSmallCard").forEach(function (element2) {
                element2.style = "display:none"
            });
            selectBoxS.parentNode.children[1].style = "display:none"
            activeStatusBoxS.parentNode.children[1].style = "display:none"
        }, false)
    })
    let backM = document.querySelector(".top .left img");
    if (backM) {
        backM.addEventListener("click", function (e) {
            window.location.href = "MedicalArea.php";
        }, false)
    }

    if (!getCookieByName('username')) {
        window.location.href = "index.php";
    }


    footer1 =
        `
            <div class="footer1">
            <div class="other">
                <div class="link">
                    <a href="https://www.roche.com.tw/zh/privacy-policy.html">隱私聲明</a>
                    <a href="https://www.roche.com.tw/zh/legal-statement.html">法律聲明</a>


                </div>
                <div class="date">
                    <h5>© 2022 台灣羅氏大藥廠版權所有</h5>
                </div>
            </div>
            <div class="line">
                <h4>還有甚麼想了解的資訊嗎？<br>來這裡選擇您想知道的主題吧！</h4>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSewiuwti3Lxfy0gBdoQBB3gF4TKXQPoxTfjFJ8DcEybJgKIHQ/viewform"><img class="QRcode" src="pic/Common/QRcode2.png" alt=""></a>

            </div>
            <div class="lineBtn">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSewiuwti3Lxfy0gBdoQBB3gF4TKXQPoxTfjFJ8DcEybJgKIHQ/viewform"><img src="pic/Common/lineBtn2.png" alt=""></a>
            </div>

        </div>
    `;

    footer2 = `
            <div class="footer2">
            <small>本網站目的在供台灣醫護人員使用。羅氏網站及其中所含資訊僅供參考。嚴禁重製、轉發或用於其它目的。若希望重製本網站所含的任何資訊，請向羅氏網站管理員申請許可。
            本平台原非用於通報不良事件（副作用），但您可透過網站 <a href="https://www.roche.com/solutions/pharma/safety-reporting">(https://www.roche.com/solutions/pharma/safety-reporting)</a>，向台灣羅氏藥品安全部門通報不良事件，或前往全國藥物不良反應系統網站<a href="https://adr.fda.gov.tw/">(https://adr.fda.gov.tw/)</a> 進行通報。 本網站所載之產品資訊乃供廣泛使用者使用或瀏覽，其中某些產品詳情或資料可能於 閣下所處的國家無法得到或爲無效。 請注意，若獲取該等資料不符合 閣下所處的國家的法律程式、規定、註冊或使用，本公司不會承擔任何責任。 備註：本聲明有英文版本。如果在中文及英文版本存有歧義，以英文版本為準
            <br><br>
            <b style="font-weight:bold">聯絡資訊</b><br>
            若想查閱羅氏所持有您的個人資料，要求羅氏變更或更正您的個人資料，將您的個人資料自羅氏系統中移除，或取得羅氏隱私政策副本或查詢相關問題，請透過電子郵件taiwan.privacy@roche.com 或郵件台北市信義區松仁路100號40樓與我們聯絡。
            若想了解我們如何收集，使用，共享，保護與處理您的資料，請參考羅氏隱私政策，羅氏有權隨時依適用法規及其它適用隱私法規修訂隱私政策。
            羅氏網站及其中所含資訊僅供參考。嚴禁重制，轉發或用於其它目的。若希望重制本網站所含的任何資訊，請向羅氏網站管理員申請許可。
            </small>

        </div>`
    footerStr = footer1 + footer2;
    if (footer) {
        footer.innerHTML = footerStr

    }

    document.querySelector(".footer .footer1 .other .link").style = "justify-content: flex-start;"
    document.querySelector(".footer .footer1 .other .link a").style = "margin-right:40px"
    let lineImgSmall = document.querySelector(".menum .line .left a img");
    if (lineImgSmall) {
        lineImgSmall.src = "pic/Common/QRcode2.png";
        lineImgSmall.parentNode.href = "https://docs.google.com/forms/d/e/1FAIpQLSewiuwti3Lxfy0gBdoQBB3gF4TKXQPoxTfjFJ8DcEybJgKIHQ/viewform"
    }

</script>

</html>