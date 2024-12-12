<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 商品の購入履歴の表示関数
        function printPurchased(array $items, callable $extraDataFunc): void
        {
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>購入日</th>';
            echo '<th>商品名</th>';
            echo '<th>価格</th>';
            echo '<th>その他</th>';
            echo '</tr>';
            foreach ($items as $item) {
                echo '<tr>';
                echo '<td>',  $item['date'], '</td>';
                echo '<td>', $item['name'], '</td>';
                echo '<td>',  $item['price'], '</td>';
                // その他欄に印字するデータは呼び出し元が自由に設定できる
                echo '<td>', $extraDataFunc($item), '</td>';
                echo '<tr>';
            }
            echo '</table>';
        }

        //　メインルーチン
        //あるユーザーの購入した商品の配列
        $items = [
            [
                'user-id'   => 'tanaka-1234', //ユーザーID
                'date'      => '2024-12-12', // 購入日
                'name'      => 'ワイシャツ', // 商品名
                'price'     => 2200, //　価格
                'color'     => 'white', // 色
                'size'      => 'M', // サイズ
                'item-num'  => 91025, // 商品番号
                'serial'    => 'PJG235986' // 製造番号
            ],
            [
                'user-id'   => 'tanaka-1234', //ユーザーID
                'date'      => '2024-12-10', // 購入日
                'name'      => 'ナイトシャツ', // 商品名
                'price'     => 1980, //　価格
                'color'     => 'Gray', // 色
                'size'      => 'L', // サイズ
                'item-num'  => 91003, // 商品番号
                'serial'    => 'ZFG29582' // 製造番号
            ]
            ];

            echo '<h3>ユーザーのマイページの購入履歴</h3>';
            printPurchased($items, function ($item) {
                return "色：{$item['color']}　サイズ：{$item['size']}";
            });

            echo '<h3>販売事業者専用ページの購入履歴</h3>';
            printPurchased($items, function ($item) {
                return "ユーザーID：{$item['user-id']}　商品No：{$item['item-num']}";
            });
    ?>
</body>
</html>