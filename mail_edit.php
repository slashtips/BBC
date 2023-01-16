<?php
include 'db/db.php';
$sql = "SELECT * FROM `article`";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

$topic = "";
$content = "";

foreach ($res as $row) {
	$topic = $row['topic'];
	$content = $row['content'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>信件編輯</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body>
	<div class="container text-center">
		<h1>信件編輯</h1>
		<form action="system/mail/mail_edit_success.php" method="post">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">信件標題</label>
				<input type="text" name="subject" class="form-control" id="exampleInputEmail1"
					aria-describedby="emailHelp" value="<?php echo $topic ?>">
			</div>
			<div class="mb-3">
				<label for="body" class="form-label">內文</label><br>
				<textarea class="editor" name="body" id="body" cols="60" rows="10"><?php echo $content; ?></textarea>
			</div>
			<input type="submit" value="編輯" class="btn btn-outline-success">
			<a class="btn btn-outline-secondary" href="back.php">取消</a>
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
</script>

</html>