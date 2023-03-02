<?php
include  '../db/db.php';

extract($_FILES['imgPath']);

$img_name = md5(time()); //建立亂數檔名
$ext = pathinfo($name, PATHINFO_EXTENSION); //取得副檔名
$fullname = $img_name . '.' . $ext; //合併檔名+副檔名



$folder = '../store/meetingImg/'; //上傳路徑
$target = $folder . $fullname; // 目標路徑
$path = 'store/meetingImg/' . $fullname;
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


if ($_FILES['picture']) {

    extract($_FILES['picture']);

    $img_name = md5(time()); //建立亂數檔名
    $ext2 = pathinfo($name, PATHINFO_EXTENSION); //取得副檔名
    $fullname = $img_name . '_.' . $ext2; //合併檔名+副檔名




    $folder = '../store/meetingImg/'; //上傳路徑
    $target = $folder . $fullname; // 目標路徑
    $path2 = 'store/meetingImg/' . $fullname;
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

$source = $_POST["source"];
$content = $_POST["content"];
$tag = $_POST["tag"];
$video = $_POST["video"];
$form = $_POST["form"];
$date = $_POST["date"];
$location = $_POST["location"];
$meetingTime = $_POST["meetingTime"];
date_default_timezone_set('Asia/Taipei'); //時區
$date0 = date("Y-m-d H:i:s"); //日期
$status = 1;
$publish = 1;

date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `meeting` ( `title`,`topicSec`, `source`, `content`, `status`, `publish`, `tag`, `imgPath`, `picture`, `video`, `form`, `date`,`location`, `createTime`, `updateTime`) VALUES ( '$title','會議活動', '$source', '$content', '1', '1', '$tag', '$path', '$path2', '$video', '$form', '$date', '$location', '$date0', '$date0');";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


echo "<script> alert('文章新增成功，請等候批准');window.location.href='../back_meeting.html'; </script>";
exit;
