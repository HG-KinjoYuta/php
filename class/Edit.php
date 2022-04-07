<?php
require_once("./class/Common.php");

class Edit extends Common{

    public function editTask($id,$content)
    {
        $updateDateTime = date("Y-m-d H:i:s");
        //編集用SQL生成
        $sql = "UPDATE tasks SET content = '$content', updateDateTime = '$updateDateTime' WHERE id = $id"; 
        
        //DB接続
        $link = common::dbConnect();

        //編集
        mysqli_query($link,$sql);

        //DB切断
        common::dbClose($link);
    }
}

?>