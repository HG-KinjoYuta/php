<?php
class PythagoreanTheorem
{
    //$answerに代入する文字列を生成
    public function createAnswer($a,$b)
    {
        //空欄チェック
        if($this->isEmpty($a,$b))
        {
            return("辺1及び辺2は、入力必須です。");
        }

        //半角数字チェック
        if($this->isNum($a,$b))
        {
            return("辺1及び辺2は、半角数字で入力してください。");
        }

        //斜辺の長さを取得
        $c = $this->calculation($a,$b);

        // //a,b,cを小数点第1まで表示するように整形
        $a = $this->numShaping($a);
        $b = $this->numShaping($b);
        $c = $this->numShaping($c);

        return "直角をはさむ2辺の長さが $a と $b のとき、 斜辺の長さは $c になります。";
    }

    //斜辺の長さを求める
    private function calculation($a,$b)
    {
        try
        {
            $hypotenuse = hypot($a,$b);
        }
        catch(Exception $ex)
        {
            print "もう一度試してください。";
            return;
        }

        return $hypotenuse;
    }

    //$a及び$bの空欄チェック
    private function isEmpty($a,$b)
    {
        //$a又は$bが空欄の場合
        if(empty($a) || empty($b))
        {
            return true;
        };

        return false;
        
    }
    
    //$a及び$bに半角数字以外の文字が使用されていないかチェック
    private function isNum($a,$b)
    {
        //$a又は$bに半角数字以外が使用されている場合(preg_matchで整数まで厳密に判定するべき？仕様にはないので簡易的にis_numericとする)
        if(!is_numeric($a) || !is_numeric($b))
        {
            return true;
        }
        
        return false;
    }

    //小数点第1まで表示するよう整形
    private function numShaping($num)
    {
        $num = sprintf('%.1f',$num);
        return $num;
    }
}
?>