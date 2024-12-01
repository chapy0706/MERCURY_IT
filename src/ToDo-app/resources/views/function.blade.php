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
        // 2つの数値を足す関数
        function add($a, $b)
        {
            $total = $a + $b;
            return $total;
        }

        // メインルーチン
        $result = add(3, 10);
        echo '計算結果：' , $result , PHP_EOL;

        $result = add(5, 2);
        echo '計算結果：' , $result , PHP_EOL;

        

    ?>
    </pre>
</body>
</html>