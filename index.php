<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movies.php';
require_once __DIR__ . '/Models/TvSerie.php';
require_once __DIR__ . '/Models/Genre.php';

$movie_1 = new Movie('Oppenheimer', 'Christopher Nolan', 2023, 180);
$movie_2 = new Movie('The Avengers', 'Joss Whedon', 2012, 142);
$movie_3 = new Movie('Se mi lasci ti cancello', 'Michel Gondry', 2004, 108);
$tv_1 = new TvSerie('Lost', 'Damon Lindelof', 2004, 2010, 114, 6);
$tv_2 = new TvSerie('Breaking Bad', 'Vince Gilligan', 2008, 2013, 62, 5);
$tv_3 = new TvSerie('The 100', 'Jason Rothenberg', 2014, 2020, 100, 7);
$tv_4 = new TvSerie('La casa di carta', 'Alex Pina', 2017, 2021, 48, 3);
$tv_5 = new TvSerie('Smallville', 'Alfred Gough', 2001, 2011, 217, 10);
$movie_4 = new Movie('Il Pianista', 'Roman Polanski', 2002, 150);
$movie_5 = new Movie('La vita è bella', 'Roberto Benigni', 1997, 124);
$movie_6 = new Movie('The Green Mile', 'Frank Darabont', 1999, 189);




$productions = [
  $movie_1,
  $movie_2,
  $movie_3,
  $tv_1,
  $tv_2,
  $tv_3,
  $tv_4,
  $tv_5,
  $movie_4,
  $movie_5,
  $movie_6

];



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
  <div class="container mt-5">
    <div class="row g-3">
      <?php foreach ($productions as $production): ?>
        <div class="col-3">
          <div class="card">
            <div class="card-body">
              <?= $production->get_details() ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</body>

</html>