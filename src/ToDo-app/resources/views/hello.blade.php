<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPのデータ型(ヒアドキュメント化)</title>
</head>
<body>
    <?php 
        $total = 500 * 1.1; 
        $integerValue = 10; // 整数型
        $floatValue = 21.4; // 浮動小数点数型
        $stringValue1 = '文字列1'; // 文字列型(シングルクオート)
        $stringValue2 = "文字列2"; // 文字列型(ダブルクオート)
        $boolValue = true; // 真偽値型
        $nullValue = ''; // 空文字（文字列型）
        //Here Document
        $testHereDocument = <<< 'DOC'
    <p>
      税込金額は$total 円です
      '税込金額は：' . $total . '円です'

      整数:$integerValue
      浮動小数点数:$floatValue
      文字列1:$stringValue1
      文字列2:$stringValue2
      真偽値:$boolValue
      空文字:$nullValue
    </p>
    DOC;?>
    
    <p><pre><?=$testHereDocument?></pre></p>
</html>
