<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class SomeClass
        {
            public $propertyA;
            private $propertyB;

            public function methodA(): void
            {
                echo 'methodA called.', PHP_EOL;
                $this->methodB(); //自クラス内であればアクセス可能
            }

            public function methodB(): void
            {
                echo 'methodB called.', PHP_EOL;
            }
        }
        $someInstance = new SomeClass();

        $someInstance->propertyA = 'A';
        $someInstance->methodA();
        
        // $someInstance->propertyB = 'B';
        // $someInstance->methodB(); 

    ?>
</body>
</html>