<div class="pokemons-list">

    <?php 
    foreach ($pokemons as $pokemon) {
        ?>

        <div class="pokemon">
            <a href="<?= $router->generate('pokemon', ['id' => $pokemon->getNumber()]) ?>">
                <img src="<?= $absoluteURL ?>/assets/img/<?= $pokemon->getNumber() ?>.png" alt="<?= $pokemon->getName() ?>" class="pokemon-picture">
            </a>
            <a href="<?= $router->generate('pokemon', ['id' => $pokemon->getNumber()]) ?>" class="pokemon_name">#<?= $pokemon->getNumber() ?> <?= $pokemon->getName() ?></a>
        </div>
        
        <?php 
    }
    ?>


</div>