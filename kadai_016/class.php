<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    // Foodクラスを定義
    class Food {
      private $name;
      private $price;

      // コンストラクタ
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッド
      public function show_price() {
        return $this->price;
      }
    }
    
    // Foodクラスのインスタンス
    $potato = new Food('potato', 250);
    
    // Animalクラスを定義
    class Animal {
      private $name;
      private $height;
      private $weight;

      // コンストラクタ
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      // メソッド
      public function show_height() {
        return $this->height;
      }
    }

    // Animalクラスのインスタンス
    $dog = new Animal('dog', 60, 5000);
    
    // 出力
    print_r($potato);
    echo '<br>';
    print_r($dog);
    echo '<br>';
    echo $potato->show_price() . '<br>';
    echo $dog->show_height() . '<br>';
    
    ?>
  </p>
  </body>

</html>