<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <header class="wrap">
            <h1><?= $page->title()->html() ?></h1>
            <div class="intro text">
              <?= $page->intro()->kirbytext() ?>
            </div>
            <hr />
          </header>
            
          <div class="text wrap">
            <?= $page->text()->kirbytext() ?>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>