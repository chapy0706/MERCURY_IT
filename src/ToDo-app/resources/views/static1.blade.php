<?php declare (strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
        use App\Models\ExcelColumnConverter;
        echo ExcelColumnConverter::calcAlphabetColumnName(3), PHP_EOL;
        echo ExcelColumnConverter::calNumberColumnName('F'), PHP_EOL;
    ?>
</body>
</html>