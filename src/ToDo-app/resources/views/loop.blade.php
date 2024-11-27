<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //参照渡しを用いたloop処理
        $numbers = [3, 5, -2, 5, -10];
        
        foreach ($numbers as &$number) {
            if ($number < 0){
                $number = 0;
            }
        }
        unset($number);
    ?>
    <pre><?php print_r($numbers) ?></pre>
    <!-- 以降の処理をdie命令で強制終了させる -->
     <?php die('* 以降の処理はdie命令にて終了させる'); ?>
    <?php
        $colors = [
            'red' => '赤',
            'blue' => '青',
            'green' => '緑'
        ];

        foreach ($colors as $keys => $value) {
            echo "<p>キー：{$keys} 値：{$value}</p>";
        }

        $words = ['apple', 'banana', 'camera'];

        foreach ($words as $word => $result) {
            echo "<p>キー：{$word} 値：{$result}</p>";
        }
    ?>
</body>
</html>