<?php
require_once __DIR__ . '/Models/Movies.php';

$movie_1 = new Movie('Oppenheimer', 180, 'Christopher Nolan');
$movie_2 = new Movie('The Avengers', 142, 'Joss Whedon');
$movie_3 = new Movie('Se mi lasci ti cancello', 108, 'Michel Gondry');


$movies = [
  $movie_1,
  $movie_2,
  $movie_3

];


foreach ($movies as $movie) {
  foreach ($movie as $value) {
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- JAVASCRIPT -->
    <script src="./frontend/js/main.js" defer></script>
</head>

<body>
    <ul>
        <?php foreach ($movies as $movie): ?>
        <li>
            <?php foreach ($movie as $key => $value): ?>
            <?= $key ?> =
            <?= $value ?>
            <?php endforeach; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>