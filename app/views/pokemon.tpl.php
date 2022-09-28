<div class="detail">
    <h2 class="detail__title">Détail de <?= $viewData[0]->getName() ?></h2>
    <div class="detail__pokemon">
        <img src="<?= $absoluteURL ?>/assets/img/<?= $viewData[0]->getNumber() ?>.png" alt="" class="detail__picture">
        <div class="detail__right">
            <h3 class="detail__name">#<?= $viewData[0]->getNumber() ?> <?= $viewData[0]->getName() ?></h3>
            <div class="type">

                <?php 
                    foreach ($viewData as $type) {
                        ?>
                        <a href="<?= $router->generate('type', ['id' => $type->type_id]) ?>" style="background: #<?= $type->color ?>"><?= $type->type ?></a>
                        <?php 
                    }
                ?>

            </div>
            <div class="stat">
                <h4>Statistiques</h4>
                <div class="points">
                    <p>PV</p>
                    <p><?= $viewData[0]->getHp() ?></p>
                    <progress max="255" value="<?= $viewData[0]->getHp() ?>"></progress>
                </div>
                <div class="points">
                    <p>Attaque</p>
                    <p><?= $viewData[0]->getAttack() ?></p>
                    <progress max="255" value="<?= $viewData[0]->getAttack() ?>"></progress>
                </div>
                <div class="points">
                    <p>Défense</p>
                    <p><?= $viewData[0]->getDefense() ?></p>
                    <progress max="255" value="<?= $viewData[0]->getDefense() ?>"></progress>
                </div>
                <div class="points">
                    <p>Attaque Spé.</p>
                    <p><?= $viewData[0]->getSpe_attack() ?></p>
                    <progress max="255" value="<?= $viewData[0]->getSpe_attack() ?>"></progress>
                    <p></p>
                </div>
                <div class="points">
                    <p>Défence Spé.</p>
                    <p><?= $viewData[0]->getSpe_defense() ?></p>
                    <progress max="255" value="<?= $viewData[0]->getSpe_defense() ?>"></progress>
                </div>
                <div class="points">
                    <p>Vitesse</p>
                    <p><?= $viewData[0]->getSpeed() ?></p>
                    <progress max="255" value="<?= $viewData[0]->getSpeed() ?>"></progress>
                </div>
            </div>
        </div>
    </div>
    <div class="return">
        <a href="<?= $router->generate('home') ?>">Revenir à la liste</a>
    </div>
</div>
