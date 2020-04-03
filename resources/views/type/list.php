<?php include __DIR__.'/../layout/header.php'; ?>

<h2>Types de Pokemon</h2>

<div class="list-group text-center align-items-center">
    <?php foreach ($typeList as $currentType) : ?>
        <a href="<?= route('type-pokemon-list', ['id' => $currentType->id]) ?>" class="list-group-item list-group-item-action" style="background-color: #<?= $currentType->color ?>;"><?= $currentType->name ?></a>
    <?php endforeach ?>
</div>

<?php include __DIR__.'/../layout/footer.php'; ?>
