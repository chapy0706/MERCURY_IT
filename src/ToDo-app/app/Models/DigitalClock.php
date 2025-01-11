<?php
declare (strict_types=1);
namespace App\Models;
    //何らかのクラス
    class DigitalClock extends Clock
    {
        //Clockクラスの抽象メソッドshow()はサブクラスで必ず実装する
        public function show() :string
        {
            return date('H:i' , $this->time);
        }

    }
?>