<?php
declare(strict_types=1);

namespace App\Models;
class Constant
{

    // 優先度を表す定数
    public const PRIOROTY_LOW = 0;
    public const PRIOROTY_MIDDLE = 1;
    public const PRIOROTY_HIGH = 2;
   
    //タスク名
    public $name;

    //優先度
    public $priority;

    //進行度
    public $progress;
    

    //優先度を低〜高の文字列で取得する
    public function getPriorityAsString(): string
    {
        switch ($this->priority) {
            case self::PRIOROTY_LOW :
                return '低';
                break;
            case self::PRIOROTY_MIDDLE :
                return '中';
                break;
            case self::PRIOROTY_HIGH :
                return '高';
                break;
        }
    }
}