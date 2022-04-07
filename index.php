<?php
require_once("./class/TasksList.php");
$tasks = new TasksList();
$tasksList = $tasks->getAllTasks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>タスク一覧</title>
</head>
<body>
    <a href="./new.php">新規作成</a>
    <br>
    <form>
    <?php
        foreach($tasksList as $task)
        {
            print "<div class='flex'>
                    <div class='task'>
                    <p>$task[1]</p>
                    </div>
                    <div class='button_wrap'>
                    <button type='submit' formaction='./show.php' formmethod='GET' name='id' value='$task[0]'>詳細</button>
                    </div>
                    </div>";
        }
    ?>
    </form>
</body>
</html>