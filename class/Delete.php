<?php
require_once("./class/Common.php");

class Delete extends Common{

    function deleteTask($id){

        //削除用のSQL生成
        $sql = "DELETE FROM tasks WHERE id = $id"; 
        
        //DB接続
        $link = common::dbConnect();

        //削除
        mysqli_query($link,$sql);

        //DB切断
        common::dbClose($link);
    }
}
?>