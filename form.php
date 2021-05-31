<?php
// POSTされた時の処理
if (isset($_POST["submit"])) {

	// logディレクトリを作成
	if (!is_dir("./log/")) {
		mkdir("./log/"); // ※実行してpermissionのエラーが出る場合には20210426のディレクトリに書き込み権限が必要
		// logディレクトリに書き込み権限をつける
		chmod("./log/", 0777);
	}

	// ./log/log.txtに内容を書き込み
	$data = "名前:{$_POST["name"]} 内容:{$_POST["body"]}" . PHP_EOL;
	file_put_contents("./log/log.txt", $data, FILE_APPEND);
}
?><!DOCTYPE html>
<html>
	<head>
		<title>### 2 フォームを作る(HTML)</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form method="post">
			名前:<br />
			<input type="text" name="name" size="50"><br />
			内容:<br />
			<textarea name="body" rows="5" cols="50"></textarea>
			<br /><br />
			<input type="submit" name="submit" value="送信">
		</form>
	</body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

