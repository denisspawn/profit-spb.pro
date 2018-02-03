<?php snippet('header') ?>

  <main class="main">
    <div class="container actions">
      <div class="row">
        <div class="col-lg-12">
          <h1><?= $page->title()->html() ?></h1>
        </div>
        <div class="col-lg-12">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <div class="col-lg-12">
          <div class="table_wrap">
            <?= $page->table()->kirbytext() ?>
          </div>
        </div>
        <div class="col-lg-12">
          <?= $page->text()->kirbytext() ?>
        </div>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>