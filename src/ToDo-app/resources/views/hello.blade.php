<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPのデータ型(連想配列)</title>
</head>
<body>
    <?php 
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
</html>
