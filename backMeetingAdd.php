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
	<title>新增會議</title>
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
		<h1>新增會議</h1>
		<form action="system/backMeetingAdd.php" method="post" enctype="multipart/form-data">

			<div class="mb-3">
				<label for="title" class="form-label">會議名稱</label>
				<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="">
			</div>


			<div class="mb-3">
				<label for="source" class="form-label">資料來源</label>
				<input type="text" name="source" class="form-control" id="source" aria-describedby="emailHelp" value="">
			</div>


			<div class="mb-3">
				<div class="row">
					<div class="col-12">
						<label for="tag" class="form-label">標籤</label>
						<select class="form-select" id="tag" name="tag" aria-label="Default select example">
							<option value="進行中">進行中</option>
							<option value="即將到來">即將到來</option>
							<option value="已結束">已結束</option>
						</select>
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="meetingTime" class="form-label">會議時間</label>
				<input type="datetime-local" class="dateThis" name='date' value="">
			</div>

			<div class="mb-3">
				<label for="location" class="form-label">會議地點</label>
				<input type="text" name="location" class="form-control" id="location" aria-describedby="emailHelp" value="">
			</div>

			<div class="mb-3">
				<label for="imgPath" class="form-label">封面圖片</label>
				<input class="form-control" type="file" id="imgPath" name="imgPath" accept="image/*" type="file">
			</div>

			<div class="mb-3">
				<label for="formFile" class="form-label">會議內文圖片</label>
				<input class="form-control" type="file" name="picture" id="picture" accept="image/*" type="file">
			</div>

			<div class="mb-3">
				<label for="video" class="form-label">影片嵌入</label><br>
				<input type="text" name="video" class="form-control" id="video" aria-describedby="basic-addon3">
			</div>

			<div class="mb-3">
				<label for="form" class="form-label">嵌入Google表單</label><br>
				<input type="text" name="form" class="form-control" id="form" aria-describedby="basic-addon3">
			</div>
			<div class="mb-3">
				<label for="content" class="form-label">內容</label><br>
				<textarea class="editor" name="content" id="content" cols="60" rows="10"></textarea>
			</div>



			<input type="submit" value="儲存" class="btn btn-outline-success">
			<a class="btn btn-outline-secondary" href="back_meeting.html">取消</a>
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
</script>

</html>
<script src="js/back.js"></script>
<script src="js/backF.js"></script>
<script>ForceLogout()</script>
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
	CookieShow();

</script>