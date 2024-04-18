<?php

require_once  './models/Production.php';

require './models/db.php';

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
            <div class="row justify-content-center align-items-center g-2">
                <div class="col d-flex flex-wrap justify-content-center gap-3" v-for="card in cards">
                    <div class="card w-25">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $matrix->title ?></h4>
                            <p class="card-text"><?php echo $matrix->language ?></p>
                            <p class="card-text"><?php echo $matrix->score ?>/10</p>
                            <p class="card-text"><?php $matrix->isGood($matrix->score) ?></p>
                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $cast_away->title ?></h4>
                            <p class="card-text"><?php echo $cast_away->language ?></p>
                            <p class="card-text"><?php echo $cast_away->score ?>/10</p>
                            <p class="card-text"><?php $cast_away->isGood($cast_away->score) ?></p>

                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $schindler_list->title ?></h4>
                            <p class="card-text"><?php echo $schindler_list->language ?></p>
                            <p class="card-text"><?php echo $schindler_list->score ?>/10</p>
                            <p class="card-text"><?php $schindler_list->isGood($schindler_list->score) ?></p>

                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lord_of_the_rings->title ?></h4>
                            <p class="card-text"><?php echo $lord_of_the_rings->language ?></p>
                            <p class="card-text"><?php echo $lord_of_the_rings->score ?>/10</p>
                            <p class="card-text"><?php $lord_of_the_rings->isGood($lord_of_the_rings->score) ?></p>

                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $star_wars->title ?></h4>
                            <p class="card-text"><?php echo $star_wars->language ?></p>
                            <p class="card-text"><?php echo $star_wars->score ?>/10</p>
                            <p class="card-text"><?php $star_wars->isGood($star_wars->score) ?></p>

                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $in_vacanza_su_marte->title ?></h4>
                            <p class="card-text"><?php echo $in_vacanza_su_marte->language ?></p>
                            <p class="card-text"><?php echo $in_vacanza_su_marte->score ?>/10</p>
                            <p class="card-text"><?php $in_vacanza_su_marte->isGood($in_vacanza_su_marte->score) ?></p>

                        </div>

                    </div>



    </main>



</body>



</html>