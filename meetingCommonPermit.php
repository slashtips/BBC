<?php
include 'db/db.php';
$id = $_GET['i'];
$sql = "SELECT * FROM `meeting` WHERE `id` = $id";
$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>



    </style>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">

</head>

<body>

    <div class="cookie"></div>
    <div class="cover"></div>

    <div class="menum"></div>
    <div class="menuWrap">
        <div class="menu"></div>
    </div>
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mee">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>
    <link rel="stylesheet" href="css/meeting.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <div class="bigTitle">
        <h1><?php echo $row['title'] ?></h1>
    </div>
    <div class="wrapp">
        <div class="left">
            <div class="top">
                <div class="option">
                    <a href="meeting.html">
 
                    </a>
                </div>
                <div class="source">
                    <small>資訊來源：台癌基金會</small>
                </div>
            </div>
            <div class="hrs"></div>
            <div class="meetingContent">
                <div class="media">
                    <img src="pic/Common/pageT1.png" alt="">
                </div>
                <form action="" class="showForm">
                    <?php echo $row['content'] ?>
                </form>
            </div>

        </div>

        <div class="right">
            <div class="catelog2">
                <div class="meetingCatelog">
                    <h2>會議目錄</h2>
                    <ul>
                        <li><a href="#">asdasd</a></li>
                    </ul>
                </div>
                <div class="relatedMeeting">
                    <h2>相關會議</h2>
                    <div class="card">
                        <a href="#">
                            <img src="" alt="">
                            <div class="cardText">
                                <h3>asdasd</h3>
                                <p>asda</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="" alt="">
                            <div class="cardText">
                                <h3>asdasd</h3>
                                <p>asda</p>
                            </div>
                        </a>
                    </div>
                </div>ㄋ
            </div>

        </div>

    </div>
    <div class="footer"></div>
    <script src="js/common.js"></script>
    <script src="js/article.js"></script>
</body>

</html>

<script>
    let countDiv = document.querySelectorAll(".countDiv");
    let inputname = [];
    if (countDiv) {
        countDiv.forEach(function(element) {
            console.log(element);
            inputname.push(element.dataset.inputname)
        }, false)
    }


    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "system/MeetingPermitCreateDB.php",
            data: {
                "inputname": inputname,
                "id": <?php echo $id; ?>,
            },
            success: function(response) {
                alert("批准成功");
                window.location.href = "backMeetingPermit.php";

            },
            error: function(error) {
                alert("批准失敗");
                alert(error);
                window.location.href = "backMeetingPermit.php";
            },
        });
    });

    console.log(inputname);
</script>