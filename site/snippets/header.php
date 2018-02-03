<?php
  $title =       (strlen($page->meta_title()) > 1) ? $page->meta_title() : $site->meta_title();
  $keywords =    (strlen($page->meta_keywords()) > 1) ? $page->meta_keywords() : $site->meta_keywords();
  $description = (strlen($page->meta_description()) > 1) ? $page->meta_description() : $site->meta_description();
?>

<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PJJ6HG9');</script>
  <!-- End Google Tag Manager -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="copyright" content="<?= $site->author() ?>" >
  <?php $keywords = (strlen($page->meta_keywords()) > 1) ? $page->meta_keywords() : $site->meta_keywords() ?>
  <meta name="keywords" content="<?= $keywords ?>">
  <meta name="description" content="<?= $description ?>">

  <title><?= $site->title()->html() ?> | <?= $title ?></title>
  
  <link rel="icon" type="image/x-icon" href="/favicon.ico" >
  <link rel="icon" type="image/png" href="/favicon.png" >

  <?= css('assets/css/libs.min.css') ?>
  <?= css('assets/css/main.css') ?>

</head>
<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJJ6HG9"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="header clearfix">
    <div class="container-fluid wrapper_container_menu">
      <div class="container menu_wrap" role="menu">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
            <div class="logo">
              <div class="logo_wrap">
                <?php if($image = $site->image('logo.svg')): ?>
                  <a href="<?= url() ?>" rel="home" title="logo"><img src="<?php echo $image->url() ?>" alt="logo"></a>
                <?php endif ?>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
            <nav class="navigation column">
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
            <nav class="navigation column hidden-lg hidden-md">
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