<?php

class Common{

    //DB接続
    protected function dbConnect()
    {
        $link = mysqli_connect('localhost','root','','tasks');
        //接続確認
        if(!$link)
        {
            die('接続失敗です。');
        }
        return $link;
    }

    //DB切断
    protected function dbClose($link)
    {
        $close = mysqli_close($link);
        //切断確認
        if(!$close)
        {
            die('切断失敗です。');
        }
    }
}
?>