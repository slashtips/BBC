<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人主頁</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/personal.css">
    <link rel="stylesheet" href="css/common.css">


    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .password {
            position: relative;
        }

        .password .personalEye {
            position: absolute;
            top: 47%;
            right: 5%;
            transform: translateY(-50%);
            z-index: 99999;
        }

        .upload {
            position: relative;
            overflow: hidden;
        }

        .photoSticker {
            text-align: center;
        }

        .photoSticker small {
            text-align: center;
            color: #aaa;
            width: 100%;
            margin: 0 auto;
        }

        .personalEye {
            display: none;
        }
    </style>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
    integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

<body>
    <div class="cookie"></div>
    <div class="cover"></div>
    <div class="OutHref"></div>

    <div class="menum"></div>
    <div class="menu"></div>
    <div class="loginH"></div>
    <div class="register"></div>
    <div class="questionAsk"></div>
    <div class="commonCard openPass"></div>
    <div class="commonCard forgetPassword"></div>

    <div class="commonCardSmall registerSmall"></div>
    <div class="commonCardSmall openPassSmall"></div>
    <div class="commonCardSmall forgetPasswordSmall"></div>
    <div class="menu1"></div>

    <div class="wrap">
        <div class="big">
            <h1>個人主頁</h1>
            <img src="pic/personal/bigIcon.png" alt="">

        </div>
        <div class="info">
            <form class="UpdateForm" action="system/personalUpdate.php" method="post" enctype="multipart/form-data">
                <div class="photoSticker">
                    <div class="circle">
                        <img src="" alt="">
                    </div>
                    <small>圖片的最佳比例為1:1，例如:500x500、320x320</small>
                </div>
                <div class="edit">
                    <input type="file" name="photo" onchange="selfile();" id="uploadPhoto" accept="image/*">
                    <label class="upload" for="uploadPhoto">
                        <img src="pic/personal/upload.png" alt="">
                        <h5>上傳頭像</h5>
                        <!-- <div class="bar" id="bar"></div>
                        <div class="barText" id="barText">50%</div> -->
                    </label>

                    <div class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="pic/personal/trash.png" alt="">
                        <h5>刪除頭像</h5>
                    </div>
                </div>

                <div class="name">
                    <div class="firstName">
                        <label for="firstName">姓氏*</label>
                        <input id="firstName" name="firstName" type="text">
                    </div>
                    <div class="lastName">
                        <label for="lastName">名字*</label>
                        <input id="lastName" name="lastName" type="text">
                    </div>
                </div>
                <div class="email">
                    <label for="email">Email信箱*</label>
                    <input id="email" name="email" type="email" disabled>
                </div>

                <div class="password">
                    <label for="password">密碼*</label>
                    <input id="password" name="password" type="password" placeholder="* * * * * *" disabled="true">

                </div>
                <div class="resetPassword">
                    <a href="#">重設密碼</a>

                </div>

                <div class="comminicate">
                    <h3>醫護交流群組</h3>
                    <div class="card">
                        <img src="pic/personal/icon1.png" alt="">
                        <h4>個管師交流社團</h4>
                    </div>
                    <div class="card">
                        <img src="pic/personal/icon2.png" alt="">
                        <h4>個管師交流群組</h4>
                    </div>
                    <div class="card">
                        <img src="pic/personal/icon3.png" alt="">
                        <h4>會議與與工作坊</h4>
                    </div>
                </div>
                <div class="infoBtnGroup">
                    <input type="button" class="back" value="取消">
                    <input class="updateBtn" type="submit" value="更新">
                </div>

            </form>


        </div>
    </div>

    <div class="footer"></div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">刪除頭像</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    確定刪除嗎 ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                    <button type="button" class="btn btn-danger modal-delete">確定</button>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="js/common.js"></script>

</html>

<script>
    let backk = document.querySelector(".infoBtnGroup .back");
    if (backk) {
        backk.addEventListener("click", function (e) {
            window.location.href = "MedicalArea.php"
        }, false)
    }

    let id = "";
    let photoPathP = "";
    let password = "";
    $(document).ready(function () {


        $.ajax({
            type: "Post",
            url: "system/personalInfo.php",

            success: function (response) {
                console.log(response);

                let response_arr = response.split(',');
                id = response_arr[0];
                let firstName = response_arr[1];
                let lastName = response_arr[2];
                let email = response_arr[3];
                password = response_arr[4];
                let date = response_arr[5];
                let status = response_arr[6];
                let title = response_arr[7];
                photoPathP = response_arr[8];

                //大頭貼
                let photo = document.querySelector(".info .photoSticker .circle img");
                photo.src = photoPathP
                let inputFirstName = document.querySelector(".info .name .firstName input");
                inputFirstName.setAttribute("value", firstName);
                let inputLastName = document.querySelector(".info .name .lastName input");
                inputLastName.setAttribute("value", lastName);
                let inputEmail = document.querySelector(".info .email input");
                inputEmail.setAttribute("placeholder", email);



            },
            error: function (err) {
                console.log(err);
            },
        });



        let modalDelete = document.querySelector(".modal-delete");
        modalDelete.addEventListener("click", function (e) {

            $.ajax({
                type: "POST",
                url: "system/personalDelete.php",
                success: function (response) {
                    console.log(response);
                    alert("刪除成功");
                    window.location.reload();
                }
            });

        }, false)

    })



    //重設密碼
    let resetPassword = document.querySelector(".resetPassword");
    if (resetPassword) {
        resetPassword.addEventListener("click", function (e) {
            e.preventDefault();
            resetPassword.children[0].textContent = "取消重設密碼"
            if (document.querySelector("#password").disabled == false) {
                document.querySelector("#password").disabled = true
                resetPassword.children[0].textContent = "重設密碼"
                document.querySelector("#password").value = password;
            } else {
                document.querySelector("#password").disabled = false;
            }

        }, false)
    }
  
    if (!getCookieByName('username')) {
        window.location.href = "index.php";
    }





    //圖片預覽
    $(document).ready(function () {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(".photoSticker img").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                document.querySelector(".upload h5").textContent = input.files[0].name;
            }
        }
        //7
        $("#uploadPhoto").change(function () {
            //當檔案改變後，做一些事 

            readURL(this); // this代表<input id="imgInp">
        });
    });

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
            <b>聯絡資訊</b><br>
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