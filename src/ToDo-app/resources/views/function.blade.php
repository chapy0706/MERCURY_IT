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
        $num1 = 3;
        $num2 = 10;

        function addGlobal()
        {
            global $num1 , $num2;
            return $num1 + $num2;
        }

        $test = addGlobal();
        echo $test , PHP_EOL;
        // 2つの数値を足す関数
        function checkNumber($value)
        {
            return is_numeric($value) && (int)$value > 0;
        }

        function add($a, $b, &$errorMessage)
        {
            if(!checkNumber($a)) {
                $a = 0;
                $errorMessage = '(※エラー：1番目の引数が正の整数ではありません)';
            }

            if(!checkNumber($b)) {
                $b = 0;
                $errorMessage = '(※エラー：2番目の引数が正の整数ではありません)';
            }

            $total = $a + $b;
            return $total;
        }

        // メインルーチン
        $errorMessage = null;
        $result = add(3, -10, $errorMessage);
        echo '計算結果：', $result , $errorMessage , PHP_EOL;

        $errorMessage = null;
        $result = add(5, 2, $errorMessage);
        echo '計算結果：', $result , $errorMessage , PHP_EOL;

        $errorMessage = null;
        $result = add(-5, 2, $errorMessage);
        echo '計算結果：', $result , $errorMessage , PHP_EOL;
        

    ?>
    </pre>
</body>
</html>