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
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $matrix->title ?></h4>
                        <p class="card-text"><?php echo $matrix->language ?></p>
                        <p class="card-text"><?php echo $matrix->score ?></p>
                    </div>
                </div>

            </div>
        </div>

    </div>


</body>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</html>