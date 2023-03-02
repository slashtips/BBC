<?php
include  'db/db.php';
$sql = "SELECT * FROM `article`";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>新增醫護園地文章</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<style>
		.cookieHide{
            display: none;
        }
	</style>
</head>

<body>
	<div class="backMenu"></div>
	<div class="container text-center cookieHide">
		<h1>新增醫護園地文章</h1>
		<form action="system/backArticleMedicalAddStore.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<div class="row">
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
				</div>
			</div>

			<div class="mb-3">
				<label for="title" class="form-label">文章標題</label>
				<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="">
			</div>
			<div class="mb-3">
				<label for="source" class="form-label">資訊來源 : </label><br>
				<input type="text" name="source" class="form-control" id="source" aria-describedby="basic-addon3">
			</div>

			<div class="mb-3">
				<label for="formFile" class="form-label">封面圖片</label>
				<input class="form-control" type="file" id="formFile" name="articlePath" accept="image/*" type="file" placeholder="可接受 .jpg、.png、.gif 等圖檔">
			</div>

			<div class="mb-3">
				<label for="formFile" class="form-label">文章圖片</label>
				<input class="form-control" type="file" name="picture" id="picture" accept="image/*" type="file" placeholder="可接受 .jpg、.png、.gif 等圖檔">
			</div>

			<div class="mb-3">
				<label for="video" class="form-label">影片遷入</label><br>
				<input type="text" name="video" class="form-control" id="video" aria-describedby="basic-addon3">
			</div>


			<div class="mb-3">
				<label for="content" class="form-label">文章內容 : </label><br>
				<textarea class="editor" name="content" id="content" cols="60" rows="10"></textarea>
			</div>

			<input type="submit" value="儲存" class="btn btn-outline-success">
			<a class="btn btn-outline-secondary" href="back_articleMedical.html">取消</a>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
<script src="include/CkeEditor/build/ckeditor.js"></script>
<script src="js/back.js"></script>
<script src="js/backF.js"></script>
<script>ForceLogout()</script>
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
</script>

</html>


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
	CookieShow()
</script>