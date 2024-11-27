<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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