<?php

if ($_FILES['pic']['error'] > 0) {
    exit("上傳檔案有錯" . $_FILES['pic']['error']);
}

$path = './upload/';

$name = $_FILES['pic']['name'];

// 將檔案的名字的字元編碼從UTF-8轉成GB2312
$name = iconv("UTF-8", "GB2312", $name);

// 將上傳檔案移動到指定目錄檔案中
if (move_uploaded_file($_FILES['pic']['tmp_name'], $path . $name)) {
    echo "檔案上傳成功";
} else {
    echo "檔案上傳失敗";
}
