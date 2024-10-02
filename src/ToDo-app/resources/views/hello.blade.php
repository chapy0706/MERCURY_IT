<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPでHelo World</title>
</head>
<body>
    <?php $total = 500 * 1.1 ?>
    <p>税込金額は：<?php echo $total; ?>円です</p>
    <p>税込金額は：<?php print $total; ?>円です</p>
    <p><?= '税込金額は：' . $total . '円です'  ?></p>
    <p><?php var_dump($total); ?></p>
</body>
</html>
