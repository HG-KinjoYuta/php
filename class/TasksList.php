<?php
require_once("./class/Common.php");

class TasksList extends Common{

    public function getAllTasks()
    {
        //タスク一覧取得用SQL生成
        $sql = "SELECT * FROM tasks ORDER BY id DESC";

        //DB接続
        $link = common::dbConnect();

        //タスク一覧取得
        $result = mysqli_query($link,$sql);
        $tasksList = mysqli_fetch_all($result);

        return $tasksList;
    }

}

?>