<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="galeria">
    <div class="obraz"><img src="obrazy/deszcz.jpg"><p class="nazwa">Pora roku</p><p class="opis">opisopis</p></div>
    <div class="obraz"><img src="obrazy/deszcz.jpg"><p class="nazwa">Pora roku</p><p class="opis">opisopis</p></div>
    <div class="obraz"><img src="obrazy/deszcz.jpg"><p class="nazwa">Pora roku</p><p class="opis">opisopis</p></div>
    <div class="obraz"><img src="obrazy/deszcz.jpg"><p class="nazwa">Pora roku</p><p class="opis">opisopis</p></div>
    <div class="obraz"><img src="obrazy/deszcz.jpg"><p class="nazwa">Pora roku</p><p class="opis">opisopis</p></div>
    <div class="obraz"><img src="obrazy/deszcz.jpg"><p class="nazwa">Pora roku</p><p class="opis">opisopis</p></div>

 <?php
$images = [
['link' => 'obrazy/deszcz.jpg', 'nazwa' => 'deszcz', 'opis' => 'bardzo pada'],
['link' => 'obrazy/deszcz.jpg', 'nazwa' => 'deszcz', 'opis' => 'bardzo pada'],
['link' => 'obrazy/deszcz.jpg', 'nazwa' => 'deszcz', 'opis' => 'bardzo pada'],
['link' => 'obrazy/deszcz.jpg', 'nazwa' => 'deszcz', 'opis' => 'bardzo pada'],
['link' => 'obrazy/deszcz.jpg', 'nazwa' => 'deszcz', 'opis' => 'bardzo pada'],
['link' => 'obrazy/deszcz.jpg', 'nazwa' => 'deszcz', 'opis' => 'bardzo pada'],
];

shuffle($images);
?>
  </div>
</body>
</html>