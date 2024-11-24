<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPのデータ型(演算子)</title>
</head>
<body>
    <!-- 三項演算子・null合体演算子 -->
    <?php
        $greeding = 'hello';
        echo $greeding === 'hello' ? 'Yes' : 'No';
        $greeding = 'HELLO';
        echo $greeding === 'hello' ? 'Yes' : 'No';
        echo $greeding ?? 'default value';
        $greeding = null ;
        echo $greeding ?? 'default value';
    ?>
    <!-- 前置・後置インクリメント -->
    <?php $num = 7; ?>
    <?php $added = ++$num; ?>
    
    <p>前置インクリメント時のnum:<?=$num?></p>
    <p>前置インクリメント時のadded:<?=$added?></p>

    <?php $num = 7; ?>
    <?php $added = $num++; ?>
    
    <p>後置インクリメント時のnum:<?=$num?></p>
    <p>後置インクリメント時のadded:<?=$added?></p>

    <!-- 配列の合成 -->
    <?php
        $arr1 = ['a','b'];
        $arr2 = ['d','e','f'];
        $mergedA = $arr1 + $arr2;
        $mergedB = $arr2 + $arr1;
        $mergedC = array_merge($arr1, $arr2);
        $mergedD = array_merge($arr2, $arr1);
    ?>
    <p>配列の合成結果</p>
    * merged A:<?php print_r($mergedA)?><br>
    * merged B:<?php print_r($mergedB)?><br>
    * merged C:<?php print_r($mergedC)?><br>
    * merged D:<?php print_r($mergedD)?><br>

    <!-- 連想配列の合成 -->
    <?php
        $arr3 = [
            'a' => 'valueA',
            'b' => 'valueB'
        ];
        $arr4 = [
            'a' => 'valueC',
            'b' => 'valueD',
            'c' => 'valueE'
        ];
        $mergedE = $arr3 + $arr4;
        $mergedF = $arr4 + $arr3;
        $mergedG = array_merge($arr3, $arr4);
        $mergedH = array_merge($arr4, $arr3);
    ?>
    <p>連想配列の合成結果</p>
    * merged E:<?php print_r($mergedE)?><br>
    * merged F:<?php print_r($mergedF)?><br>
    * merged G:<?php print_r($mergedG)?><br>
    * merged H:<?php print_r($mergedH)?><br>
</body>
</html>
