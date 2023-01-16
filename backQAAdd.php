<?php
include  'db/db.php';
$sql = "SELECT * FROM `QA`";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>新增QA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body>
	<div class="backMenu"></div>
	<div class="container text-center">
		<h1>新增QA</h1>
		<form action="system/backAddQAStore.php" method="post">


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
				<label for="title" class="form-label">QA標題</label>
				<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="">
			</div>

			<div class="mb-3">
				<label for="content" class="form-label">QA內容 : </label><br>
				<textarea class="editor" name="content" id="content" cols="60" rows="10"></textarea>
			</div>

			<input type="submit" value="儲存" class="btn btn-outline-success">
			<a class="btn btn-outline-secondary" href="back_article.html">取消</a>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
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

	if (!getCookieByName('username')) {
		window.location.href = "index.php";
	}

	let editor = document.querySelector(".editor");

	editor.setData('<p>Some text.</p>');

	editor.addEventListener("input", function(e) {
		console.log(this.value.length);
		if (this.value.length > 150) {
			console.log(this.value.substr(0, 150));
			this.value = this.value.substr(0, 150);
			alert("超過150字")
		}

	}, false)

	function checkLength(which) {
		var maxChars = 150; //
		if (which.value.length > maxChars) {
			alert("您出入的字數超多限制!");
			// 超過限制的字數了就將 文字框中的內容按規定的字數 擷取
			which.value = which.value.substring(0, maxChars);
			return false;
		} else {
			var curr = maxChars - which.value.length; //250 減去 當前輸入的
			document.getElementByIdx_x("sy").innerHTML = curr.toString();
			return true;
		}
	}
</script>

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




	function getCookieByName(name) {
		var value = parseCookie()[name];
		if (value) {
			value = decodeURIComponent(value);
		}

		return value;
	}

	CommonBack()
</script>