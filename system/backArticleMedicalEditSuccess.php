<?php
include '../db/db.php';
$id = $_POST["id"];
$sqlS = "SELECT * FROM `articleM` WHERE `id` = $id";

$resS = $db->query($sqlS);
$resS->setFetchMode(PDO::FETCH_ASSOC);


$articlePathOld = "";
$videoOld = "";
$pictureOld = "";


foreach ($resS as $rowS) {
    $articlePathOld = $rows['articlePath'];
    $videoOld = $rows['video'];
    $pictureOld = $rows['picture'];
}



if ($_FILES['articlePath']) {
    unlink("../" . $articlePathOld);
    extract($_FILES['articlePath']);
    $img_name = md5(time()); //建立亂數檔名
    $ext = pathinfo($name, PATHINFO_EXTENSION); //取得副檔名
    $fullname = $img_name . '.' . $ext; //合併檔名+副檔名





    $folder = '../store/articleImg/'; //上傳路徑
    $target = $folder . $fullname; // 目標路徑

    $path = 'store/articleImg/' . $fullname;
    echo $path;
    if (!is_dir($folder)) {
        mkdir($folder);
        //若資料夾不存在就建立資料夾
    }


    switch ($error) {
        case 0:
            if (move_uploaded_file($tmp_name, $target)) {
            } else {
                echo '<script>alert("檔案上傳失敗")</script>';
            }
            break;
        case 1:
            echo '上傳檔案過大(伺服器限制)';
            break;
        // 不會顯示出來 會直接報錯
        case 2:
            echo '上傳檔案過大(表單限制)';
            break;
        case 3:
            echo '只有部分上傳';
            break;
        case 4:
            echo '請選擇檔案';
            break;
        case 6:
            echo '遺失暫存資料夾';
            break;
        case 7:
            echo '無法寫入';
            break;
        case 8:
            echo '不支援檔案上傳';
            break;
    }
}




if ($_FILES['picture']) {
    unlink("../" . $pictureOld);
    extract($_FILES['picture']);

    $img_name = md5(time()); //建立亂數檔名
    $ext2 = pathinfo($name, PATHINFO_EXTENSION); //取得副檔名
    $fullname = $img_name . '_.' . $ext2; //合併檔名+副檔名

    //判斷圖片格式



    $folder = '../store/articleImg/'; //上傳路徑
    $target = $folder . $fullname; // 目標路徑
    $path2 = 'store/articleImg/' . $fullname;
    echo $path2;
    if (!is_dir($folder)) {
        mkdir($folder);
        //若資料夾不存在就建立資料夾
    }



    switch ($error) {
        case 0:
            if (move_uploaded_file($tmp_name, $target)) {
            } else {
                echo '<script>alert("檔案上傳失敗")</script>';
            }
            break;
        case 1:
            echo '上傳檔案過大(伺服器限制)';
            break;
        // 不會顯示出來 會直接報錯
        case 2:
            echo '上傳檔案過大(表單限制)';
            break;
        case 3:
            echo '只有部分上傳';
            break;
        case 4:
            echo '請選擇檔案';
            break;
        case 6:
            echo '遺失暫存資料夾';
            break;
        case 7:
            echo '無法寫入';
            break;
        case 8:
            echo '不支援檔案上傳';
            break;
    }
}


$title = $_POST["title"];
$topicSec = $_POST["topicSec"];

$content = $_POST["content"];
$source = $_POST["source"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期

$body = $_POST["body"];
date_default_timezone_set('Asia/Taipei'); //時區

$video = $_POST["video"];
if ($path && $path2) {
    $sql = "UPDATE `articleM` SET `topicSec` = '$topicSec', `title` = '$title', `content` = '$content', `source` = '$source', `articlePath` = '$path', `video` = '$video', `picture` = '$path2' WHERE `articleM`.`id` = $id;";
} else if ($path) {
    $sql = "UPDATE `articleM` SET `topicSec` = '$topicSec', `title` = '$title', `content` = '$content', `source` = '$source', `articlePath` = '$path', `video` = '$video' WHERE `articleM`.`id` = $id;";
} else if ($path2) {
    $sql = "UPDATE `articleM` SET `topicSec` = '$topicSec', `title` = '$title', `content` = '$content', `source` = '$source', `video` = '$video', `picture` = '$path2' WHERE `articleM`.`id` = $id;";
} else {
    $sql = "UPDATE `articleM` SET `topicSec` = '$topicSec', `title` = '$title', `content` = '$content', `source` = '$source', `video` = '$video' WHERE `articleM`.`id` = $id;";
}

echo $sql;
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);
header("Location:../backArticleMedicalEditInfo.php");