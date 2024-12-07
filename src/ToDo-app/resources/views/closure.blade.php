<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $greeting = 'Good';
        $greetingMaker = function($time) use ($greeting){
            print $greeting . ' ' . $time . '<br>';
        };

        $greetingMaker('Morngin');
        
        // 2回目の$greetingMakerの呼びたしで「Beautiful Evening」と表示されないことの確認 
        $greeting = 'Beautiful';
        $greetingMaker('Evening');

        $addFunction = function ($a, $b) {
            return $a + $b;
        };
        $total = $addFunction(10, 20);
    ?>
    <p>計算結果：<?=$total?></p>
</body>
</html>