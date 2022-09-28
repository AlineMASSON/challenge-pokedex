<h2 class="type-name" style="color: #<?= $viewData[0]->getColor() ?>"><?= $viewData[0]->getName() ?></h2>
<div class="pokemons-list">

    <?php 
    foreach ($viewData as $type) {
        ?>

        <div class="pokemon">
            <a href="<?= $router->generate('pokemon', ['id' => $type->number]) ?>">
                <img src="<?= $absoluteURL ?>/assets/img/<?= $type->number ?>.png" alt="<?= $type->pokemon_name ?>" class="pokemon-picture">
            </a>
            <a href="<?= $router->generate('pokemon', ['id' => $type->number]) ?>" class="pokemon_name">#<?= $type->number ?> <?= $type->pokemon_name ?></a>
        </div>
        
        <?php 
    }
    ?>


</div>