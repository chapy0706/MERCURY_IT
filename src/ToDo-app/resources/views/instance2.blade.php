<?php declare (strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        use App\Models\Task;
        use App\Models\TaskSheet;

        $taskSheet = new TaskSheet;

        //TODOタクス
        $task1 = new Task();
        $task1->name = 'パスポートの更新';
        $task1->progress = 100;
        $taskSheet->addTask($task1);

        // TODOタスク「食材の買い出し」を作る
        $task2 = new Task();
        $task2->name = '食材の買い出し';
        $task2->progress = 50;
        $taskSheet->addTask($task2);

        //タスクリストを表示する
        echo PHP_EOL, '・タスクリストを表示します...', PHP_EOL;
        $taskSheet->show();
    ?>
</body>
</html>