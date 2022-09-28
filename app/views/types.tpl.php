    <div class="types">
        <?php
            foreach ($types as $type) {
                ?>
                <a href="<?= $router->generate('type', ['id' => $type->getId()]) ?>" class="types__item" style="background: #<?= $type->getColor() ?>"><?= $type->getName() ?></a>
                <?php
            }
        ?>
    </div>