<p>
<?php

// Foodのクラスを定義する
  class Food {
    // プロパティを定義する
    private $name;
    private $price;

    // コンストラクタを定義する
    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }

    public function show_Price() {
      return $this->price;
    }
  }

  // インスタンス化する
  $food = new Food('potato', 250);

  // インスタンス$foodの各プロパティの値を出力する
  print_r($food);

  echo '<br>';


    // Animalのクラスを定義する
    class Animal {
      // プロパティを定義する
    private $name;
    private $height;
    private $weight;

    // コンストラクタを定義する
    public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

    public function show_height() {
      return $this->height;
    }
  }

  // インスタンス化する
  $animal = new Animal('dog', 60, 5000);

  // インスタンス$foodの各プロパティの値を出力する
  print_r($animal);

  echo '<br>';

   echo $food->show_price();

   echo '<br>';

  echo $animal->show_height();
    ?>

  </p>



