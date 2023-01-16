


//Cookie讀取
function parseCookie() {
    var cookieObj = {};
    var cookieAry = document.cookie.split(';');
    var cookie;

    for (var i = 0, l = cookieAry.length; i < l; ++i) {
        cookie = jQuery.trim(cookieAry[i]);
        cookie = cookie.split('=');
        cookieObj[cookie[0]] = cookie[1];
    }

    return cookieObj;
}




function getCookieByName(name) {
    var value = parseCookie()[name];
    if (value) {
        value = decodeURIComponent(value);
    }

    return value;
}

//修正拖動
(function ($) {
    $.support.touch = true; 

    if (!$.support.touch) {
        return;
    }

    var proto = $.ui.mouse.prototype,
        _mouseInit = proto._mouseInit;

    $.extend(proto, {
        _getElementToBind: function () {
            var el = this.element;
            if (this.widgetName == "sortable") {
                console.log
            }
            return el;
        },

        _mouseInit: function () {
            this._getElementToBind().bind("touchstart." + this.widgetName, $.proxy(this, "_touchStart"));
            _mouseInit.apply(this, arguments);
        },

        _touchStart: function (event) {
            if (event.originalEvent.targetTouches.length != 1) {
                return false;
            }

            if (!this._mouseCapture(event, false)) { 
                return true;
            }

            this.element
                .bind("touchmove." + this.widgetName, $.proxy(this, "_touchMove"))
                .bind("touchend." + this.widgetName, $.proxy(this, "_touchEnd"));

            this._modifyEvent(event);

            $(document).trigger($.Event("mouseup")); 
            this._mouseDown(event);

            return false;
        },

        _touchMove: function (event) {
            this._modifyEvent(event);
            this._mouseMove(event);
        },

        _touchEnd: function (event) {
            this.element
                .unbind("touchmove." + this.widgetName)
                .unbind("touchend." + this.widgetName);
            this._mouseUp(event);

        },

        _modifyEvent: function (event) {
            event.which = 1;
            var target = event.originalEvent.targetTouches[0];
            event.pageX = target.clientX;
            event.pageY = target.clientY;
        }

    });

})(jQuery);




//濾鏡
let cover = document.querySelector('.cover');
//alert
let alertt = document.querySelector(".alert");

let cookieStr = `
 <div class="left">
            <h3>我們對於cookie的使用</h3>
            <p>我們使用Cookie和其他科技來改善我們的網站。除了必要的Cookie之外，我們還希望使用Cookie（1）瞭解我們的網站的使用方式和性能，包括跨網站統計數據，（2）為您提供額外的功能和個人化設定（3）為您提供社群媒體互動，以及（4）用於目標和行銷目的。點擊「全部接受」，即表示您同意使用所有Cookie和相對應的資料處理，其中可能包括您的瀏覽器資訊和
                IP 位址，以及向第三方披露個人資料，如我們的Cookie隱私政策中所述。有關詳細資料、設定和取消同意，請點選「Cookie選項」。</p>
        </div>
        <div class="inputGroup">
            <input class="reject" type="button" value="全部拒絕">
            <input class="accept" type="button" value="全部接受">
        </div>
`

let cookieMenu = document.querySelector(".cookie");
if (cookieMenu) {
    cookieMenu.innerHTML = cookieStr;
    let reject = document.querySelector(".reject");
    reject.addEventListener("click", function (e) {
        document.cookie = `cookie=false; max-age=25000; secure path=/`;
        cookieMenu.style = "display:none"
    }, false)
    let accept = document.querySelector(".accept");
    accept.addEventListener("click", function (e) {
        document.cookie = `cookie=true; max-age=25000; secure path=/`;
        cookieMenu.style = "display:none"
    }, false)
    if (getCookieByName("cookie")) {
        cookieMenu.style = "display:none"
    }
}




//menu選單
let menuLeft =
    `
        <div class="left">
            <div class="roche">
                <img src="../../pic/Common/roche.svg" alt="">
            </div>
            <div class="logo"><a href="../../index.php">腸癌治療旅程</a> </div>
        </div>
`;


let menuRight =
    `
    <div class="right">
            <div class="login">
                <img src="../../pic/Common/login.svg" alt="">
            </div>
            <div class="logged">
                <div class="loggedBtn">
                    <img class="photoStickers" src="../../pic/Common/userNone.png" alt="">
                    <h5></h5>
                    <img src="../../pic/Common/arrowDown.png" alt="">
                </div>
                <ul>
                    <h6 class="title"></h6>
                    <li><a href="../../personal.php">個人主頁</a></li>
                    <li class="hide" ><a href="../../MedicalArea.php">醫護專區</a></li>
                    <li class="hide" ><a href="../../back.html" target="_blank">後台管理</a></li>
                </ul>

            </div>
            <div class="bar">
                <img src="../../pic/Common/hamburger-menu.svg" alt="">
            </div>
            <div class="bars">
                <img src="../../pic/Common/hamburger-menu.svg" alt="">
            </div>
            <div class="menuBack">
                <a href="../../">
                    <img src="../../pic/Common/menuBack.svg" alt="">
                </a>
            </div>
        </div>
`;

let menuStr = menuLeft + menuRight



//menum
let menumStr = `
 <div class="wrap">
            <div class="switch">
                <div class="unlogin">
                    <h3>主要選單</h3>
                    <div class="hr"></div>
                    <ul>
                        <li><a href="../../ArticleIndex.php">腸癌新知</a><img src="../../pic/index/right.png" alt=""></li>
                        <li><a href="../../articleIndexNew.php">最新消息</a><img src="../../pic/index/right.png" alt=""></li>
                        <li><a href="../../ArticleIndex.php?question=true">常見問答</a><img src="../../pic/index/right.png" alt=""></li>
                        <li><a class="askQuestionLink" href="../../#">就醫提問單</a><img src="../../pic/index/right.png" alt=""></li>
                    </ul>
                </div>

                <div class="login">
                    <h3 class="RWDHide">醫護人員選單</h3>
                    <div class="hr hrs"></div>

                    <ul class="RWDHide">
                        <li><a href="../../articleIndexNew.php">醫護園地</a><img src="../../pic/index/right.png" alt=""></li>
                        <li><a href="../../work.html">會議與工作坊</a><img src="../../pic/index/right.png" alt=""></li>
                    </ul>
                </div>
            </div>

            <div class="hrb"></div>

            <div class="line"  >


                <div class="inputGroup" >
                    <input class="loginInBtn" type="button" value="登入">
                    <input class="loginOutBtn" type="button" value="登出">
                </div>
            </div>

            <img class="closeBtn" src="../../pic/index/cancel.svg" alt="">
        </div> `



let menum = document.querySelector(".menum")
let menu = document.querySelector('.menu');
if (menu) {
    menu.innerHTML = menuStr;

}

if (menum) {

    menum.innerHTML = menumStr

    //Menu點擊
    let menuBar = document.querySelector('.menu .bar');
    menuBar.addEventListener("click", function (e) {

        document.querySelector('.menum').style = "display:block";
        document.querySelector("body").style = "  overflow-y: hidden"
    }, false)

    let menuBarClose = document.querySelector('.menum .closeBtn');
    menuBarClose.addEventListener("click", function (e) {
        document.querySelector('.menum').style = "display:none"
        document.querySelector("body").style = "  overflow-y: scroll"
    }, false)

    //跳到登入

    let loginBtn = document.querySelector('.menum .inputGroup .loginInBtn');
    loginBtn.addEventListener("click", function (e) {
        document.querySelector('.menum').style = "display:none";
        document.querySelector(".loginH").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        document.querySelector(".cover").style = "display:block;"
    }, false)

    //登出
    let loginOutBtn = document.querySelector('.menum .inputGroup .loginOutBtn');
    loginOutBtn.addEventListener("click", function (e) {
        document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
        document.cookie = "email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
        document.cookie = "loginStatus=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
        document.querySelector('.menum').style = "display:none";
        loginBtn.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        loginOutBtn.style = "display:none"
        window.location.reload();
    }, false)

}

let menu1Str = `
<div class="wrap">
            <h3>主要選單</h3>
            <div class="hr"></div>
            <ul>
                <li><a href="../../ArticleIndex.html">腸癌新知</a><img src="../../pic/index/right.png" alt=""></li>
                <li><a href="../../rticleIndexNew.php">最新消息</a><img src="../../pic/index/right.png" alt=""></li>
                <li><a href="../../ArticleIndex.php?question=true">常見問題</a><img src="../../pic/index/right.png" alt=""></li>
                <li><a class="askQuestionLink" href="../../#">就醫提問單</a><img src="../../pic/index/right.png" alt=""></li>
            </ul>
            <div class="RWDHide">
                <h3>醫護選單</h3>
                <div class="hr hrs"></div>
                <h2>個管師專區</h2>
                <ul class="RWDHide">
                    <li><a href="../../articleIndexNew.php">醫護園地</a><img src="../../pic/index/right.png" alt=""></li>
                    <li><a href="../../work.html">會議與工作坊</a><img src="../../pic/index/right.png" alt=""></li>
                </ul>
            </div>
            
            <div class="line">
                <img src="../../pic/Common/QRcode.png" alt="">
            </div>
            <div class="inputGroup">
                <input class="loginSmallBtn" type="button" value="登入">
                <input class="logoutSmallBtn" type="button" value="登出">
            </div>

            <img class="closeBtn" src="../../pic/index/cancel.svg" alt="">
        </div>
`;


let menu1 = document.querySelector(".menu1");
if (menu1) {
    menu1.innerHTML = menu1Str;
    let menuBars = document.querySelector('.menu .bars');
    menuBars.addEventListener("click", function (e) {
        document.querySelector('.menu1').style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;";
        document.querySelector("body").style = "  overflow-y: hidden"
    }, false)

    let menuBarsClose = document.querySelector('.menu1 .closeBtn');
    menuBarsClose.addEventListener("click", function (e) {
        document.querySelector('.menu1').style = "display:none"
        document.querySelector("body").style = "  overflow-y: scroll"
    }, false)

    let loginSmallBtn = document.querySelector(".menu1 .inputGroup .loginSmallBtn")
    loginSmallBtn.addEventListener("click", function (e) {
        document.querySelector(".loginSmall").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        menu1.style = "display:none"
        cover.style = "display:block"
    }, false)


}

//個人title狀態點擊
let loggedBtn = document.querySelector(".menu .right .logged .loggedBtn");
if (loggedBtn) {
    loggedBtn.addEventListener("click", function (e) {
        let loggedUl = document.querySelector(".menu .right .logged ul");
        if (loggedUl.style.display == "block") {
            loggedUl.style = "animation: toggleUp .5s;animation - fill - mode: forwards;"
        }
        else {
            loggedUl.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards; "
        }

    }, false)
}

let loginSmall = document.querySelector(".loginSmall");
if (loginSmall) {

    //跳轉到註冊
    let loginSmallBtnRegister = document.querySelector(".loginSmallBtnRegister");
    loginSmallBtnRegister.addEventListener("click", function (e) {
        loginSmall.style = "display:none";
        document.querySelector(".registerSmall").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    }, false)
    //跳轉到忘記密碼
    let loginSmallForgetLink = document.querySelector(".loginSmall .loginSmallForgetLink")

    loginSmallForgetLink.addEventListener("click", function (e) {
        loginSmall.style = "display:none";
        forgetPasswordSmall.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;";
    }, false)

    //登入判別(手機)
    $('.loginFormSmall').on("submit", function (e) {
        e.preventDefault()
        var form = $(this);

        $.ajax({
            type: "Post",
            url: "system/user_vertify.php",
            data: form.serialize(),
            success: function (response) {
                console.log(response);

                let response_arr = response.split(',');
                let id = response_arr[0];
                let name = response_arr[1];
                let email = response_arr[2];
                let date = response_arr[3];
                let status = response_arr[4];
                console.log(id, name, email, date, status);
                if (id) {
     
                    document.cookie = `username=${name}; max-age=7200; secure path=/`;
                    document.cookie = `email=${email}; max-age=7200; secure path=/`;
                    document.cookie = `loginStatus=${status}; max-age=7200; secure path=/`;
                    window.location.href = "MedicalArea.php";
                }
                else {
                    alert("Email或密碼錯誤")
                }

            },
            error: function (err) {
                console.log(err);
            },
        });


    })
}





let footer1 =
    `
<div class="footer1">
            <div class="other">
                <div class="link">
                    <a href="../../https://www.roche.com.tw/zh/about_roche.html">隱私聲明</a>
                    <a href="../../https://www.iroche.com.tw/sys/login.html?resource=%2Fcontent%2Fcustomerportal%2Fas%2Ftw%2Fzh%2Flegal-statement.html&$$login$$=%24%24login%24%24&j_reason=unknown&j_reason_code=unknown">法律聲明</a>
                    <a href="../../" class="footerCookieBtn">Cookie選項</a>

                </div>
                <div class="date">
                    <h5>© 2022</h5>
                </div>
            </div>

        </div>
`;


let footer2 = `
        <div class="footer2">
            <small>本平台原非用於通報不良事件（副作用），但您可透過網站，向台灣羅氏藥品安全部門通報不良事件，或前往全國藥物不良反應系統網站進行通報。 本平台原非用於通報不良事件（副作用），但您可透過網站
                (https://www.roche.com/solutions/pharma/safety-reporting)，向台灣羅氏藥品安全部門通報不良事件，或前往全國藥物不良反應系統網站
                (https://adr.fda.gov.tw/)
                進行通報。 本網站所載之產品資訊乃供廣泛使用者使用或瀏覽，其中某些產品詳情或資料可能於 閣下所處的國家無法得到或爲無效。 請注意，若獲取該等資料不符合
                閣下所處的國家的法律程式、規定、註冊或使用，本公司不會承擔任何責任。
                備註：本聲明有英文版本。如果在中文及英文版本存有歧義，以英文版本為準
            </small>
        </div>
`;

let footerStr = footer1 + footer2;

let footer = document.querySelector(".footer")
if (footer) {
    footer.innerHTML = footerStr
    let footerCookieBtn = document.querySelector(".footerCookieBtn")
    footerCookieBtn.addEventListener("click", function (e) {
        e.preventDefault();
        cookieMenu.style = "display:flex"
        document.cookie = "cookie=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
    }, false)
}



//登入
let loginStr =
    `
    <div class="bigIcon">
            <img src="../../pic/Common/Login/bigIcon1.png" alt="">
        </div>
        <form class="loginForm" action="system/user_vertify.php" method="POST">
            <div class="title">
                <h2>醫療人員登入</h2>
                <img src="../../pic/Common/Login/cancel.png" alt="">
            </div>
            <div class="email">
                <label for="email">Email信箱 *</label>
                <input type="email" name="email" placeholder="例 : example.com">
            </div>
            <div class="password">
                <label for="password">密碼 *</label>
                <input type="password" name="password" placeholder="例: * * * * * *">
                <img class="eye" src="../../pic/Common/eyeClose.png">
            </div>
            <div class="hint">
                <div class="remember">
                    <input type="checkbox" value="" id="remember">
                    <label for="remember">記住我</label>
                </div>
                <a href="../../#">忘記密碼</a>
            </div>

            <input class="loginBtn loginBtnC1 loginVertify " type="submit" value="登入">
            <div class="hr"></div>
            <input class="loginBtn loginBtnC2 ToRegister" type="button" value="立即註冊">
            <div class="small">
                <small>初次使用本網站的醫護人員，請先用醫院信箱註冊帳號。</small>
            </div>
        </form>
`;

let loginH = document.querySelector(".loginH");

if (loginH) {
    loginH.innerHTML = loginStr;
    let loginHBtn = document.querySelector(".right .login");
    loginHBtn.addEventListener("click", function (e) {
        loginH.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        document.querySelector("body").style = "  overflow-y: hidden"
        cover.style = "display:block"
    })
    let loginHClose = document.querySelector(".title img");
    loginHClose.addEventListener("click", function (e) {
        loginH.style = "display:none"
        document.querySelector("body").style = "  overflow-y: scroll"
        cover.style = "display:none"
    }, false)

    //忘記密碼
    let forgetLink = document.querySelector(".loginH .hint a");
    forgetLink.addEventListener("click", function (e) {
        loginH.style = "display:none"
        let forgetCard = document.querySelector(".forgetPassword");
        forgetCard.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;";
    }, false)
}
let loginBtn = document.querySelector('.loginBtnC1')
if (loginBtn) {
    loginBtn.addEventListener("click", function (e) {

    })
    //眼睛
    let eyeLogin = document.querySelector('.loginH .loginForm .password img');
    let loginPassword = document.querySelector(".loginH .loginForm .password input")
    let eyeStatus = 0;
    eyeLogin.addEventListener("click", function (e) {

        if (eyeStatus == 0) {
            eyeStatus = 1;
            loginPassword.type = "text"
            this.src = "../../pic/Common/eyeOpen.png";
        }
        else {
            eyeStatus = 0;
            loginPassword.type = "password"
            this.src = "../../pic/Common/eyeClose.png";
        }
    }, false)

}

//眼睛


//判別
$(document).ready(function () {

    $('.loginForm').on("submit", function (e) {

        // return
        var form = $(this);

        $.ajax({
            type: "Post",
            url: "system/user_vertify.php",
            data: form.serialize(),
            success: function (response) {
                console.log(response);
               
                let response_arr = response.split(',');
                let id = response_arr[0];
                let name = response_arr[1];
                let email = response_arr[2];
                let date = response_arr[3];
                let status = response_arr[4];
                console.log(id, name, email, date, status);
                if (id) {

                    document.cookie = `username=${name}; max-age=7200; secure path=/`;
                    document.cookie = `email=${email}; max-age=7200; secure path=/`;
                    document.cookie = `loginStatus=${status}; max-age=7200; secure path=/`;
                    window.location.href = "MedicalArea.php";
                }
                else {
                    alert("信箱、密碼輸入錯誤或此帳號未開通")
                }

            },
            error: function (err) {
                console.log(err);
            },
        });

        e.preventDefault()
    })

});
//註冊
let registerStr = `
  <div class="bigIcon">
            <img src="../../pic/Common/Register/bigIcon2.png" alt="">
        </div>
        <form class="registerForm" action="system/user_store.php" method="POST">
            <div class="title">
                <h2>醫護人員註冊</h2>
                <img src="../../pic/Common/Register/cancel.png" alt="">
            </div>
            <h5>請用醫院信箱註冊</h5>
            <div class="name">
                <div class="firstName">
                    <label for="fitstName">姓氏 *</label>
                    <input name="firstName"  type="text" placeholder="例 : 王">
                </div>
                <div class="lastName">
                    <label for="lastName">名字 *</label>
                    <input name="lastName" type="text" placeholder="例 : 小明">
                </div>
            </div>
            <div class="email">
                <label for="email">Email 信箱 * (須符合domain或合規信箱)</label>
                <input type="email" name="email" id="email" placeholder="請輸入Email">
            </div>
            <div class="password">
                <div class="password1">
                    <div class="left">
                        <label for="password1 ">密碼 *</label>

                        <input type="password" name="password1" id="password1" placeholder="例 : abc1234">
                        <img class="eye" src="../../pic/Common/eyeClose.png">
                    </div>
                     <div class="hint">
                        <small></small>
                    </div>
                    <div class="EM">
                        <img src="../..//pic/Common/Register/!.png" alt="">
                        <h5>密碼必須包含英文字母和數字<br>六位數以上</h5>
                    </div>
                </div>
                <div class="password2">
                    <label for="password2">確認密碼 *</label>
                    <input type="password" name="password2" id="password2" placeholder="例 : abc1234">
                    <img class="eye" src="../../pic/Common/eyeClose.png">
                </div>
            </div>
            <div class="registerBtnGroup">
                <input class="registerBtnC1" type="button" value="返回登入">
                <input class="registerBtnC2 registerBtn  " type="submit" value="註冊">
            </div>
        </form>`;




$(document).ready(function () {
    let email = document.querySelector('.registerForm .email input');
    let emailStatus = 0;

    //email欄位對焦判定
    if (email) {
        email.addEventListener("focus", function (e) {
            emailStatus = 0;
            this.style = "background-color:#F26681;color:#fff";
            emailStr = email.value;
            let spliceIndex = emailStr.indexOf("@", 1);

            emailSpliceStr = emailStr.substr(spliceIndex + 1, emailStr.length);

            console.log(emailSpliceStr);


            $.ajax({
                type: "POST",
                url: "system/getDomain.php",
                data: { "emailSpliceStr": emailSpliceStr },
                success: function (response) {
                    console.log(response);
                    if (response.trim() == "1") {
                        email.style = "background-color:#3975D4;color:#fff"
                        emailStatus = 1;
                    }
                }
            });

            
            $.ajax({
                type: "POST",
                url: "system/getEmailAddress.php",
                data: { "emailStr": emailStr },
                success: function (response) {
                    console.log(response);
                    if (response.trim() == "1") {
                        email.style = "background-color:#3975D4;color:#fff"
                        emailStatus = 1;
                    }
                }
            });

        }, false)
        //email欄位打字時判定
        email.addEventListener("input", function (e) {
            emailStatus = 0;
            this.style = "background-color:#F26681;color:#fff";
            emailStr = email.value;
            let spliceIndex = emailStr.indexOf("@", 1);

            emailSpliceStr = emailStr.substr(spliceIndex + 1, emailStr.length);

            console.log(emailSpliceStr);

            $.ajax({
                type: "POST",
                url: "system/getDomain.php",
                data: { "emailSpliceStr": emailSpliceStr },
                success: function (response) {
                    console.log(response);
                    if (response.trim() == "1") {
                        email.style = "background-color:#3975D4;color:#fff";
                        emailStatus = 1;
                    }
                }
            });

            $.ajax({
                type: "POST",
                url: "system/getEmailAddress.php",
                data: { "emailStr": emailStr },
                success: function (response) {
                    console.log(response);
                    if (response.trim() == "1") {
                        email.style = "background-color:#3975D4;color:#fff"
                        emailStatus = 1;
                    }
                }
            });

        }, false)
        //email欄位離開時判定
        email.addEventListener("blur", function (e) {
            this.style = "background-color:none"
        })
    }

    //
    let password1 = document.querySelector(".registerForm .password1 input")
    let password2 = document.querySelector(".registerForm .password2 input")
    //眼睛開啟關閉
    let eye1 = document.querySelector('.registerForm .password1 .left .eye');
    let eye1Status = 0;
    let eye2 = document.querySelector('.registerForm .password2 .eye');
    let eye2Status = 0;
    eye1.addEventListener("click", function (e) {
        if (eye1Status == 0) {
            eye1Status = 1;
            password1.type = "text"
            this.src = "../../pic/Common/eyeOpen.png";
        }
        else {
            eye1Status = 0;
            password1.type = "password"
            this.src = "../../pic/Common/eyeClose.png";
        }
    }, false)
    eye2.addEventListener("click", function (e) {
        if (eye1Status == 0) {
            eye1Status = 1;
            password2.type = "text"
            this.src = "../../pic/Common/eyeOpen.png";
        }
        else {
            eye1Status = 0;
            password2.type = "password"
            this.src = "../../pic/Common/eyeClose.png";
        }
    }, false)


    let passwordStatus = 0;
    password2.addEventListener("input", function () {
        passwordStatus = 0;
        password1Str = password1.value;
        password2Str = password2.value;
        let hint = document.querySelector(".registerForm .password .hint small");

        if (!(password2Str.match(/[A-Za-z]+/)) && !(password1Str.match(/[A-Za-z]+/))) {
            hint.textContent = "密碼不包含英文字母";
            hint.style = "display:block"
        }
        else if (!(password2Str.match(/[0-9]+/)) && !(password1Str.match(/[0-9]+/))) {
            hint.textContent = "密碼不包含數字";
            hint.style = "display:block"
        }
        else if (password2Str.length < 6 && password1Str.length < 6) {
            hint.textContent = "密碼小於6位數";
            hint.style = "display:block"
        }
        else if (password1Str != password2Str) {

            hint.textContent = "密碼不一致";
            hint.style = "display:block"
        }
        else {
            hint.style = "display:none"
            passwordStatus = 1;
        }

    }, false)

    password1.addEventListener("input", function () {
        passwordStatus = 0;
        password1Str = password1.value;
        password2Str = password2.value;
        let hint = document.querySelector(".registerForm .password .hint small");

        if (!(password2Str.match(/[A-Za-z]+/)) && !(password1Str.match(/[A-Za-z]+/))) {
            hint.textContent = "密碼不包含英文字母";
            hint.style = "display:block"
        }
        else if (!(password2Str.match(/[0-9]+/)) && !(password1Str.match(/[0-9]+/))) {
            hint.textContent = "密碼不包含數字";
            hint.style = "display:block"
        }
        else if (password2Str.length < 6 && password1Str.length < 6) {
            hint.textContent = "密碼小於6位數";
            hint.style = "display:block"
        }
        else if (password1Str != password2Str) {

            hint.textContent = "密碼不一致";
            hint.style = "display:block"
        }
        else {
            hint.style = "display:none"
            passwordStatus = 1;
        }

    }, false)


    $('.registerForm').on("submit", function (e) {

        if (emailStatus == 1 && passwordStatus == 1) {
  
            var form = $(this);

            $.ajax({
                type: "Post",
                url: "system/user_store.php",
                data: form.serialize(),
                success: function (response) {
                    if (response.trim() == "0") {
                        alert("此信箱已被註冊")
                        return
                    }

                    register.style = "display:none";
                    document.querySelector("body").style = "  overflow-y: scroll"
                    document.querySelector(".openPass").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
                    cover.style = "display:block"
       
                },
                error: function (err) {
                    console.log(err);
                },
            });
            e.preventDefault()
        }
        else {
            alert("信箱或密碼不合規")
            e.preventDefault()
            return
        }
        e.preventDefault()

    })

});
//註冊成功
//開通帳號卡片
let openPassStr = `
 <img class="bigIcon" src="../../pic/Common/CommonCard/bigIcon1.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>開通帳密</h3>
                <img src="../../pic/Common/cancel.png" alt="">
            </div>
            <p>我們已將帳號開通連結傳至您的信箱，請查收信件並點擊該連結，即可開通帳號完成註冊流程。</p>
            <div class="inputGroup">
                <input class="inputGroupC1" type="button" value="關閉">
            </div>
        </div>
`
let openPass = document.querySelector(".openPass");
if (openPass) {
    openPass.innerHTML = openPassStr;

    //關閉
    document.querySelector('.openPass .inputGroup input').addEventListener("click", function (e) { openPass.style = "display:none"; cover.style = "display:none" }, false)


}



//
let register = document.querySelector(".register");
if (register) {
    register.innerHTML = registerStr;
    //跳到註冊
    let ToRegister = document.querySelector(".ToRegister");
    ToRegister.addEventListener("click", function (e) {
        register.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        loginH.style = "display:none"
    })
    //返回登入
    let registerBack = document.querySelector(".register .registerBtnC1");
    if (registerBack) {
        registerBack.addEventListener("click", function (e) {
            register.style = "display:none"
            loginH.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        })
    }
}

//關閉註冊
let registerCloseBtn = document.querySelector(".registerForm .title img");

if (registerCloseBtn) {
    registerCloseBtn.addEventListener("click", function (e) {
        register.style = "display:none"
        cover.style = "display:none";
        document.querySelector("body").style = "  overflow-y: scroll"
    }, false)
}

//註冊成功
let registerSuccessBtn = document.querySelector(".register .registerBtnC2")


//註冊手機
let registerSmallStr = `
     <div class="commonTitleSmall">
            <h3>醫療人員註冊</h3>
            <img src="../../pic/Common/cancel.png" alt="">
        </div>
        <h4>請用醫院信箱完成註冊。</h4>
        <form class="registerSmallForm" action="">
            <div class="firstNameSmall">
                <label for="firstNameSmall">姓氏*</label>
                <input type="text" name="firstName" placeholder="例 : 王">
            </div>
            <div class="lastNameSmall">
                <label for="lastNameSmall">名字*</label>
                <input type="text" name="lastName" placeholder="例 : 小明">
            </div>
            <div class="emailSmall">
                <label for="emailSmall">Email信箱 * </label>
                <input type="email" name="email" id="emailSmall" placeholder="例 : example.com">
            </div>
            <div class="passwordSmall">
                <label for="passwordSmall">密碼 *</label>
                <input type="text" class="password1" name="password" placeholder="例 : * * * * * *">

                <div class="hint">
                    <img src="../../pic/Common/Register/!.png" alt="">
                    <small class="hint">密碼必須包含英文字母和數字<br>六位數以上</small>
                </div>

            </div>

            <div class="checkPasswordSmall">
                <label for="checkPasswordSmall">確認密碼 *</label>
                <input class="password2" id="checkPasswordSmall" type="text" placeholder="例 : * * * * * *">
            </div>

            <div class="smallBtnGroup">
                <input class="smallBtn smallc2 backSmallBtn" type="button" value="返回登入">
                <input class="smallBtn smallc1 loginSmallBtn" type="submit" value="立即註冊">
            </div>
        </form>
`
let registerSmall = document.querySelector(".registerSmall");
if (registerSmall) {
    registerSmall.innerHTML = registerSmallStr;
    //關閉
    let registerSmallImg = document.querySelector(".registerSmall .commonTitleSmall img")
    registerSmallImg.addEventListener("click", function (e) {
        registerSmall.style = "display:none";
        cover.style = "display:none";
        forgetPasswordSmall.style = "none";
    }, false)


    let email = document.querySelector('.registerSmall .emailSmall input');
    let emailStatus = 0;
    //email欄位對焦判定
    if (email) {
        email.addEventListener("focus", function (e) {
            emailStatus = 0;
            emailStr = email.value;
            this.style = "background-color:#F26681;color:#fff"
            domains.forEach((element) => {
                if (emailStr.includes(element.domain)) {
                    this.style = "background-color:#3975D4;color:#fff"
                    emailStatus = 1;

                }
            })
            emailPersonal.forEach((element) => {
                if (emailStr.includes(element.Email)) {
                    this.style = "background-color:#3975D4;color:#fff"
                    emailStatus = 1;
                }
            })
        }, false)
        //email欄位打字時判定
        email.addEventListener("input", function (e) {
            emailStatus = 0;
            this.style = "background-color:#F26681;color:#fff"
            emailStr = email.value;
            console.log(emailStr);
            domains.forEach((element) => {
                if (emailStr.includes(element.domain)) {
                    this.style = "background-color:#3975D4;color:#fff"
                    emailStatus = 1
                }
            })
            emailPersonal.forEach((element) => {
                if (emailStr.includes(element.Email)) {
                    this.style = "background-color:#3975D4;color:#fff"
                    emailStatus = 1
                }
            })

        }, false)
        //email欄位離開時判定
        email.addEventListener("blur", function (e) {
            this.style = "background-color:none"
        })
    }

    //
    let password1 = document.querySelector(".registerSmallForm .password1 ")
    let password2 = document.querySelector(".registerSmallForm .password2 ")
    
    //密碼條件判定
    let passwordStatus = 0;
    password2.addEventListener("input", function () {
        passwordStatus = 0;
        password1Str = password1.value;
        password2Str = password2.value;
        let hint = document.querySelector(".registerSmallForm .hint small");

        if (!(password2Str.match(/[A-Za-z]+/)) && !(password1Str.match(/[A-Za-z]+/))) {
            hint.textContent = "密碼不包含英文字母";
            hint.style = "display:block"
        }
        else if (!(password2Str.match(/[0-9]+/)) && !(password1Str.match(/[0-9]+/))) {
            hint.textContent = "密碼不包含數字";
            hint.style = "display:block"
        }
        else if (password2Str.length < 6 && password1Str.length < 6) {
            hint.textContent = "密碼小於6位數";
            hint.style = "display:block"
        }
        else if (password1Str != password2Str) {
            hint.textContent = "密碼不一致";
            hint.style = "display:block"
        }
        else {
            hint.style = "display:none"
            passwordStatus = 1;
        }
    }, false)

    password1.addEventListener("input", function () {
        passwordStatus = 0;
        password1Str = password1.value;
        password2Str = password2.value;
        let hint = document.querySelector(".registerForm .password .hint small");

        if (!(password2Str.match(/[A-Za-z]+/)) && !(password1Str.match(/[A-Za-z]+/))) {
            hint.textContent = "密碼不包含英文字母";
            hint.style = "display:block"
        }
        else if (!(password2Str.match(/[0-9]+/)) && !(password1Str.match(/[0-9]+/))) {
            hint.textContent = "密碼不包含數字";
            hint.style = "display:block"
        }
        else if (password2Str.length < 6 && password1Str.length < 6) {
            hint.textContent = "密碼小於6位數";
            hint.style = "display:block"
        }
        else if (password1Str != password2Str) {

            hint.textContent = "密碼不一致";
            hint.style = "display:block"
        }
        else {
            hint.style = "display:none"
            passwordStatus = 1;
        }

    }, false)


    $('.registerSmallForm').on("submit", function (e) {

        if (emailStatus == 1 && passwordStatus == 1) {
   
            var form = $(this);

            $.ajax({
                type: "Post",
                url: "system/user_store.php",
                data: form.serialize(),
                success: function (response) {
                    console.log(response);
                    registerSmall.style = "display:none";
                    document.querySelector("body").style = "overflow-y: scroll"
                    document.querySelector(".openPassSmall").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
                    cover.style = "display:block"
        
                },
                error: function (err) {
                    console.log(err);
                },
            });
            e.preventDefault()
        }
        else {
            alert("信箱或密碼不合規");
            e.preventDefault();
            return
        }
        e.preventDefault()

    })

    //返回註冊

    let backSmallBtn = document.querySelector(".registerSmall .backSmallBtn");
    backSmallBtn.addEventListener("click", function (e) {
        registerSmall.style = "display:none"
        loginSmall.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    }, false)

}



let openPassSmallStr =
    `
        <div class="commonTitleSmall">
            <h3>開通帳號</h3>
            <img src="../../pic/Common/cancel.png" alt="">
        </div>
        <div class="bigIcon">
            <img src="../../pic/Common/CommonCard/bigIcon1.png" alt="">
        </div>
        <p>我們已將帳號開通連結傳至您的信箱，請查收信件並點擊該連結，即可開通帳號完成註冊流程。</p>
        <input type="button" class="smallc2" value="關閉">
`;

let openPassSmall = document.querySelector(".openPassSmall")

if (openPassSmall) {
    openPassSmall.innerHTML = openPassSmallStr;
    let openPassSmallClose = document.querySelector(".commonTitleSmall img")
    openPassSmallClose.addEventListener("click", function (e) {
        openPassSmall.style = "display:none;";
        cover.style = "display:none"
    }, false)
}

//忘記密碼
let forgetPasswordStr = `
 <img class="bigIcon" src="../../pic/Common/CommonCard/bigIcon2.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>忘記密碼</h3>
                <img src="../../pic/Common/cancel.png" alt="">
            </div>
            <p>確定要重設密碼？您需要先輸入註冊信箱來完成重設流程。</p>
            <form method="post">
                <div class="email">
                    <label for="email">Email 信箱 *</label>
                    <input name="email" type="email" placeholder="例 : example.com">
                </div>
                <div class="inputGroup">
                    <input class="inputGroupC1 forgetBack" type="button" value="返回登入">
                    <input class="inputGroupC2 " type="submit" value="寄送驗證碼">
                </div>
            </form>
        </div>`
let forgetPassword = document.querySelector(".forgetPassword");
if (forgetPassword) {
    forgetPassword.innerHTML = forgetPasswordStr;

    //返回按鈕
    let forgetBackBtn = document.querySelector(".forgetPassword .forgetBack");
    forgetBackBtn.addEventListener("click", function (e) {
        forgetPassword.style = "display:none";
        register.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;";
    }, false)

    //寄送信箱
    $('.forgetPassword form').on("submit", function (e) {
        var form = $(this);
        $.ajax({
            type: "Post",
            url: "system/user_forget.php",
            data: form.serialize(),
            success: function (response) {
                alert("寄送成功，請查收信件")
                forgetPassword.style = "display:none"
                cover.style = "display:none"
                document.querySelector("body").style = "  overflow-y: scroll"
            },
            error: function (err) {
                console.log(err);
                alert("寄送失敗")
            },
        });

        e.preventDefault()
    })

}

//忘記密碼手機板
let forgetPasswordSmallStr =
    `
        <div class=" commonTitleSmall">
            <h3>忘記密碼</h3>
            <img src="../../pic/Common/cancel.png" alt="">
        </div>
        <h4>確定要重設密碼？您需要先輸入註冊信箱來完成重設流程。</h4>
        <form action="">
            <div class="emailSmall">
                <label for="emailSmall">Email信箱 * </label>
                <input type="email" name="email" id="emailSmall" placeholder="例 : example.com">
            </div>
            <div class="smallBtnGroup">
                <input class="smallBtn  smallc1 backToLogin" type="button" value="返回登入">
                <input class="smallBtn smallc2 loginSmallBtn" type="submit" value="寄送驗證碼">
            </div>
        </form>
`
let forgetPasswordSmall = document.querySelector(".forgetPasswordSmall");
if (forgetPasswordSmall) {
    forgetPasswordSmall.innerHTML = forgetPasswordSmallStr;
    //返回登入
    let backToLogin = document.querySelector(".forgetPasswordSmall .backToLogin")
    backToLogin.addEventListener("click", function (e) {
        forgetPasswordSmall.style = "display:none";
        loginSmall.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    }, false)

    //寄送信箱
    $('.forgetPasswordSmall form').on("submit", function (e) {
        var form = $(this);
        $.ajax({
            type: "Post",
            url: "system/user_forget.php",
            data: form.serialize(),
            success: function (response) {
                alert("寄送成功")
                forgetPasswordSmall.style = "display:none"
                cover.style = "display:none"
                document.querySelector("body").style = "  overflow-y: scroll"
            },
            error: function (err) {
                console.log(err);
                alert("寄送失敗")
            },
        });

        e.preventDefault()
    })

}

//就醫提問單

let questionAskStr = `
    <div class="questionCompletedCard ">
        <div class="title">
            <small>就醫提問單</small>
            <img src="../../pic/Common/cancelWhite.png" alt="">
        </div>
        <h3>結果</h3>
        <small>填寫時間：<span></span></small>
        <div class="bigIcon">
            <img src="../../pic/Common/CommonCard/bigIcon4.png" alt="">
        </div>
        <div class="result1">
            <div class="resultTitle">
                <h5>一. 在意程度</h5>
                <p>關於癌症治療，我在意的程度是：（排序分數越低代表越在意）</p>
            </div>
            <div class="resultRank">
                <div class="col">No.1 <span>健保是否給付</span></div>
                <div class="col">No.2 <span>需要額外自費</span></div>
                <div class="col">No.3 <span>治療的效果</span></div>
                <div class="col">No.4 <span>治療的副作用</span></div>
                <div class="col">No.5 <span>生活品質</span></div>
            </div>
        </div>

        <div class="result2">
            <div class="resultTitle">
                <h5>二. 在意問題</h5>
                <p>關於癌症治療，我在意的問題是：</p>
            </div>
            <div class="resultRank">
                <div class="col">我的診斷是什麼？</div>
                <div class="col">為什麼要做基因檢測?</div>
                <div class="col">我可以接受哪些治療？</div>
                <div class="col">我年紀大了，會建議開刀嗎?</div>
                <div class="col">什麼情況下建議做化療?我的情況建議做嗎？</div>
            </div>
        </div>
        <div class="btnGroup">
            <input type="button" class="close" value="返回首頁" name="" id="">
        </div>
    </div>
    <div class="questionCardWrap">
        <div class="questionCard">
            <div class="title">
                <small>就醫提問單</small>
                <img src="../../pic/Common/cancelWhite.png" alt="">
            </div>
            <h3>Hello</h3>
            <p>就醫提問單的簡單介紹，就醫提問單的簡單介紹，就醫提問單的簡單介紹。</p>
            <div class="bigIcon">
                <img src="../../pic/Common/questionBigIcon.png" alt="">
            </div>
            <div class="questionBtnGroup">
                <input type="button" value="開始提問">
            </div>
        </div>
    </div>
    <div class="askQuestionCard">
        <div class="title">
            <small>就醫提問單</small>
            <img src="../../pic/Common/cancelWhite.png" alt="">
        </div>
        <div class="radioGroup">
            <input type="radio" class="radioActive">
            <input type="radio">
        </div>

        <form action="system/questionStore.php" class="questionForm">
            <div class="frame1">
                <div class="title2">
                    <h4>在意程度</h4>
                    <small>為了幫助您更了解大腸癌的相關問題，請回答以下資訊：</small>
                </div>

                <h5>A. 自我評估</h5>
                <p>再進行治療選擇時，請評估對下面各面向您在意的程度點選分數。（五分最在意）</p>
                <div class="question question1">
                    <label for="">1. <span>治療的效果</span></label>
                    <div class="btnGroup">
                        <input type="button" name="question1" value="1">
                        <input type="button" name="question1" value="2">
                        <input class="btnActive" type="button" name="question1" value="3">
                        <input type="button" name="question1" value="4">
                        <input type="button" name="question1" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>
                <div class="question question2">
                    <label for="">2. <span>健保是否給付</span> </label>
                    <div class="btnGroup">

                        <input type="button" name="question2" value="1">
                        <input type="button" name="question2" value="2">
                        <input class="btnActive" type="button" name="question2" value="3">
                        <input type="button" name="question2" value="4">
                        <input type="button" name="question2" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>
                <div class="question question3">
                    <label for="">3. <span>需要額外自費</span></label>
                    <div class="btnGroup">

                        <input type="button" name="question3" value="1">
                        <input type="button" name="question3" value="2">
                        <input class="btnActive" type="button" name="question3" value="3">
                        <input type="button" name="question3" value="4">
                        <input type="button" name="question3" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>
                <div class="question question4">
                    <label for="">4. <span>治療的副作用</span></label>
                    <div class="btnGroup">

                        <input type="button" name="question4" value="1">
                        <input type="button" name="question4" value="2">
                        <input class="btnActive" type="button" name="question4" value="3">
                        <input type="button" name="question4" value="4">
                        <input type="button" name="question4" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>
                <div class="question question5">
                    <label for="">5. <span>生活品質</span></label>
                    <div class="btnGroup">

                        <input type="button" name="question5" value="1">
                        <input type="button" name="question5" value="2">
                        <input class="btnActive" type="button" name="question5" value="3">
                        <input type="button" name="question5" value="4">
                        <input type="button" name="question5" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>


                <h5>B. 優先排序</h5>
                <p>進行治療選擇時，請依照在意程度手動排序下方的相關面向。長按項目重新排序，最在意的項目在上，最不在意的項目在下。</p>
                <div class="rank">
                    <div class="rankBtn" draggable="true">
                        <div class="text">
                            <div class="circle"></div>
                            <input class="rankHide" type = "hidden" name="rank1" value="">
                            <div class="h4">健保是否給付</div>
                        </div>
                        <img src="../../pic/Common/barTwo.png" alt="">
                    </div>
                    <div class="rankBtn" draggable="true">
                        <div class="text">
                            <div class="circle"></div>
                            <input class="rankHide" type = "hidden" name="rank2" value="">
                            <div class="h4">需要額外自費</div>
                        </div>
                        <img src="../../pic/Common/barTwo.png" alt="">
                    </div>
                    <div class="rankBtn" draggable="true">
                        <div class="text">
                            <div class="circle"></div>
                             <input class="rankHide" type= "hidden" name="rank3" value="">
                            <div class="h4">治療的效果</div>
                        </div>
                        <img src="../../pic/Common/barTwo.png" alt="">
                    </div>
                    <div class="rankBtn" draggable="true">
                        <div class="text">
                            <div class="circle"></div>
                             <input class="rankHide" type= "hidden" name="rank4" value="">
                            <div class="h4">生活品質</div>
                        </div>
                        <img src="../../pic/Common/barTwo.png" alt="">
                    </div>
                    <div class="rankBtn" draggable="true">
                        <div class="text">
                            <div class="circle"></div>
                             <input class="rankHide" type= "hidden" name="rank5" value="">
                            <div class="h4">治療的副作用</div>
                        </div>
                        <img src="../../pic/Common/barTwo.png" alt="">
                    </div>
                </div>
                <div class="BtnGroup">
                    <input type="button" value="下一步">
                </div>
            </div>
            <div class="frame2">
                <div class="title2">
                    <h4>在意問題</h4>
                    <small>針對問卷回饋，我們已整理出相關的問題，請選擇您目前最急迫想知道的問題（最多可選擇 5 題）</small>
                </div>
                <div class="question question1">
                    <h6 for="">1. 篩檢與分期</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox" value="我的診斷是什麼 ?" name="groupA1[]" id="groupA1-1">
                            <label for="groupA1-1">我的診斷是什麼 ? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="我是屬於哪一期的？ " name="groupA1[]" id="groupA1-2">
                            <label for="groupA1-2">我是屬於哪一期的？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="癌指數(CEA)是什麼?" name="groupA1[]" id="groupA1-3">
                            <label for="groupA1-3">癌指數(CEA)是什麼? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="癌症是否已轉移？如果是，轉移到哪裡？" name="groupA1[]" id="groupA1-4">
                            <label for="groupA1-4">癌症是否已轉移？如果是，轉移到哪裡？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="目前在台灣，罹患腸癌的年齡有越來越年輕的趨勢嗎？" name="groupA1[]" id="groupA1-5">
                            <label for="groupA1-5">目前在台灣，罹患腸癌的年齡有越來越年輕的趨勢嗎？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="年輕就罹患腸癌的患者是不是存活率較差?" name="groupA1[]" id="groupA1-6">
                            <label for="groupA1-6">年輕就罹患腸癌的患者是不是存活率較差?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="年紀大的人得腸癌，治療上有什麼不一樣？" name="groupA1[]" id="groupA1-7">
                            <label for="groupA1-7">年紀大的人得腸癌，治療上有什麼不一樣？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="如果得了腸癌延誤治療或放著不管，會怎麼樣？" name="groupA1[]" id="groupA1-8">
                            <label for="groupA1-8">如果得了腸癌延誤治療或放著不管，會怎麼樣？ </label>
                        </div>

                    </div>
                </div>

                <div class="question question2">
                    <h6 for="">2. 精準醫療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox" value="為什麼要做基因檢測?" name="groupA2[]" id="groupA2-1">
                            <label for="groupA2-1">為什麼要做基因檢測? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="K-RAS基因檢測是做什麼用的?" name="groupA2[]" id="groupA2-2">
                            <label for="groupA2-2">K-RAS基因檢測是做什麼用的? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="基因檢測的流程有哪些? 報告會很久才出來嗎?" name="groupA2[]" id="groupA2-3">
                            <label for="groupA2-3">基因檢測的流程有哪些? 報告會很久才出來嗎? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="如果我想得到最好的治療，有哪些重點是需要掌握的？" name="groupA2[]" id="groupA2-4">
                            <label for="groupA2-4">如果我想得到最好的治療，有哪些重點是需要掌握的？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="醫生是如何為我擬定治療計畫的？" name="groupA2[]" id="groupA2-5">
                            <label for="groupA2-5">醫生是如何為我擬定治療計畫的？ </label>
                        </div>


                    </div>
                </div>

                <div class="hr"></div>
                <h5>B. 開始接受治療</h5>

                <div class="question question3">
                    <h6 for="">1. 討論治療選擇</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox" value="我可以接受哪些治療？" name="groupB1[]" id="groupB1-1" >
                            <label for="groupB1-1">我可以接受哪些治療？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="我的治療如何進行？多久作一次？需持續多久？" name="groupB1[]" id="groupB1-2" >
                            <label for="groupB1-2">我的治療如何進行？多久作一次？需持續多久？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="我需要改變生活作息嗎(例如:可以繼續上班嗎？)如果需要改變，要多久？" name="groupB1[]" id="groupB1-3">
                            <label for="groupB1-3">我需要改變生活作息嗎(例如:可以繼續上班嗎？)如果需要改變，要多久？</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="治療的花費健保是否給付？需自費多少？" name="groupB1[]" id="groupB1-4">
                            <label for="groupB1-4">治療的花費健保是否給付？需自費多少？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="是否有新的療法？臨床試驗適合我嗎？" name="groupB1[]" id="groupB1-5">
                            <label for="groupB1-5">是否有新的療法？臨床試驗適合我嗎？ </label>
                        </div>
                    </div>
                </div>

                <div class="question question4">
                    <h6 for="">2. 手術治療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox" value="我年紀大了，會建議開刀嗎? " name="groupB2[]" id="groupB2-1">
                            <label for="groupB2-1">我年紀大了，會建議開刀嗎? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="手術前的注意事項有哪些? " name="groupB2[]" id="groupB2-2">
                            <label for="groupB2-2">手術前的注意事項有哪些? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="手術切除直腸後，常見的術後緩解方法有?" name="groupB2[]" id="groupB2-3">
                            <label for="groupB2-3">手術切除直腸後，常見的術後緩解方法有?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="什麼事腸造口? 如何照顧?" name="groupB2[]" id="groupB2-4">
                            <label for="groupB2-4">什麼事腸造口? 如何照顧? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="什麼狀況下須裝置永久腸造口?" name="groupB2[]" id="groupB2-5">
                            <label for="groupB2-5">什麼狀況下須裝置永久腸造口? </label>
                        </div>

                        <div class="chechbox">
                            <input type="checkbox" value="什麼狀況下須裝置臨時腸造口? 多久可以關閉? " name="groupB2[]" id="groupB2-6">
                            <label for="groupB2-6">什麼狀況下須裝置臨時腸造口? 多久可以關閉? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="什麼狀況下須裝置人工血管?" name="groupB2[]" id="groupB2-7">
                            <label for="groupB2-7">什麼狀況下須裝置人工血管? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="腸造口本身一定會有異味嗎?" name="groupB2[]" id="groupB2-8">
                            <label for="groupB2-8">腸造口本身一定會有異味嗎?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="腸造口的腸變小是正常的嗎?" name="groupB2[]" id="groupB2-9">
                            <label for="groupB2-9">腸造口的腸變小是正常的嗎?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="做完手術是否不能飲食?或只吃流質呢?" name="groupB2[]" id="groupB2-10">
                            <label for="groupB2-10">做完手術是否不能飲食?或只吃流質呢?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="腸術前/術後如何調整飲食? 基本觀念為何?" name="groupB2[]" id="groupB2-11">
                            <label for="groupB2-11">腸術前/術後如何調整飲食? 基本觀念為何?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="裝置人工肛門的患者，飲食上有沒有什麼禁忌呢?" name="groupB2[]" id="groupB2-12">
                            <label for="groupB2-12">裝置人工肛門的患者，飲食上有沒有什麼禁忌呢?</label>
                        </div>
                    </div>
                </div>

                <div class="question question5">
                    <h6 for="">3. 化學治療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox" >
                            <input type="checkbox" value="什麼情況下建議做化療?我的情況建議做嗎？" name="groupB3[]" id="groupB3-1">
                            <label for="groupB3-1">什麼情況下建議做化療?我的情況建議做嗎？</label>
                        </div>
                        <div class="chechbox" >
                            <input type="checkbox" value="切腸手術之後，一般須等多久才建議開始化療?" name="groupB3[]" id="groupB3-2">
                            <label for="groupB3-2">切腸手術之後，一般須等多久才建議開始化療?</label>
                        </div>
                        <div class="chechbox" >
                            <input type="checkbox" value="臨常見的腸癌化療藥物有哪些？" name="groupB3[]" id="groupB3-3">
                            <label for="groupB3-3">臨常見的腸癌化療藥物有哪些？</label>
                        </div>
                        <div class="chechbox" >
                            <input type="checkbox" value="化療常見的副作用有哪些? 會持續多久? " name="groupB3[]" id="groupB3-4">
                            <label for="groupB3-4">化療常見的副作用有哪些? 會持續多久? </label>
                        </div>
                        <div class="chechbox" >
                            <input type="checkbox" value="如果我做化療，會搭配其他治療一起做嗎?" name="groupB3[]" id="groupB3-5">
                            <label for="groupB3-5">如果我做化療，會搭配其他治療一起做嗎?</label>
                        </div>

                        <div class="chechbox" >
                            <input type="checkbox" value="化療過程中帶來的不舒服要怎麼減輕？有辦法避免嗎？" name="groupB3[]" id="groupB3-6">
                            <label for="groupB3-6">化療過程中帶來的不舒服要怎麼減輕？有辦法避免嗎？ </label>
                        </div>
                        <div class="chechbox" >
                            <input type="checkbox" value="手足症候群是什麼？如果發生了要怎麼處理？" name="groupB3[]" id="groupB3-7">
                            <label for="groupB3-7">手足症候群是什麼？如果發生了要怎麼處理？</label>
                        </div>
                        <div class="chechbox" >
                            <input type="checkbox" value="療程結束後何時移除人工血管比較好？" name="groupB3[]" id="groupB3-8">
                            <label for="groupB3-8">療程結束後何時移除人工血管比較好？</label>
                        </div>
                    </div>
                </div>

                <div class="question question6">
                    <h6 for="">4. 放射性治療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox" value="什麼是腸癌放射線治療？哪些人需要做?" name="groupB4[]" id="groupB4-1">
                            <label for="groupB4-1">什麼是腸癌放射線治療？哪些人需要做?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="放射線治療期間我應該注意什麼呢?" name="groupB4[]" id="groupB4-2">
                            <label for="groupB4-2">放射線治療期間我應該注意什麼呢?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="放射線治療常見副作用和照護?" name="groupB4[]" id="groupB4-3">
                            <label for="groupB4-3">放射線治療常見副作用和照護?</label>
                        </div>

                    </div>
                </div>

                <div class="question question7">
                    <h6 for="">5. 標靶治療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox" value="何時會用到標靶治療?" name="groupB5[]" id="groupB5-1">
                            <label for="groupB5-1">何時會用到標靶治療?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="常見腸癌的標靶藥物有哪些? 療效如何?" name="groupB5[]" id="groupB5-2">
                            <label for="groupB5-2">常見腸癌的標靶藥物有哪些? 療效如何?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="標靶治療會有哪些副作用呢? 該如何照護?" name="groupB5[]" id="groupB5-3">
                            <label for="groupB5-3">標靶治療會有哪些副作用呢? 該如何照護?</label>
                        </div>

                        <div class="chechbox">
                            <input type="checkbox" value="療程中如何知道標靶藥失效或出現抗藥性？如果出現了就是復發嗎？" name="groupB5[]" id="groupB5-4">
                            <label for="groupB5-4">療程中如何知道標靶藥失效或出現抗藥性？如果出現了就是復發嗎？</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="生物相似藥是什麼？" name="groupB5[]" id="groupB5-5">
                            <label for="groupB5-5">生物相似藥是什麼？</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="生物相似藥效果和原廠藥品一樣嗎?" name="groupB5[]" id="groupB5-6">
                            <label for="groupB5-6">生物相似藥效果和原廠藥品一樣嗎?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="療程中被換藥我會知道嗎? 我可以選擇嗎? 該注意什麼?" name="groupB5[]" id="groupB5-7">
                            <label for="groupB5-7">療程中被換藥我會知道嗎? 我可以選擇嗎? 該注意什麼?</label>
                        </div>

                    </div>
                </div>

                <div class="question question8">
                    <h6 for="">6. 免疫療法</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox" value="什麼是免疫療法?" name="groupB6[]" id="groupB6-1">
                            <label for="groupB6-1">什麼是免疫療法?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="什麼狀況下我可以考慮接受免疫療法嗎?" name="groupB6[]" id="groupB6-2">
                            <label for="groupB6-2">什麼狀況下我可以考慮接受免疫療法嗎?</label>
                        </div>


                    </div>
                </div>

                <h5>C. 結束治療</h5>
                <div class="question question9">
                    <h6 for="">治療後的照護</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox" value="要多久追蹤一次?" name="groupC1[]" id="groupC1-1">
                            <label for="groupC1-1">要多久追蹤一次?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="如何預防復發?" name="groupC1[]" id="groupC1-2">
                            <label for="groupC1-2">如何預防復發?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="大腸癌術後復健運動建議?" name="groupC1[]" id="groupC1-3">
                            <label for="groupC1-3">大腸癌術後復健運動建議?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="有造口要怎麼辦? 如何照護?" name="groupC1[]" id="groupC1-4">
                            <label for="groupC1-4">有造口要怎麼辦? 如何照護?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="治療後的飲食如何吃呢? 營養該如何維持?" name="groupC1[]" id="groupC1-5">
                            <label for="groupC1-5">治療後的飲食如何吃呢? 營養該如何維持?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="市面上癌症營養品如何挑選? 使用原則是什麼?" name="groupC1[]" id="groupC1-6">
                            <label for="groupC1-6">市面上癌症營養品如何挑選? 使用原則是什麼?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="裝置人工肛門的患者，飲食上有沒有什麼禁忌呢?" name="groupC1[]" id="groupC1-7">
                            <label for="groupC1-7">裝置人工肛門的患者，飲食上有沒有什麼禁忌呢?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="我能夠吃中藥或是保健食品嗎?" name="groupC1[]" id="groupC1-8">
                            <label for="groupC1-8">我能夠吃中藥或是保健食品嗎?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox" value="吃素的癌友對於營養品友那些選擇?" name="groupC1[]" id="groupC1-9">
                            <label for="groupC1-9">吃素的癌友對於營養品友那些選擇?</label>
                        </div>


                    </div>
                </div>

                <div class="btnGroup">
                    <input type="button" class="pre" value="上一步">
                    <input type="submit" class="c2 resultBtn" value="下一步">
                </div>
            </div>
            <input type="hidden" class = "resultNo resultNo1" name = "No1" value="">
            <input type="hidden" class = "resultNo resultNo2" name = "No2" value="">
            <input type="hidden" class = "resultNo resultNo3" name = "No3" value="">
            <input type="hidden" class = "resultNo resultNo4" name = "No4" value="">
            <input type="hidden" class = "resultNo resultNo5" name = "No5" value="">
            <input type="hidden" class = "hideEmail" name = "hideEmail" value="">
            <input type="hidden" class = "hideUserName" name = "hideUserName" value="">

        </form>
    </div>
`;

//連結開啟
askQuestionLink = document.querySelectorAll(".askQuestionLink")
if (askQuestionLink) {
    askQuestionLink.forEach(function (element) {
        element.addEventListener("click", function (e) {
            e.preventDefault();
            menum.style = "display:none"
            menu1.style = "display:none";
            cover.style = "display:block"
            document.querySelector(".questionCard").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        }, false)
    })
}

let questionAsk = document.querySelector(".questionAsk");
if (questionAsk) {
    questionAsk.innerHTML = questionAskStr;

    //開啟
    let startAskBtn = document.querySelector(".questionCard .questionBtnGroup input")
    startAskBtn.addEventListener("click", function (e) {
        document.querySelector(".questionCard").style = "display:none"
        document.querySelector(".askQuestionCard").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        document.querySelector("body").style = "  overflow-y: scroll"
    }, false)
    //關閉
    let closeStartAskBtn = document.querySelector(".questionCard .title img")
    closeStartAskBtn.addEventListener("click", function (e) {
        document.querySelector(".questionCard").style = "display:none"
        cover.style = "display:none"
        document.querySelector("body").style = "  overflow-y: scroll"
    }, false)
    let askQuestionCardCloseBtn = document.querySelector(".askQuestionCard .title img ")
    askQuestionCardCloseBtn.addEventListener("click", function (e) {
        document.querySelector(".askQuestionCard").style = "display:none"
        cover.style = "display:none"
        document.querySelector("body").style = "  overflow-y: scroll"
    }, false)
    //排序拖曳



    let rankBtn = document.querySelectorAll(".rank .rankBtn")
    //開始先抓一次
    let rankBtnE = document.querySelectorAll(".rank .rankBtn")
    for (let i = 0; i < rankBtn.length; i++) {
        rankBtnE[i].children[0].children[0].textContent = i + 1;
        rankBtnE[i].children[0].children[0].value = 5 - i;
    }
    $(function () {
        $(".frame1 .rank").sortable({
            touchStartThreshold: 3,
            update: function (e) {
                let rankBtnE = document.querySelectorAll(".rank .rankBtn")
                for (let i = 0; i < rankBtn.length; i++) {
                    rankBtnE[i].children[0].children[0].textContent = i + 1;
                    rankBtnE[i].children[0].children[1].value = 5 - i;
                }
            }
        });

    });

   
    //frame2 
    //加總
    let question1 = document.querySelectorAll(".frame1 .question1 input");
    let question1Text = document.querySelector(".frame1 .question1 label span").textContent;
    console.log(question1Text);
    let question1Val = null
    question1.forEach(function (element) {
        if (element.classList.contains("btnActive")) {
            question1Val = parseInt(element.value)
        }
    })

    let question2 = document.querySelectorAll(".frame1 .question2 input");
    let question2Text = document.querySelector(".frame1 .question2 label span").textContent;
    let question2Val = null
    question2.forEach(function (element) {
        if (element.classList.contains("btnActive")) {
            question2Val = parseInt(element.value)
        }
    })


    let question3 = document.querySelectorAll(".frame1 .question3 input");
    let question3Text = document.querySelector(".frame1 .question3 label span").textContent;
    let question3Val = null
    question3.forEach(function (element) {
        if (element.classList.contains("btnActive")) {
            question3Val = parseInt(element.value)
        }
    })


    let question4 = document.querySelectorAll(".frame1 .question4 input");
    let question4Text = document.querySelector(".frame1 .question4 label span").textContent;
    let question4Val = null
    question4.forEach(function (element) {
        if (element.classList.contains("btnActive")) {
            question4Val = parseInt(element.value)
        }
    })


    let question5 = document.querySelectorAll(".frame1 .question5 input");
    let question5Text = document.querySelector(".frame1 .question5 label span").textContent;
    let question5Val = null
    question5.forEach(function (element) {
        if (element.classList.contains("btnActive")) {
            question5Val = parseInt(element.value)
        }
    })

    //frame1
    frame1BtnGroup = document.querySelectorAll(".question .btnGroup")
    if (frame1BtnGroup) {
        frame1BtnGroup.forEach(function (element) {

            for (let i = 0; i < element.children.length; i++) {

                element.children[i].addEventListener("click", function (e) {
                    for (let i = 0; i < element.children.length; i++) {
                        element.children[i].classList.remove("btnActive")
                    }
                    this.classList.add("btnActive")

                    //算數
                    question1.forEach(function (element) {
                        if (element.classList.contains("btnActive")) {
                            question1Val = parseInt(element.value)
                        }
                    })
                    question2.forEach(function (element) {
                        if (element.classList.contains("btnActive")) {
                            question2Val = parseInt(element.value)
                        }
                    })
                    question3.forEach(function (element) {
                        if (element.classList.contains("btnActive")) {
                            question3Val = parseInt(element.value)
                        }
                    })
                    question4.forEach(function (element) {
                        if (element.classList.contains("btnActive")) {
                            question4Val = parseInt(element.value)
                        }
                    })
                    question5.forEach(function (element) {
                        if (element.classList.contains("btnActive")) {
                            question5Val = parseInt(element.value)
                        }
                    })
                }, false)
            }
        })
    }
    //1到2
    let rankobj = {};
    let Frame1ToFrame2Btn = document.querySelector(".frame1 .BtnGroup input")
    if (Frame1ToFrame2Btn) {
        Frame1ToFrame2Btn.addEventListener("click", function (e) {
            //上面的滾動條
            document.querySelector(".askQuestionCard .radioGroup").children[0].classList.remove("radioActive")
            document.querySelector(".askQuestionCard .radioGroup").children[1].classList.add("radioActive")
            //
            let rankHide = document.querySelectorAll(".rankBtn .rankHide")
            rankHide.forEach(function (element) {
                let rankText = element.parentNode.children[2].textContent;

                let rankValue = element.value;

                console.log(rankText, rankValue);
                console.log(rankValue);
                if (rankText.trim() == question1Text.trim()) {
                    question1Val += rankValue;
                }
                if (rankText.trim() == question2Text.trim()) {
                    question2Val += rankValue;
                }
                if (rankText.trim() == question3Text.trim()) {
                    question3Val += rankValue;
                }
                if (rankText.trim() == question4Text.trim()) {
                    question4Val += rankValue;
                }
                if (rankText.trim() == question5Text.trim()) {
                    question5Val += rankValue;
                }


            })


            ranks = [
                {
                    name: "治療的效果",
                    number: question1Val
                },
                {
                    name: "健保是否給付",
                    number: question2Val
                },
                {
                    name: "需要額外自費",
                    number: question3Val
                },
                {
                    name: "治療的副作用",
                    number: question4Val
                },
                {
                    name: "生活品質",
                    number: question5Val
                },
            ]
            for (let i = 0; i < ranks.length; i++) {
                for (let j = i; j > 0; j--) {
                    if (ranks[j].number > ranks[j - 1].number) {
                        [ranks[j - 1], ranks[j]] = [ranks[j], ranks[j - 1]]
                    }

                }
            }

            resultNo1 = document.querySelector(".resultNo1");
            resultNo2 = document.querySelector(".resultNo2");
            resultNo3 = document.querySelector(".resultNo3");
            resultNo4 = document.querySelector(".resultNo4");
            resultNo5 = document.querySelector(".resultNo5");

            resultNo1.value = ranks[0].name;
            resultNo2.value = ranks[1].name;
            resultNo3.value = ranks[2].name;
            resultNo4.value = ranks[3].name;
            resultNo5.value = ranks[4].name;


            document.querySelector(".questionAsk .frame1").style = "display:none";
            document.querySelector(".questionAsk .frame2").style = "display:block";

        }, false)
    }


    let Frame2ToFrame1Btn = document.querySelector(".frame2 .btnGroup .pre");
    Frame2ToFrame1Btn.addEventListener("click", function (e) {
        //上面的滾動條
        document.querySelector(".askQuestionCard .radioGroup").children[0].classList.add("radioActive")
        document.querySelector(".askQuestionCard .radioGroup").children[1].classList.remove("radioActive")
        //
        document.querySelector(".questionAsk .frame1").style = "display:block";
        document.querySelector(".questionAsk .frame2").style = "display:none";
    }, false)

    let hideEmail = document.querySelector(".questionAsk .hideEmail");
    hideEmail.value = getCookieByName("email");
    let hideUserName = document.querySelector(".questionAsk .hideUserName");
    hideUserName.value = getCookieByName("username");
    $('.questionForm').on("submit", function (e) {
        e.preventDefault()
        var form = $(this);
        let array = form.serialize();
        $.ajax({
            type: "Post",
            url: "system/questionStore.php",
            data: array,
            success: function (response) {
                console.log(response);
                //時間
                let date = new Date();
                let timeStr = date.getFullYear() + "." + parseInt(date.getMonth() + 1) + "." + date.getDate() + "  " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds()
                document.querySelector(".questionCompletedCard small span").textContent = timeStr;
                //排序
                let questionCompletedCard = document.querySelector(".questionCompletedCard");
                questionCompletedCardResult1 = document.querySelector(".questionCompletedCard .result1")
                for (let i = 0; i < 5; i++) {
                    questionCompletedCardResult1.children[1].children[i].children[0].textContent = ranks[i].name
                }

                //問答
                questionCompletedCardResult2 = document.querySelector(".questionCompletedCard .result2")
                let questions = document.querySelectorAll(".chechbox input")
                let questionStr = "";
                questions.forEach(function (element) {
                    if (element.checked) {
                        questionStr += `<div class='col'>${element.value}</div>`
                    }
                })
                questionCompletedCardResult2.children[1].innerHTML = questionStr

                document.querySelector(".askQuestionCard").style = "display:none";
                questionCompletedCard.style = "display:block";


            },
            error: function (err) {
                console.log(err);
            },
        });
    })
}




//完成關閉
let questionCompletedCardCloseImg = document.querySelector(".questionCompletedCard .title img");
if (questionCompletedCardCloseImg) {
    questionCompletedCardCloseImg.addEventListener("click", function (e) {
        document.querySelector(".questionCompletedCard").style = "display:none";
        cover.style = "display:none";
        document.querySelector("body").style = "  overflow-y: scroll"
    }, false)
}

let questionCompletedCardCloseBtn = document.querySelector(".questionCompletedCard .btnGroup input")
if (questionCompletedCardCloseBtn) {
    questionCompletedCardCloseBtn.addEventListener("click", function (e) {
        document.querySelector(".questionCompletedCard").style = "display:none";
        cover.style = "display:none";
        document.querySelector("body").style = "  overflow-y: scroll"
    }, false)
}

//分頁
let paginationStr = `
<div class="numberGroup">

                </div>
                <div class="next">
                    <img src="../../pic/Common/next.svg" alt="">
                </div>
`;



let pagination = document.querySelector('.pagination')
if (pagination) {
    pagination.innerHTML = paginationStr;
}



//通用卡片關閉
let closeCommonCard = document.querySelectorAll('.commonCard .title img');

let commonCard = document.querySelectorAll(".commonCard");
if (closeCommonCard) {
    closeCommonCard.forEach(function (element) {
        element.addEventListener("click", function (e) {
            commonCard.forEach(function (element) {
                element.style = "display:none"
            })
            cover.style = "display:none";
            document.querySelector("body").style = "  overflow-y: scroll"
        }, false)
    })

}

//通用卡片手機板關閉
let commonCardSmall = document.querySelectorAll(".commonCardSmall");
if (commonCardSmall) {

    let commonTitleSmallImg = document.querySelectorAll(".commonTitleSmall img");
    commonTitleSmallImg.forEach(function (element) {
        element.addEventListener("click", function (e) {
            commonCardSmall.forEach(function (element2) {
                element2.style = "display:none"
            })

            cover.style = "display:none"
            document.querySelector("body").style = "  overflow-y: scroll"
        }, false)
    })


}

//桌機板

if (getCookieByName('username')) {
    let titleText = document.querySelector(".menu  .logged h5");
    titleText.textContent = getCookieByName('username');
    let title = document.querySelector(".menu  .logged h6");
    title = getCookieByName('loginStatus');
}



if (getCookieByName('username') && getCookieByName('loginStatus') == 1) {

    document.querySelector(".menum .login").style = "display:block"
    document.querySelector(".menu .right .login").style = "display:none"
    document.querySelector(".menu .right .logged").style = "display:block"
    document.querySelector(".menum .loginInBtn").style = "display:none"
    document.querySelector(".menum .loginOutBtn").style = "display:block"
}

//手機板
if (getCookieByName('username') && getCookieByName('loginStatus') == 1) {
    document.querySelector(".menu1 .RWDHide").style = "display:block";


}
