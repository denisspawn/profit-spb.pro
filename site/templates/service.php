<?php snippet('header') ?>

<section class="banner">
  <div class="container">
    <div class="row">
      <?php if($image = $page->image('banner.png')): ?>
        <?php echo $image->title() ?>
        <img src="<?= $image->url()?>" alt="">
      <?php endif ?>
    </div>
  </div>
</section>

  <main class="main">

    <div class="container service">
      <div class="row">
        <div class="col-lg-12">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <div class="col-lg-12">
          <?= $page->text()->kirbytext() ?>
        </div>
        <div class="col-lg-12">
          <div class="table_wrap">
            <?= $page->table()->kirbytext() ?>
          </div>
        </div>
        <div class="col-lg-12">
          <p><?= $site->warranty()->kirbytext() ?></p> 
        </div>
      </div>
    </div>

    <?php snippet('carousel') ?>

  </main>

<?php snippet('footer') ?>