<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/reboot.css">
    <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/style.css">


    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <title>Pokédex</title>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <h1 class="nav-bar__title"><a href="<?= $router->generate('home') ?>">Pokédex</a></h1>
            <ul>
                <li class="nav-bar__items"><a href="<?= $router->generate('home') ?>">Liste</a></li>
                <li class="nav-bar__items"><a href="<?= $router->generate('types') ?>">Types</a></li>
            </ul>
        </nav>
    </header>
    <main>

