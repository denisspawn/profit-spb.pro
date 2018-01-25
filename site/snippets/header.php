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
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
            <div class="logo">
              <div class="logo_wrap">
                <?php if($image = $site->image('logo.svg')): ?>
                  <a href="<?= url() ?>" rel="home"><img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>"></a>
                <?php endif ?>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
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
          <div class="col-lg-3 col-md-3 col-sm-9 col-xs-7">
            <div class="phone">
              <a href="tel:88129141566"><span class="fa fa-phone phone-header"></span>8 (812) 914-15-66</a>
            </div>
            <div class="request">
              <div class="wrapper">
                <a class="popup" href="#wrap_hidden_form"><span class="fa fa-bullhorn bullhorn-header"></span>Оставить заявку</a>
              </div>
            </div>
          </div>

          <div class="hidden-lg hidden-md col-sm-1 col-xs-2">
            <a href="#" class="toggle-mnu hidden-lg"><span></span></a>
          </div>

          <div class="col-sm-12 col-xs-12">
            <nav class="navigation column hidden-lg hidden-md" role="navigation">
              <ul class="mobile-menu">
                <?php foreach($pages->visible() as $item): ?>
                <li class="mobile-menu-item<?= r($item->isOpen(), ' is-active') ?>">
                  <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                </li>
                <?php endforeach ?>
                <li class="mobile-menu-item">
                  <a href="/actions">Акции</a>
              </li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </header>