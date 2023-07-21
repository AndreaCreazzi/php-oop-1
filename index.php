<?php
include_once __DIR__ . '/models/index.php';
include __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
</head>

<body class="bg-dark">
    <main id="movies">
        <div class="container">
            <h1 class="text-white text-center my-3">Coming Soon <i class="fa-solid fa-film text-danger"></i></h1>
            <?php foreach ($movies as $movie) : ?>
                <div class="card my-4">
                    <div class="card-body">
                        <h1 class="card-title text-center"><?= $movie->title ?></h1>
                        <h4 class="card-subtitle mb-2 text-center">Language : <?= $movie->getToUpperLanguage() ?> <i class="fa-solid fa-flag-usa"></i></h4>
                        <h4 class="text-center mb-1">Vote : <?= $movie->vote ?> <i class="fa-solid fa-star text-warning"></i></h4>
                        <hr>
                        <h5 class="text-center">Description</h5>
                        <p class="card-text text-center"><?= $movie->description ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </main>
</body>

</html>