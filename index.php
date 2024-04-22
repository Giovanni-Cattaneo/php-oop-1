<?php

require_once __DIR__ . '/models/Production.php';

require './models/db.php';

require __DIR__ . '/models/movies.php';
require __DIR__ . '/models/Tv_series.php';


// Array dei film
$films = [$matrix, $cast_away, $schindler_list, $lord_of_the_rings, $star_wars, $in_vacanza_su_marte];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: antiquewhite;
        }

        .header {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <div class="header p-3">
        <h2>Welcome to Movie.db</h2>
    </div>

    <main class="mt-5">
        <div class="container">
            <div class="row justify-content-center g-2 d-flex">
                <?php foreach ($films as $film) : ?>
                    <div class="col-4 d-flex">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $film->getTitle() ?></h4>
                                <p class="card-text"><?php echo $film->language ?></p>
                                <p class="card-text"><?php echo $film->genre->type ?></p>
                                <p class="card-text"><?php echo $film->genre->description ?></p>
                                <p class="card-text"><?php echo $film->score ?>/10</p>
                                <p class="card-text"><?php echo $film->isGood($movie->score) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>


</body>



</html>