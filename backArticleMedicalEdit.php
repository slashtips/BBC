<?php
include 'db/db.php';

$sql = "SELECT * FROM `articleM` where `id` = '$_GET[id]' order by `id` DESC";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

$title = "";
$source = "";
$video = "";
$content = "";
foreach ($res as $row) {
	$title = $row['title'];
	$source = $row['source'];
	$video = $row['video'];
	$content = $row['content'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>編輯文章</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body>
	<div class="backMenu"></div>
	<div class="container text-center">
		<h1>編輯文章</h1>
		<form action="system/backArticleMedicalEditSuccess.php" method="post" enctype="multipart/form-data">

			<div class="col-12 topicSec">
				<label for="topicSec" class="form-label">標籤</label>
				<select class="form-select" id="topicSec" name="topicSec" aria-label="Default select example">
					<option value="腸癌治療">腸癌治療</option>
					<option value="腸癌照護">腸癌照護</option>
					<option value="癌症分期">癌症分期</option>
					<option value="副作用">副作用</option>
					<option value="生活品質">生活品質</option>
					<option value="營養健康">營養健康</option>
				</select>
			</div>


			<div class="mb-3">
				<label for="title" class="form-label">文章標題</label>
				<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp"
					value="<?php echo $title ?>">
			</div>
			<div class="mb-3">
				<label for="source" class="form-label">資訊來源 : </label><br>
				<input type="text" name="source" class="form-control" id="source" aria-describedby="basic-addon3"
					value="<?php echo $source ?>">
			</div>

			<div class="mb-3 ">
				<label for="">背景圖片</label>
				<div class="d-flex">
					<input class="form-control " disabled type="file" id="formFile" name="articlePath" accept="image/*"
						type="file">
					<input type="checkbox" class="btn-check" id="backgroundBtn" autocomplete="off">
					<label class="btn btn-outline-primary " style="white-space:nowrap;"
						for="backgroundBtn">更換</label><br>
				</div>

			</div>

			<div class="mb-3 ">
				<label for="">文章圖片</label>
				<div class="d-flex">
					<input class="form-control" disabled type="file" name="picture" id="picture" accept="image/*"
						type="file">
					<input type="checkbox" class="btn-check" id="articlePicBtn" autocomplete="off">
					<label class="btn btn-outline-primary  " style="white-space:nowrap;"
						for="articlePicBtn">更換</label><br>
				</div>
			</div>

			<div class="mb-3">
				<label for="video" class="form-label">影片遷入</label><br>
				<input type="text" name="video" class="form-control" id="video" value="<?php echo $video ?>"
					aria-describedby="basic-addon3">
			</div>

			<div class="mb-3">
				<label for="content" class="form-label">文章內容 : </label><br>
				<textarea class="editor" name="content" id="content" cols="60"
					rows="10"><?php echo $content; ?></textarea>
			</div>

			<input type="submit" value="儲存" class="btn btn-outline-success">
			<a class="btn btn-outline-secondary" href="backArticleEditInfo.php">取消</a>
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
	crossorigin="anonymous"></script>


<script src="include/CkeEditor/build/ckeditor.js"></script>
<script>
	const watchdog = new CKSource.EditorWatchdog();

	window.watchdog = watchdog;

	watchdog.setCreator((element, config) => {
		return CKSource.Editor
			.create(element, config)
			.then(editor => {
				return editor;
			})
	});

	watchdog.setDestructor(editor => {
		return editor.destroy();
	});

	watchdog.on('error', handleError);

	watchdog
		.create(document.querySelector('.editor'), {

			licenseKey: '',
		})
		.catch(handleError);


	function handleError(error) {
		console.error('Oops, something went wrong!');
		console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
		console.warn('Build id: o4gf688yeo0p-bs15lyxfaktr');
		console.error(error);
	}


	//更換圖片按鈕
	let backgroundBtn = document.querySelector("#backgroundBtn");
	if (backgroundBtn) {
		backgroundBtn.addEventListener("click", function (e) {
			if (this.checked == true) {
				document.querySelector("#formFile").disabled = false;
			} else {
				document.querySelector("#formFile").disabled = true;
			}
		}, false)
	}
	//更換文章圖片
	let articlePicBtn = document.querySelector("#articlePicBtn");
	if (articlePicBtn) {
		articlePicBtn.addEventListener("click", function (e) {
			if (this.checked == true) {
				document.querySelector("#picture").disabled = false;
			} else {
				document.querySelector("#picture").disabled = true;
			}
		}, false)
	}


	let topicSecStr1 = `
		<label for="topicSec" class="form-label">主題分類</label>
						<select class="form-select" id="topicSec" name="topicSec" aria-label="Default select example">
							<option value="疾病篩檢">疾病篩檢</option>
							<option value="疾病症狀">疾病症狀</option>
						</select>
	`;
	let topicSecStr2 = `
		<label for="topicSec" class="form-label">主題分類</label>
						<select class="form-select" id="topicSec" name="topicSec" aria-label="Default select example">
							<option value="病理報告">病理報告</option>
							<option value="影像學">影像學</option>
							<option value="基因測試">基因測試</option>
							<option value="癌症分期">癌症分期</option>
						</select>
	`;
	let topicSecStr3 = `
		<label for="topicSec" class="form-label">主題分類</label>
						<select class="form-select" id="topicSec" name="topicSec" aria-label="Default select example">
							<option value="化學藥物治療">化學藥物治療</option>
							<option value="手術治療">手術治療</option>
							<option value="放射治療">放射治療</option>
							<option value="標靶治療">標靶治療</option>
						</select>
	`;
	let topicSecStr4 = `
		<label for="topicSec" class="form-label">主題分類</label>
						<select class="form-select" id="topicSec" name="topicSec" aria-label="Default select example">
							<option value="手術後照護">手術後照護</option>
							<option value="副作用管理">副作用管理</option>
							<option value="營養建議">營養建議</option>
						</select>
	`;
	let topicSecStr5 = `
		<label for="topicSec" class="form-label">主題分類</label>
						<select class="form-select" id="topicSec" name="topicSec" aria-label="Default select example">
							<option value="心理健康">心理健康</option>
							<option value="社會資源">社會資源</option>
							<option value="癌症資源中心">癌症資源中心</option>
							<option value="個人化精準醫療">個人化精準醫療</option>
						</select>
	`;

	let topic = document.querySelector(".topic")
	let topicSec = document.querySelector(".topicSec");
	topic.addEventListener("change", function (e) {
		if (topic.value == "1. 症狀察覺") {
			topicSec.innerHTML = topicSecStr1;
		}
		if (topic.value == "2. 疾病診斷") {
			topicSec.innerHTML = topicSecStr2;
		}
		if (topic.value == "3. 治療種類") {
			topicSec.innerHTML = topicSecStr3;
		}
		if (topic.value == "4. 後續追蹤") {
			topicSec.innerHTML = topicSecStr4;
		}
		if (topic.value == "5. 腸癌照護") {
			topicSec.innerHTML = topicSecStr5;
		}

	}, false)
</script>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
	integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>

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




	function getCookieByName(name) {
		var value = parseCookie()[name];
		if (value) {
			value = decodeURIComponent(value);
		}

		return value;
	}

	CommonBack()
</script>