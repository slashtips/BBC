(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

let fansStr = `
            <div class="fans">
                    <a class="line" href="https://social-plugins.line.me/lineit/share?url="><img src="pic/Common/line.svg" alt=""></a>
                    <div class="fb-share-button" data-href="" data-layout="button_count" data-size="large">
                    </div>
                </div>
            </div>
`;

let fansCardStr = `
  <div class="fansTitle">
            <h3>分享至</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="fans">
            <a class="line" href="https://social-plugins.line.me/lineit/share?url="><img src="pic/Common/line.svg" alt=""></a>
            <div class="fb-share-button" data-href="" data-layout="button_count" data-size="large"> </div>
        
        </div>
`
let fansCard = document.querySelector(".fansCard");
if (fansCard) {
    fansCard.innerHTML = fansCardStr;
}


let fans = document.querySelector(".fans");
if (fans) {
    fans.innerHTML = fansStr;
}



let catelogTabStr = `
<div class="articlesCatelog">
                <h2>文章目錄</h2>
                <div class="catelogg catelog1">
                    <div class="title ">
                        <h3>1. 症狀察覺</h3>
                        <div class="catelogIcon">
                            <img src="pic/Common/plus.svg" alt="">
                        </div>
                    </div>
                    <ul>
                        <li><a href="page1.php">疾病篩檢</a></li>
                        <li><a href="page2.php">疾病症狀</a></li>
                    </ul>
                </div>
                <div class="catelogg catelog2">
                    <div class="title ">
                        <h3>2. 疾病診斷</h3>
                        <div class="catelogIcon">
                            <img src="pic/Common/plus.svg" alt="">
                        </div>
                    </div>
                    <ul>
                        <li><a href="page3.php">病理報告</a></li>
                        <li><a href="page4.php">影像學</a></li>
                        <li><a href="page5.php">基因測試</a></li>
                        <li><a href="page6.php">癌症分期</a></li>
                    </ul>
                </div>
                <div class="catelogg catelog3">
                    <div class="title">
                        <h3>3. 治療種類</h3>
                        <div class="catelogIcon">
                            <img src="pic/Common/plus.svg" alt="">
                        </div>
                    </div>
                    <ul>
                        <li><a href="page7.php">化學藥物治療</a></li>
                        <li><a href="page8.php">手術治療</a></li>
                        <li><a href="page9.php">放射治療</a></li>
                        <li><a href="page10.php">標靶治療</a></li>
                    </ul>
                </div>
                <div class="catelogg catelog4">
                    <div class="title">
                        <h3>4. 後續追蹤 </h3>
                        <div class="catelogIcon">
                            <img src="pic/Common/plus.svg" alt="">
                        </div>
                    </div>
                    <ul>
                        <li><a href="page11.php">手術後照護</a></li>
                        <li><a href="page12.php">副作用管理</a></li>
                        <li><a href="page13.php">營養建議</a></li>
                    </ul>
                </div>
                <div class="catelogg catelog5">
                    <div class="title">
                        <h3>5. 腸癌照護</h3>
                        <div class="catelogIcon">
                            <img src="pic/Common/plus.svg" alt="">
                        </div>
                    </div>
                    <ul>
                        <li><a href="page14.php">心理健康</a></li>
                        <li><a href="page15.php">社會資源</a></li>
                        <li><a href="page16.php">癌症資源中心</a></li>
                        <li><a href="page17.php">個人化精準醫療</a></li>
                    </ul>
                </div>
            </div>
           
`
let catelogTab = document.querySelector(".catelogTab");
if (catelogTab) {
    catelogTab.innerHTML = catelogTabStr
}

let catelog2Str = `

        <div class="articlesCatelog">
                        <h2>文章目錄</h2>
                        <div class="catelogg ">
                            <ul>

                            </ul>
                        </div>
        </div>

            <div class="relatedArticles">
                <h2>相關文章</h2>
                <div class="card">
                    <img src="pic/Common/Cardimg.png" alt="">
                    <div class="cardText">
                        <div class="tag"></div>
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, cupiditate.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="pic/Common/Cardimg.png" alt="">
                    <div class="cardText">
                        <div class="tag">類別標籤 A</div>
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, cupiditate.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="pic/Common/Cardimg.png" alt="">
                    <div class="cardText">
                        <div class="tag">類別標籤 A</div>
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, cupiditate.</p>
                    </div>
                </div>
            </div>
`
let catelog2 = document.querySelector(".catelog2")


let catelogCardStr = `
<div class="catelogBigTitle">
            <h3>文章目錄</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="catelogList">
            <div class="catelogContent">
                <div class="catelogTitle">
                    <h3 class="">1. 症狀察覺</h3>
                    <div class="catelogIcon">
                        <img src="pic/Common/plus.svg" alt="">
                    </div>
                </div>
                <ul>
                    <li><a  href="page1.php"> 疾病篩檢</a></li>
                    <li><a href="page2.php"> 疾病症狀</a></li>
                </ul>
            </div>
            <div class="catelogContent">
                <div class="catelogTitle">
                    <h3>2. 疾病診斷</h3>
                    <div class="catelogIcon">
                        <img src="pic/Common/plus.svg" alt="">
                    </div>
                </div>
                <ul>
                    <li><a href="page3.php">病理報告</a></li>
                    <li><a href="page4.php"> 影像學</a></li>
                    <li><a href="page3.php">基因測試</a></li>
                    <li><a href="page4.php"> 癌症分期</a></li>
                </ul>
            </div>
            <div class="catelogContent">
                <div class="catelogTitle">
                    <h3>3. 治療種類</h3>
                    <div class="catelogIcon">
                        <img src="pic/Common/plus.svg" alt="">
                    </div>
                </div>
                <ul>
                    <li><a href="page7.php">化學藥物治療</a></li>
                    <li><a href="page8.php">手術治療</a></li>
                    <li><a href="page9.php">放射治療</a></li>
                    <li><a href="page10.php">標靶治療</a></li>
                </ul>
            </div>
            <div class="catelogContent">
                <div class="catelogTitle">
                    <h3>4. 後續追蹤</h3>
                    <div class="catelogIcon">
                        <img src="pic/Common/plus.svg" alt="">
                    </div>
                </div>
                 <ul>
                        <li><a href="page11.php">手術後照護</a></li>
                        <li><a href="page12.php">副作用管理</a></li>
                        <li><a href="page13.php">營養建議</a></li>
                    </ul>
            </div>

            <div class="catelogContent">
                <div class="catelogTitle">
                    <h3>5. 腸癌照護</h3>
                    <div class="catelogIcon">
                        <img src="pic/Common/plus.svg" alt="">
                    </div>
                </div>
                <ul>
                    <li><a href="page14.php">心理健康</a></li>
                    <li><a href="page15.php">社會資源</a></li>
                    <li><a href="page16.php">癌症資源中心</a></li>
                    <li><a href="page17.php">個人化精準醫療</a></li>
                </ul>
            </div>

        </div>
`;

let catelogCard = document.querySelector(".catelogCard");
if (catelogCard) {
    catelogCard.innerHTML = catelogCardStr;
}

let backImg = document.querySelector(".content .back img");
if (backImg) {
    backImg.addEventListener("click", function (e) {
        window.location.href = "./index.php";
    }, false)

}

let back2Img = document.querySelector(".content .back2 img");
if (back2Img) {
    back2Img.addEventListener("click", function (e) {
        window.location.href = "ArticleIndex.php";
    }, false)
}



let menuArticleSmallHomeBtn = document.querySelector(".menuArticleSmall .homeS")
if (menuArticleSmallHomeBtn) {
    menuArticleSmallHomeBtn.addEventListener("click", function (e) {
        window.location.href = "index.php"
    }, fans)
}

let menuArticleSmallSourceBtn = document.querySelector(".menuArticleSmall .sourceS")

if (menuArticleSmallSourceBtn) {
    menuArticleSmallSourceBtn.addEventListener("click", function (e) {
        document.querySelector(".fansCard").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        cover.style = "display:block"
        let fbBtn = document.querySelectorAll(".fb-share-button")

        fbBtn.forEach(function (element) {

            element.dataset.href = window.location.href;

        })
    }, false)
}

let menuArticleSmallCatelogBtn = document.querySelector(".menuArticleSmall .catelogS");
if (menuArticleSmallCatelogBtn) {
    menuArticleSmallCatelogBtn.addEventListener("click", function (e) {
        document.querySelector(".catelogCard").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        cover.style = "display:block"
    }, false)
}



//手機下導覽列關閉
let fansCardCloseImg = document.querySelector(".fansCard .fansTitle img")
if (fansCardCloseImg) {
    fansCardCloseImg.addEventListener("click", function (e) {
        document.querySelector(".fansCard").style = "display:none"
        cover.style = "display:none"
    }, false)
}

//
let catelogCardCloseBtn = document.querySelector(".catelogCard .catelogBigTitle img")
if (catelogCardCloseBtn) {
    catelogCardCloseBtn.addEventListener("click", function (e) {
        document.querySelector(".catelogCard").style = "display:none"
        cover.style = "display:none"
    }, false)
}







let fbBtn = document.querySelectorAll(".fb-share-button")

fbBtn.forEach(function (element) {

    element.dataset.href = window.location.href;

})






let LineBtn = document.querySelectorAll(".fans .line");
if (LineBtn) {
    LineBtn.forEach(function (element) {
        element.addEventListener("click", function (e) {
            element.href += window.location.href;
        }, false)
    })
}

//點擊反應
let catelogTitle = document.querySelectorAll(".catelogContent  .catelogTitle")
if (catelogTitle) {
    catelogTitle.forEach(function (element) {
        element.addEventListener("click", function (e) {
            let thisImg = element.children[1].children[0];
            let thisUl = element.parentNode.children[1];
            if (thisUl.style.display == "block") {
                thisUl.style = "display:none";
                thisImg.src = "pic/Common/plus.svg";
            }
            else {
                thisUl.style = "display:block";
                thisImg.src = "pic/Common/minus.svg";
            }
        }, false)
    })
    let titleS = document.querySelector(".topic h3")
    let titleSSec = document.querySelector(".topic h1")

    // 抓標題加上Active
    if (titleS) {
        catelogTitle.forEach(function (element) {
            if (element.children[0].textContent.trim() == titleS.textContent.trim()) {
                element.children[0].classList.add("catelogActive");
                element.click();
            }
        })

        let catelogContentA = document.querySelectorAll(".catelogContent ul li a");
        catelogContentA.forEach(function (element) {
            if (element.textContent.trim() == titleSSec.textContent.trim()) {
                element.classList.add("catelogActive")
            }
        })
    }


}






let RWDTopBack = document.querySelector(".RWDTop img");
if (RWDTopBack) {
    RWDTopBack.addEventListener("click", function (e) {
        window.location.href = "index.php"
    }, false)
}



//腸癌文章區
let articlesCatelog2Str = `

<div class="articlesCatelog">
    <h2>文章目錄</h2>
    
</div>

`
let articlesCatelog2 = document.querySelector(".articlesCatelog2");
if (articlesCatelog2) {

}

$(document).ready(function () {
    //要執行回到最上方
    $('.RWDArrow img').on('click', function () {
        $("html,body").animate(
            {
                scrollTop: 0 //回到第一個區塊
            },
            800
        );
    })
})

let relatedC = document.querySelector(".relatedArticles .card");
if (!relatedC) {
    let relatedArticlesH2 = document.querySelector(".relatedArticles h2")
    if (relatedArticlesH2) {
        relatedArticlesH2.style = "display:none"
    }
}

//自數限制 Recommend
//字數限制
let relatedArticlesContent = document.querySelectorAll(".relatedArticles .relatedContent")
if (relatedArticlesContent) {
    relatedArticlesContent.forEach(function (element) {
        if (element.textContent.length > 50) {
            element.textContent = element.textContent.substr(0, 50) + "...";
        }
    }, false)
}
let recommendContent = document.querySelectorAll(".articleGroup .airticleText .content")
if (recommendContent) {
    recommendContent.forEach(function (element) {
        if (element.textContent.length > 50) {
            element.textContent = element.textContent.substr(0, 50) + "...";
        }
    }, false)
}
