<?php
require_once("./class/Common.php");

class Create extends Common {

    function createTask($content)
    {
        //id列から一番大きい数字を取得し+1した値を新規タスクのIDとする。
        $id = $this->getID();

        //現在日時を取得
        $dateTime = date("Y-m-d H:i:s");

        //タスクをインサート
        $this->insertTask($id,$content,$dateTime);
    }
    
    //新タスクのIDを取得
    private function getID()
    {
        //id取得用sql生成
        $sql = "SELECT MAX(id) AS MAXid FROM tasks";

        //DB接続
        $link = common::dbConnect();

        //id取得
        $result = mysqli_query($link,$sql);
        $id = mysqli_fetch_assoc($result);

        //DB切断
        common::dbClose($link);

        //nullの場合1とする
        if($id['MAXid'] === null)
        {
            return 1;
        }

        //取得したIDに+1した値を返却
        return $id['MAXid'] + 1;
        
    }

    //新タスクのインサート
    private function insertTask($id,$content,$dateTime)
    {
        //インサート用SQL生成
        $sql = "INSERT INTO tasks (id,content,createDateTime,updateDateTime) 
                VALUES ($id,'$content','$dateTime','$dateTime')";

        //DB接続
        $link = common::dbConnect();

        //インサート
        mysqli_query($link,$sql);

        //DB切断
        common::dbClose($link);
    }
}
?>