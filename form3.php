<?php

// slackに送る関数を定義
function sendToSlack($message) {
	$webhook_url = 'https://hooks.slack.com/services/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';
	$options = array(
		'http' => array(
			'method' => 'POST',
			'header' => 'Content-Type: application/json',
			'content' => json_encode($message),
		)
	);
	$response = file_get_contents($webhook_url, false, stream_context_create($options));
	return $response === 'ok';
}

// POSTされた時の処理
if (isset($_POST["submit"])) {
	$message = array(
		'username' => 'Bot',
		'text' => "名前:{$_POST["name"]} 内容:{$_POST["body"]}",
	);
	sendToSlack($message);
}
?><!DOCTYPE html>
<html>
	<head>
		<title>### 3 送信したらSlackへ通知(PHP)</title>
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
