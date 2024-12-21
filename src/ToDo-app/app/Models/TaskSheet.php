<?php

declare(strict_types=1);

namespace App\Models;

//タスク用紙クラス
class TaskSheet
{
    //タスクの配列
    public $tasks = [];

    //タスクを追加するメソッド
    public function addTask(Task $task): void
    {
        $this->tasks[] = $task;
        echo $task->name, 'を追加しました。', PHP_EOL;
    }

    //タスクリストを表示するメソッド
    public function show() : void
    {
        foreach ($this->tasks as $task) {
            //完了済みのタスクは太字で表示
            if ($task->isCompleted()){
                echo '<b>', $task->name, '</b>', PHP_EOL;
            } else {
                echo  $task->name, PHP_EOL;
            }
        }
        
    }
}