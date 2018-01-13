<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/libs.min.css') ?>
  <?= css('assets/css/main.css') ?>

</head>
<body>
  <header class="header clearfix">
    <div class="container-fluid wrapper_container_menu">
      <div class="container menu_wrap" role="menu">
        <div class="row">
          <div class="col-lg-2">
            <div class="logo_wrap">
              <?php if($image = $site->image('logo.svg')): ?>
                <a href="<?= url() ?>" rel="home"><img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>"></a>
              <?php endif ?>
            </div>
          </div>
          <div class="col-lg-7">
            <nav class="navigation column" role="navigation">
              <ul class="menu">
                <?php foreach($pages->visible() as $item): ?>
                <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
                  <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                </li>
                <?php endforeach ?>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3">
            <div class="phone">
              <a href="tel:88129141566"><span class="fa fa-phone phone-header"></span>8 (812) 914-15-66</a>
            </div>
            <div class="request">
              <div class="wrapper">
                <a href="#"><span class="fa fa-bullhorn bullhorn-header"></span>Оставить заявку</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
    $myimage = new Asset('assets/img/slider/hinsdale_final.jpg');

    echo thumb($myimage, array('width' => 300));
    ?>
    <div class="container">
      <div class="nav_wrap">
        <div class="nav-slider">
          <div class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
          <div class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>
        <div class="row">
          <div id="main-slider" class="owl-carousel owl-theme">
              <div class="item"><img src="assets/img/slider/hinsdale_final.jpg" alt=""></div>
              <div class="item"><img src="assets/img/slider/home_plumbing.jpg" alt=""></div>
              <div class="item"><img src="assets/img/slider/residential-plumbing.jpg" alt=""></div>
              <div class="item"><img src="assets/img/slider/tools.jpg" alt=""></div>
              <div class="item"><img src="assets/img/slider/tubing.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </header>