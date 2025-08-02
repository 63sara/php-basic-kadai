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
  
  foreach ($vegetable_mane as $key => $value) {
    echo "{$key}:{$value} <br>";
  }

  ?>
  </p>
  
</body>
</html>