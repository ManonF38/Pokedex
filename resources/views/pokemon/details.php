<?php include __DIR__.'/../layout/header.php'; ?>

<h2 class="text-center">Détails de <?= $pokemon->nom ?></h2>

<div class="row justify-content-center">
    <div class="col-8 col-lg-4">
        <img src="<?= route('main-home') ?>/img/<?= $pokemon->numero ?>.png" class="card-img" alt="<?= $pokemon->nom ?>">
    </div>
    <div class="col-12 col-lg-7 card px-0 pb-3" style="width: 60%">
        <div class="row no-gutters">
            <div class="col">
                <div class="card-body">
                    <h3 class="card-title">#<?= $pokemon->numero ?> <?= $pokemon->nom ?></h3>
                    <p class="mb-4">
                    <?php foreach ($pokemon->types as $currentType) : ?>
                    <a href="<?= route('type-pokemon-list', ['id' => $currentType->id]) ?>" class="card-text p-2 m-1 rounded-lg" style="background-color: #<?= $currentType->color ?>"><?= $currentType->name ?></a>
                    <?php endforeach ?>
                    </p>
                    <h4 class="card-title">Statistiques</h4>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 pl-0">PV</div>
                            <div class="col-2"><?= $pokemon->pv ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->pv ?>*100%/255);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 pl-0">Attaque</div>
                            <div class="col-2"><?= $pokemon->attaque ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->attaque ?>*100%/255);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 pl-0">Défense</div>
                            <div class="col-2"><?= $pokemon->defense ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->defense ?>*100%/255);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 pl-0">Attaque Spé.</div>
                            <div class="col-2"><?= $pokemon->attaque_spe ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->attaque_spe ?>*100%/255);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 pl-0">Défense Spé.</div>
                            <div class="col-2"><?= $pokemon->defense_spe ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->defense_spe ?>*100%/255);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 pl-0">Vitesse</div>
                            <div class="col-2"><?= $pokemon->vitesse ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->vitesse ?>*100%/255);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<p class="text-center"><a href="<?= route('main-home') ?>">Revenir à la liste</a></p>

<?php include __DIR__.'/../layout/footer.php'; ?>
