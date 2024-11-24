<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPのデータ型(定数)</title>
</head>
<body>
    <?php 
        define('TAX_PERSENT',0.1);
        $total = 500 * (1 + TAX_PERSENT);
        $numbers = [11, 22, 33, 44]; // 配列
        $user = [
            'name' => 'test master',
            'age' => '15',
            'place' => 'Okinawa',
        ];
        $user['hobby'] = 'walk';
        $user['job'] = 'police';
    ?>

    <p><pre><?php print_r($numbers)?></pre></p>
    <p><pre><?php print_r($user)?></pre></p>
    <p><?= '税込金額は：' . $total . '円です'  ?></p>
</html>
