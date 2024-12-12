<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once dirname(__FILE__) . '/function.php'; ?>
    <h3>テスト太郎さんおプロフィールページ</h3>
    <ul>
        <li>氏名：テスト太郎</li>
        <li>年齢：<?=calcAge(20010701)?>歳</li>
        <li>居住：大阪市</li>
    </ul>
</body>
</html>