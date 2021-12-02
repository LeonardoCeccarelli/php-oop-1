<?php
require_once "classes/Movie.php";

// Istanza primo film
$movieMarvel = new Movie(124);
$movieMarvel->setTitle("Captain America - il primo Vendicatore");
$movieMarvel->setOriginalTitle("The First Avenger: Captain America");
$movieMarvel->setGenre("Azione");

// Istanza secondo film
$movieDc = new Movie(98);
$movieDc->setTitle("Flash");
$movieDc->setOriginalTitle("FLASH");
$movieDc->setGenre("Fantasceinza");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Mio CSS -->
    <link rel="stylesheet" href="styles/main.css">

    <title>Movie - PHP</title>
</head>

<body>
    <main>
        <div class="card_container">
            <div class="single_card">
                <h3><?php echo $movieMarvel->getAllTitles() ?></h3>
                <h4>Genere: <?php echo $movieMarvel->getGenre() ?></h4>
                <h4>Durata: <?php echo $movieMarvel->getMinutes() ?></h4>
            </div>

            <div class="single_card">
                <h3><?php echo $movieDc->getAllTitles() ?></h3>
                <h4>Genere: <?php echo $movieDc->getGenre() ?></h4>
                <h4>Durata: <?php echo $movieDc->getMinutes() ?></h4>
            </div>
        </div>
    </main>
</body>

</html>