<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎</title>
</head>
<body>
    <p>
        <?php
        // クラス定義　Food
        class food{
            // プロパティ定義
            private $name;
            private $price;
        
            // コンストラクタ定義
            public function __construct(string $name ,int $price) {
            $this->name = $name;
            $this->price = $price;
            }

            // メソット定義
            public function show_price(){
                echo $this->price .'<br>';
            }
        }

        // クラス定義 Animal
        class Animal{
            // プロパティ定義
            private $name;
            private $height;
            private $weight;

            // コンストラクタ定義
            public function __construct(string $name ,int $height ,int $weight) {
                $this->name = $name;
                $this->height =$height;
                $this->weight =$weight;
            }

            // メソット定義
            public function show_height(){
                echo $this->height .'<br>';
            }
        }

        // インスタンス
        $potato = new Food('potato' , 250);
        $dog = new Animal('dog' , 60 , 5000);

        // インスタンスのプロパティ出力
        print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';

        // メソット出力
        $potato->show_price();
        $dog->show_height();

        ?>
    </p>
</body>
</html>