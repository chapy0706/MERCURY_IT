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
        use App\Models\ShoppingPoint;

        //曜日ポイントクラス
        class WeekDayPoint
        {
            //　今日が金曜日の場合に　１加算する
            public function addWeekDayPoint(string $dayOfWeek)
            {
                if($dayOfWeek === 'Fri') {
                    ShoppingPoint::countUpPoint();
                }
            }
        }

        //1000円以上の購入金額の時に1ポイント加算
        function addPricePoint(int $price)
        {
            if ($price >= 1000) {
                ShoppingPoint::countUpPoint();
            }
        }

        //初期ポイントは0とする
        ShoppingPoint::$point = 0;

        //購入時に無条件で1ポイント加算
        ShoppingPoint::countUpPoint();

        //曜日によって1ポイント加算する
        $weekDayPoint = new WeekDayPoint();
        $weekDayPoint->addWeekDayPoint('Fri');

        //購入金額によって1ポイント加算する
        addPricePoint(5000);

        echo '購入ポイント:' , ShoppingPoint::$point; 
    ?>
</body>
</html>