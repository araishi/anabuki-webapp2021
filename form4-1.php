<?php
/**
 * ### 4 発展
 * 4-1 select、radio、checkbox (それぞれ項目と値は自分で考えて変更してみる)
 */
// POSTされた時の処理
if (isset($_POST["submit"])) {
	// logディレクトリの作成はform.phpで行っているので省略

	// 各要素の値を受け取って$dataに代入し、./log/log.txtに書き込みましょう
	$data = ""; 
	file_put_contents("./log/log.txt", $data, FILE_APPEND);
}
?><!DOCTYPE html>
<html>
	<head>
		<title>4-1 select、radio、checkbox (それぞれ項目と値は自分で考えて変更してみる)</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form method="post">
			名前:<br />
			<input type="text" name="name" size="50"><br /><br />
			性別:<br />
			<select name="sei">
				<option value="">--</option>
				<option value="男性">男性</option>
				<option value="女性">女性</option>
			</select><br /><br />
			アンケート1<br />
			<input type="radio" name="question1" value="答え1">答え1
			<input type="radio" name="question1" value="答え2">答え2
			<br /><br />
			アンケート2<br />
			<input type="checkbox" name="question2[]" value="答え3">答え3
			<input type="checkbox" name="question2[]" value="答え4">答え4
			<br /><br />
			内容:<br />
			<textarea name="body" rows="5" cols="50"></textarea>
			<br /><br />
			<input type="submit" name="submit" value="送信">
		</form>
	</body>
</html>
