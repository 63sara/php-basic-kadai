<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題_016</title>
</head>
<body>
<?php

//Foodクラスを定義する
class Food {

  //プロパティを定義する
  private $name;
  private $price;

  //メソッドを定義する
  public function show_price() {
    echo $this->price;
  } 

  //コンストラクタを定義する
  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }

}

//インスタンス化
$food = new Food('potato', 250);


//Animalクラスを定義する
class Animal {

  //プロパティを定義する
  private $name;
  private $height;
  private $weight;

  //メソッドを定義する
  public function show_height() {
    echo $this->height;
  }

  //コンストラクタを定義する
  public function __construct(string $name, int $height, int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

}

//インスタンス化
$animal = new Animal('dog', 60, 5000);

//メソッドにアクセスしメソッドを実行する
echo '<br>';
print_r($food);
$food->show_price();

echo  '<br>';
print_r($animal);
$animal->show_height();
?>
</body>
</html>