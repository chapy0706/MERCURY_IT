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
            if ($a <= 0 || $b <= 0) {
                echo '引数は正の整数で指定してください';
                return;
            }

            $total = $a + $b;
            return $total;
        }

        // メインルーチン
        $result = add(3, -10);
        echo $result , PHP_EOL;

        $result = add(5, 2);
        echo $result , PHP_EOL;

        $result = add(-5, 2);
        echo $result , PHP_EOL;

        

    ?>
    </pre>
</body>
</html>