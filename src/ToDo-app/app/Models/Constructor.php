<?php
declare(strict_types=1);

namespace App\Models;
class Constructor
{
    //タスク名
    public $name;

    //優先度
    public $priority;

    //進行度
    public $progress;

    //コンストラクト
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->priority = 1; //優先度「中」を初期値化
        $this->progress = 0; //進行度の初期値は0
    }
}