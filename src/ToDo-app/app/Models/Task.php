<?php

declare(strict_types=1);

namespace App\Models;

class Task
{
    // タスク名
    public $name;

    // 優先度
    public $priority;

    // 進行度
    public $progress;

    // タスクが完了したかを取得するメソッド
    public function isCompleted(): bool
    {
        return $this->progress >= 100; // $progressが100ならTrueを返す
    }
}
