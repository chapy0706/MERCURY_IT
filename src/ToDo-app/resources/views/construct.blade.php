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
        use App\Models\Constructor;

        $task = new Constructor('パスポートの更新');
        echo $task->name, PHP_EOL;
        echo $task->priority, PHP_EOL;
        echo $task->progress, PHP_EOL;
    ?>
</body>
</html>