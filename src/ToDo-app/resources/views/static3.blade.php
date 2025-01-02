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
        //何らかのクラス
        class SomeClass
        {
            //インスタンスプロパティ
            private $instancePropaty;

            // 静的メソッド
            public static function instanceMethod()
            {
                echo 'instanceMethod() called.' , PHP_EOL;
            }

            //静的メソッド
            public static function staticMethod()
            {
                // 自分自身のインスタンスを作成し、インスタンスメソッドを作成する
                $someClass = new SomeClass();
                $someClass->instanceMethod();

                //外部クラスのインスタンスを作成し、インスタンスメソッドを作成する
                $externalClass = new ExternalClass();
                $externalClass->externalMethod();
            }
        }

        //外部のクラス
        class ExternalClass
        {
            //外部クラス内のインスタンスメソッド
            public function externalMethod()
            {
                echo 'externalMethod() called.' , PHP_EOL;
            }
        }
        
        //メインルーチン
        SomeClass::staticMethod();
    ?>
</body>
</html>