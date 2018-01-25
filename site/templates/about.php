<?php snippet('header') ?>

  <main class="main" role="main">
    
    <section class="about">

      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <h1><?= $page->title()->html() ?></h1>
            <div class="about_wrap">
              <?= $page->intro()->kirbytext() ?>
              <?= $page->text()->kirbytext() ?>
            </div>
          </div>
        </div>
      </div>
      
    </section>

    <?php snippet('carousel') ?>

  </main>

<?php snippet('footer') ?>