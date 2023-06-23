<!DOCTYPE html>
<html>
<head>
  <title>Random Colors</title>
  <style>
    .color-box {
      width: 100px;
      height: 100px;
      display: inline-block;
    }
  </style>
</head>
  <body>
<?php
$colors = array('red', 'green', 'blue', 'yellow', 'orange', 'purple'); // Массив с названиями цветов

$selectedColors = array(); // Массив для выбранных цветов

// Выбираем случайные цвета из массива, пока не наберется четыре разных цвета
while (count($selectedColors) < 4) {
  $randomColor = $colors[array_rand($colors)]; // Случайный цвет из массива
  if (!in_array($randomColor, $selectedColors)) {
    $selectedColors[] = $randomColor; // Добавляем цвет в массив выбранных цветов
  }
}

// Выводим div с выбранными цветами
foreach ($selectedColors as $color) {
  echo '<div class="color-box" style="background-color: ' . $color . '"></div>';
}
?>
  </body>
</html>
