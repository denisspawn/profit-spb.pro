<section class="services">
      <div class="container">
        <div class="row">
          <div class="h2_wrap">
            <h2>Наши услуги:</h2>
          </div>

          <?php foreach($site->children()->services()->children()->visible() as $item): ?>
            <?php if ($image = $item->image('badge.svg')) {?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="<?= $item->url() ?>" class="link_service_item">
                  <div class="servise_item">
                    <div class="service_img"><img src="<?= $image->url() ?>" alt="<?= $item->title() ?>"></div>
                    <div class="service_p"><p><?= $item->title()->html() ?></p></div>
                  </div>
                </a>
              </div>
            <?php }?>
           <?php endforeach ?>
           
        </div>
      </div>
    </section>
