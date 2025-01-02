<?php
declare(strict_types=1);

namespace App\Models;
// ショッピングポイントクラス
class ShoppingPoint
{
    // 現在のトータルポインツ 
    public static $point;
    
    //トータルポイントを1加算する
    public static function countUpPoint()
    {
        self::$point++;
    }
}