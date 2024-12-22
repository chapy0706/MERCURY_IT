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
        use App\Models\Constant;
        $task = new Constant();

        $task->priority= Constant::PRIOROTY_HIGH;
        echo '優先度：', $task->getPriorityAsString();
    ?>
</body>
</html>