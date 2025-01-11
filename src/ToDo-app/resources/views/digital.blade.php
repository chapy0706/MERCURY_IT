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
        use App\Models\DigitalClock;

        $currentTime = strtotime('2025-01-11 10:00');
        $digitalClock = new DigitalClock();
        $digitalClock->setTime($currentTime);
        echo $digitalClock->show(); // 結果： 10:00
    ?>
</body>
</html>