<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "Hello!({$i}回目)", PHP_EOL;
        }

        // 数値のループ文
        $num = 100;
        while ($num < 200) {
            echo $num, PHP_EOL;
            $num += 30;
        }
        echo '$numが200を超過した為、終了'
    ?>
</pre>
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