<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPのデータ型</title>
</head>
<body>
    <?php $total = 500 * 1.1 ?>
    <p>税込金額は：<?php echo $total; ?>円です</p>
    <p>税込金額は：<?php print $total; ?>円です</p>
    <p><?= '税込金額は：' . $total . '円です'  ?></p>
    <p><?php var_dump($total); ?></p>

    <?php
        # PHPの変数名は(lower)camelCaseを慣習的に用いるらしい
        $integerValue = 10; // 整数型
        $floatValue = 21.4; // 浮動小数点数型
        $stringValue1 = '文字列1'; // 文字列型(シングルクオート)
        $stringValue2 = "文字列2"; // 文字列型(ダブルクオート)
        $boolValue = true; // 真偽値型
        $nullValue = ''; // 空文字（文字列型）
    ?>
    <p>整数:<?php echo $integerValue; ?></p>
    <p>浮動小数点数:<?php echo $floatValue; ?></p>
    <p>文字列1:<?php echo $stringValue1; ?></p>
    <p>文字列2:<?php echo $stringValue2; ?></p>
    <p>真偽値:<?php echo $boolValue; ?></p>
    <p>空文字:<?php echo $nullValue; ?></p>
</body>
</html>
