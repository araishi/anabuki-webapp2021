<?php
/**
 * ### 4 発展
 * 4-4 必須項目の入力チェックをPHPで行う
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
		<title>4-4 必須項目の入力チェックをPHPで行う</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			#wrapper{
				width:80%; margin:10px auto;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<?php if ($error) { ?>
				<div class="alert alert-danger"><?php echo $error ?></div>
			<?php } ?>
			<form method="post">
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
