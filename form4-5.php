<?php
/**
 * ### 4 発展
 * 4-5 必須項目の入力チェックをJavaScriptでも行う  (jQueryを使うと楽ちん)
 */
$error = "";
// POSTされた時の処理
if (isset($_POST["submit"])) {
	// 入力チェックを行う
	if ($_POST["name"] == "") {
		$error .= "名前が入力されていません。<br>";
	}
	if ($_POST["body"] == "") {
		$error .= "内容が入力されていません。<br>";
	}
	// selectやradio、checkboxも追加してエラーチェックしてみましょう
	// $errorが空なら正常と判断してファイルに書込み
	if ($error == "") {
		// logディレクトリの作成はform.phpで行っているので省略
		// 各要素の値を受け取って$dataに代入し、./log/log.txtに書き込みましょう
		$data = "";
		file_put_contents("./log/log.txt", $data, FILE_APPEND);
	}
}
?><!DOCTYPE html>
<html>
	<head>
		<title>4-5 必須項目の入力チェックをJavaScriptでも行う  (jQueryを使うと楽ちん)</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script
			src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
			integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
		crossorigin="anonymous"></script>
		<style>
			#wrapper{
				width:80%; margin:10px auto;
			}
		</style>
		<script>
			function formSend() {
				var error = "";
				if ($("#name").val() == "") {
					error += "名前を入力してください。\n";
				}
				if ($("#body").val() == "") {
					error += "内容を入力してください。\n";
				}
				if (error) {
					alert(error);
					return false;
				}
				if (!window.confirm('メッセージ')) {
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body>
		<div id="wrapper">
			<?php if ($error) { ?>
				<div class="alert alert-danger"><?php echo $error ?></div>
			<?php } ?>
			<form method="post" onsubmit="return formSend()">
				<div class="form-group">
					<label for="name">名前</label>
					<input type="text" class="form-control" id="name" placeholder="名前" name="name">
				</div>
				<div class="form-group">
					<label for="body">内容</label>
					<textarea class="form-control" id="body" rows="3" name="body"></textarea>
				</div>
				<input type="submit" name="submit" value="送信" class="btn btn-primary" style="width:100%;">
			</form>
		</div>
	</body>
</html>
