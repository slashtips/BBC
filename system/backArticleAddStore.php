
<?php
include  '../db/db.php';

extract($_FILES['articlePath']);

$img_name = md5(time()); //建立亂數檔名
$ext = pathinfo($name, PATHINFO_EXTENSION); //取得副檔名
$fullname = $img_name . '.' . $ext; //合併檔名+副檔名





$folder = '../store/articleImg/'; //上傳路徑
$target = $folder . $fullname; // 目標路徑
$path = 'store/articleImg/' . $fullname;
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





    $folder = '../store/articleImg/'; //上傳路徑
    $target = $folder . $fullname; // 目標路徑
    $path2 = 'store/articleImg/' . $fullname;
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
$video = $_POST["video"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期
$status = 1;
$publish = 1;

date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `article` ( `topicSec`,`title`, `content`, `source`,`articlePath`,`video`,`picture`,`status`,`publish`, `createTime`, `updateTime`) VALUES (  :topicSec, :title, :content, :source,:path,:video,:path2,'$status','$publish', '$date', '$date');";

$stmt = $db->prepare($sql);

$stmt->bindValue(':topicSec', $topicSec);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':content', $content);
$stmt->bindValue(':source', $source);
$stmt->bindValue(':path', $path);
$stmt->bindValue(':video', $video);
$stmt->bindValue(':path2', $path2);
$stmt->execute();
$query = $stmt->fetchAll();



echo "<script> alert('文章新增成功');window.location.href='../back_articleArticleIndex.html'; </script>";
exit;
