<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise Operation</title>
</head>
<body>
    <?php
        // ビット演算を用いた４種のボタン操作の判定プログラム
        // ボタン毎の桁番号の設定
        define('BIT_RED', 1 << 0); //赤ボタンの定義：0001
        define('BIT_BLUE', 1 << 1); //青ボタンの定義：0010
        define('BIT_YELLO', 1 << 2); //黄ボタンの定義：0100
        define('BIT_GREEN', 1 << 3); //緑ボタンの定義：1009

        $color = 0; // 初期値は全て0

        //青と黄がONの場合を想定
        $color = BIT_BLUE | BIT_YELLO ;

        //ボタンの色を判定し、結果を連想配列に保存
        $status = [
            'red' => ($color & BIT_RED) > 0,
            'blue' => ($color & BIT_BLUE) > 0,
            'yello' => ($color & BIT_YELLO) > 0,
            'green' => ($color & BIT_GREEN) > 0
        ];
    ?>

    <p>赤のボタンはONですか？<?php var_dump($status['red']);?></p>
    <p>青のボタンはONですか？<?php var_dump($status['blue']);?></p>
    <p>黄のボタンはONですか？<?php var_dump($status['yello']);?></p>
    <p>緑のボタンはONですか？<?php var_dump($status['green']);?></p>
</body>
</html>