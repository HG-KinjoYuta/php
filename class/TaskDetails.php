<?php
require_once("./class/Common.php");

class TaskDetails extends Common{

    function getTaskDetails($id)
    {
        //タスク詳細取得用SQL生成
        $sql = "SELECT * FROM tasks WHERE id = $id";

        //DB接続
        $link = common::dbConnect();

        //タスク一覧取得
        $result = mysqli_query($link,$sql);
        $taskDetails = mysqli_fetch_assoc($result);

        //DB切断
        common::dbClose($link);

        return $taskDetails;
    }
}
?>