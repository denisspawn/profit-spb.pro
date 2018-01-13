<section class="services">
      <div class="container">
        <div class="row">
          <div class="h2_wrap">
            <h2>Наши услуги:</h2>
          </div>

          <?php foreach($site->children()->services()->children()->visible() as $item): ?>
            <?php foreach($item->images() as $image): ?>
              <div class="col-lg-3">
                <a href="<?= $item->url() ?>" class="link_service_item">
                  <div class="servise_item">
                    <div class="service_img"><img src="<?= $image->url() ?>" alt=""></div>
                    <div class="service_p"><p><?= $item->title()->html() ?></p></div>
                  </div>
                </a>
              </div>
            <?php endforeach ?>
           <?php endforeach ?>
           
        </div>
      </div>
    </section>
