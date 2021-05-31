<?php
print_r($_POST);

if(isset($_POST["submit"])){
    file_put_contents("./post.txt",$_POST["name"]." ".$_POST["body"] .PHP_EOL,FILE_APPEND);
}
?>
<html>
    <head>
        <title>Todo suply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
        <div>
            <form method="post">
                名前<br>
                    <input type="text" name="name">
                <br>
                内容<br>
                    <textarea name="body"cols="30" rows="10"></textarea>
                    <br>
                    <input type="submit" name="submit" value="submit">

            </form>
        </div>
    </body>
</html>