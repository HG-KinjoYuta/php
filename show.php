<?php
require_once("./class/TaskDetails.php");

$id = $_GET['id'];

$taskDetails = new TaskDetails();

$taskDetailsArray = $taskDetails->getTaskDetails($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>詳細</title>
</head>
<body>
<div class="content_wrap">
    <p><?php print $taskDetailsArray['content'];?></p>
</div>
<form>
<button type='submit' formaction='./edit.php' formmethod='GET' name='id' value='<?php print $taskDetailsArray['id']; ?>'>編集</button>
<button type='submit' formaction='./destroy.php' formmethod='POST' name='id' value='<?php print $taskDetailsArray['id']; ?>'>削除</button>
</form>
<a href="./index.php">一覧へ</a>

</body>
</html>