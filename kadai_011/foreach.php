<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
  $vegetable_mane = ['name' => '玉ねぎ', 'price' => 200, 'place' => '北海道'];
  $key_translation = ['name' => '名前', 'price' =>'値段', 'place' =>'産地'];
  
  foreach ($vegetable_mane as $key => $value) {
    $japanese_key = $key_translation[$key];
    echo "{$japanese_key}:{$value} <br>";
  }

  ?>
  </p>
  
</body>
</html>