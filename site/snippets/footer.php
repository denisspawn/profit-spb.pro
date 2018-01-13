  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 footer_col_1">
          <div class="logo_wrap">
            <?php if($image = $site->image('logo.svg')): ?>
              <a href="<?= url() ?>" rel="home"><img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>"></a>
            <?php endif ?>
          </div>
          <p class="p_phone-footer"><a href="tel:88129141566"><span class="fa fa-phone phone-footer"></span>8 (812) 914-15-66</a></p>
          <p class="p_mail-footer"><a href="mailto:office@profit-spb.pro"><span class="fa fa-envelope mail-footer"></span>office@profit-spb.pro</a></p>
          <p class="p_ooo_footer">ООО "Профит"</p>
          <p class="footer-copyright"><?php
          // Parse Kirbytext to support dynamic year,
          // but remove all HTML like paragraph tags:
          echo html::decode($site->copyright()->kirbytext())
          ?></p>
        </div>
        <div class="col-lg-5 footer_col_2">
          <h4>Мы выполняем:</h4>
          <ul>
          <?php foreach($site->children()->services()->children()->visible() as $item): ?>
            <li><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
          <?php endforeach ?>
          </ul>
        </div>
        <div class="col-lg-4">
          
        </div>
      </div>
    </div>
  </footer>
  
  <?= js('assets/js/libs.min.js') ?>
  <?= js('assets/js/common.js') ?>
</body>
</html>