<?php
include '../db/db.php';


$title = $_POST["title"];
$content = $_POST["content"];
$source = $_POST["source"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期


date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `article` ( `title`, `content`, `source`, `createTime`, `updateTime`) VALUES ( '$title', '$content', '$source', '$date', '$date');";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

$sqlU = "SELECT * FROM `article`  ORDER BY id DESC LIMIT 0 , 1";
$resU = $db->query($sqlU);
$resU->setFetchMode(PDO::FETCH_ASSOC);
$id = "";
foreach ($resU as $rowU) {
    $id = $rowU['id'];
}


$url = "test{$id}.php";
if ($res) {
    $fp = fopen("../{$url}", "w+");
    $str = '
    <?php include  "db/db.php";
    $sqlA = "SELECT * FROM `article` WHERE id = ' . $id . ';";
    $resA = mysqli_query($connect, $sqlA);
    $rowA = mysqli_fetch_array($resA);
    ?>
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . '<?php echo $rowA["title"];?>' . '</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">


</head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<img src="" alt="">

<body>

    <div class="cover"></div>
    <div class="menum"></div>
    <div class="menuWrap">
        <div class="menu"></div>
    </div>
    <div class="loginH"></div>
    <div class="register"></div>
    <div class="commonCard openPass"></div>
    <div class="commonCard forgetPassword"></div>


    <div class="topic">
        <div class="text">
            <h3>' . '<?php echo $rowA["topic"];?>' . '</h3>
            <h1>' . '<?php echo $rowA["title"];?>' . '</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/Common/robot.png" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <small>資訊來源：' . '<?php echo $rowA["source"];?>' . '</small>
 
                </div>
                   <div class="hr"></div>

                ' . '<?php echo $rowA["content"];?>' . '
              

            </div>


            <div class="contnetBottom">

            </div>

        </div>

        <div class="catelog"></div>

    </div>




    <div class="menuArticleSmall">
        <div class="menuArticleSmallBtnGroup">
            <img src="pic/Common/menuArticleSmallBtn1.svg" alt="">
            <img src="pic/Common/menuArticleSmallBtn2.svg" alt="">
            <img src="pic/Common/menuArticleSmallBtn3.svg" alt="">
        </div>
    </div>

    <div class="fansCard">
        <div class="fansTitle">
            <h3>分享至</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="fnas">
            <a href=""><img src="pic/Common/facebook.svg" alt=""></a>
            <a href=""><img src="pic/Common/line.svg" alt=""></a>
        </div>
    </div>

    <div class="catelogCard">
    </div>
    <div class="footer">
    </div>

</body>


<script src="js/common.js"></script>
<script src="js/article.js"></script>

</html>';

    fwrite($fp, $str) or die("錯誤");




    header("Location:../{$url}");
    exit;
}