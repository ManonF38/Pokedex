<?php include __DIR__.'/../layout/header.php'; ?>

<div class="row justify-content-center">
  <?php foreach ($pokemonList as $currentPokemon) : ?>
  <div class="card pl-3 pt-3 pr-3" style="width : 18rem">
    <a href="<?= route('pokemon-details', ['id' => $currentPokemon->numero]) ?>"><img src="<?= route('main-home') ?>/img/<?= $currentPokemon->numero ?>.png" class="card-img-top" alt="<?= $currentPokemon->nom ?>"></a>
    <div class="card-body">
      <p class="card-text text-center"><a href="<?= route('pokemon-details', ['id' => $currentPokemon->numero]) ?>">#<?= $currentPokemon->numero ?> <?= $currentPokemon->nom ?></a></p>
    </div>
  </div>
  <?php endforeach ?>
</div>

<?php include __DIR__.'/../layout/footer.php'; ?>
