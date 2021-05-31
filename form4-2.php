<?php
/**
 * ### 4 発展
 * 4-2 送信ボタンを押した時にJavaScriptで確認ダイアログを表示する   (window.confirmを使う)
 * 「メッセージ」の内容を変更してみる
 * 表示されたダイアログで、キャンセルを押せば送信されない。OKを押すと送信される動作を確認する
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
		<title>4-2 送信ボタンを押した時にJavaScriptで確認ダイアログを表示する   (window.confirmを使う)</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
			function formSend() {
				if (!window.confirm('メッセージ')) {
					return false
				}
				return true;
			}
		</script>
	</head>
	<body>
		<form method="post" onsubmit="return formSend()">
			名前:<br />
			<input type="text" name="name" size="50"><br />
			内容:<br />
			<textarea name="body" rows="5" cols="50"></textarea>
			<br /><br />
			<input type="submit" name="submit" value="送信">
		</form>
	</body>
</html>
