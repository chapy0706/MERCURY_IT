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
        use App\Models\Accessor;
        $task = new Accessor();

        $task->setName('パスポートの更新');
        echo 'タスク名：', $task->getName(), PHP_EOL;

        //タスクの進行度を120％にする
        $task->setProgress(120);
        echo '進行度：', $task->getProgress(), PHP_EOL;

        //タスクの進行度を80％にした後に、進行度を0に戻す
        $task->setProgress(80);
        $task->clearProgress();
        echo '進行度：', $task->getProgress(), PHP_EOL;

        //タスクを完了させる
        $task->completeProgress();
        echo '進行度：', $task->getProgress(), PHP_EOL;
    ?>
</body>
</html>