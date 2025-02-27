<?php
declare(strict_types=1);

namespace App\Models;

abstract class Clock
{
    //現在時刻
    protected $time;

    //時間を示す
    abstract public function show(): string;
    
    //時間をセットする
    public function setTime(int $time): void 
    {
        $this->time = $time;
    }

    //時間を取得する
    public function getTime(): string
    {
        return $this->time;
    }

}