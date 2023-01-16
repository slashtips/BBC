<?php
include 'db/db.php';
$sql = "SELECT * FROM `SMTP`";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

$SMTP_Server = "";
$Port = "";
$Send_ID = "";
$SMTP_Email = "";

$Reply_Email = "";

foreach ($res as $row) {
    $SMTP_Server = $row['SMTP_Server'];
    $Port = $row['Port'];
    $Send_ID = $row['Send_ID'];
    $SMTP_Email = $row['SMTP_Email'];

    $Reply_Email = $row['Reply_Email'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMTP設置</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style>
        .SP {
            position: relative;
        }

        .SP .eye {
            position: absolute;
            right: 1%;
            top: 70%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>


    <div class="backMenu"></div>
    <div class="container text-center">

        <form class="SMTPForm" action="system/backSMTP.php" method="post">
            <h1>SMTP設定</h1>
            <div class="mb-3">
                <label for="SMTP_Server" class="form-label">Host</label>
                <input type="text" name="SMTP_Server" class="form-control" id="SMTP_Server" aria-describedby="emailHelp"
                    value="<?php echo $row['SMTP_Server']; ?>">
            </div>

            <div class="mb-3">
                <label for="Port" class="form-label">Port</label>
                <input type="text" name="Port" class="form-control" id="Port" aria-describedby="emailHelp"
                    value="<?php echo $row['Port']; ?>">
            </div>

            <div class="mb-3">
                <label for="Send_ID" class="form-label">Username</label>
                <input type="text" name="Send_ID" class="form-control" id="Send_ID" aria-describedby="emailHelp"
                    value="<?php echo $row['Send_ID']; ?>">
            </div>

            <div class="mb-3">
                <label for="SMTP_Email" class="form-label">From</label>
                <input type="text" name="SMTP_Email" class="form-control" id="SMTP_Email" aria-describedby="emailHelp"
                    value="<?php echo $row['SMTP_Email']; ?>">
            </div>

            <div class="mb-3 SP">
                <label for="SMTP_Password" class="form-label">Password</label>
                <input type="password" name="SMTP_Password" class="form-control" id="SMTP_Password"
                    aria-describedby="emailHelp" value="">
            
            </div>

            <div class="mb-3">
                <label for="Reply_Email" class="form-label">Reply</label>
                <input type="text" name="Reply_Email" class="form-control" id="Reply_Email" aria-describedby="emailHelp"
                    value="<?php echo $row['Reply_Email']; ?>">
            </div>






            <input type="submit" value="修改" class="btn btn-outline-success">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                SMTP 測試
            </button>
            <a class="btn btn-outline-secondary" href="back_permission.html">取消</a>
        </form>


    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">SMTP測試</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="receiveMailDiv d-flex">
                        <label for="receiveMail">收件帳號 : </label>
                        <input class="ms-2" type="text" id="receiveMail">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                    <button type="button" class="btn btn-primary SendEmail">寄測試信</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
    integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>

</html>
<script src="js/back.js"></script>

<script>
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


    $(document).ready(function () {
        $(".SMTPForm").on("submit", function (e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                type: "POST",
                url: "system/backSMTP.php",
                data: form.serialize(),
                success: function (response) {
                    alert("SMTP修改成功");
                    location.reload();
                }
            });
        })
    });


    function getCookieByName(name) {
        var value = parseCookie()[name];
        if (value) {
            value = decodeURIComponent(value);
        }

        return value;
    }

    CommonBack()


    //SMTP測試
    let SendEmail = document.querySelector(".SendEmail");
    SendEmail.addEventListener("click", function (e) {
        let EmailValue = document.querySelector("#receiveMail").value;
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "system/mailSupport.php",
                data: {
                    Email: EmailValue
                },
                success: function (response) {
                    alert("寄送成功")
                }
            });
        });
    }, false)
</script>