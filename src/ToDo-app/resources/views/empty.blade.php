<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 曖昧な空欄チェック(変数の否定)
        $value = '0';
        if (!$value) {
            echo '変数は空です', PHP_EOL;
        } else {
            echo '変数は空ではありません', PHP_EOL; //誤判定
        }
    ?>

    <?php
        // 曖昧な空欄チェック(空文字での判定)
        $value = 0;
        if ($value == '') {
            echo '変数は空です',PHP_EOL; //誤判定
        } else {
            echo '変数は空ではありません', PHP_EOL;
        }
        
    ?>

    <?php
        // 曖昧な空欄チェック(empty関数での判定)
        $value = '0';
        if (empty($value)){
            echo '変数は空です', PHP_EOL; //誤判定
        } else{
            echo '変数は空ではありません', PHP_EOL;
        }
    ?>

    <?php
        // nullの判定が不可(厳格な比較)
        $value = null;
        if ($value === '') {
            echo '変数は空です',PHP_EOL;
        } else {
            echo '変数は空ではありません', PHP_EOL; //判定結果
        }
    ?>

    <?php
        // 空文字の判定不可(is_null関数) 
        $value = '';
        if (is_null($value)) {
            echo '変数は空です',PHP_EOL;
        } else {
            echo '変数は空ではありません', PHP_EOL; //判定結果
        }
    ?>
    
    <?php
        // 空文字・nullが正しく判定可能(is_null関数と厳格な比較の併用)
        $value = 0;
        if (empty($value) || $value === '') {
            echo '変数は空です',PHP_EOL;
        } else {
            echo '変数は空ではありません', PHP_EOL;
        }

        $value = '';
        if (empty($value) || $value === ''){
            echo '変数は空です',PHP_EOL;
        } else {
            echo '変数は空ではありません', PHP_EOL;
        }

        $value = null;
        if (empty($value) || $value === ''){
            echo '変数は空です',PHP_EOL;
        } else {
            echo '変数は空ではありません', PHP_EOL;
        }
    ?>
    
    <?php
        // 

    ?>
</body>
</html>