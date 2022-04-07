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
    <title>編集</title>
</head>
<body>
    <h1>編集</h1>
    <form method="POST" action="./update.php">
    <textarea name="content" required><?php print $taskDetailsArray['content']; ?></textarea><br>
    <button name="id" value="<?php print $id; ?>">編集</button>
    </form>
    <a href="./show.php?id=<?php print $id;?>">戻る</a>
</body>
</html>