  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 footer_col_1">
          <div class="logo_wrap">
            <?php if($image = $site->image('logo.svg')): ?>
              <a href="<?= url() ?>" rel="home"><img src="<?php echo $image->url() ?>" alt="logo"></a>
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
        <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 footer_col_2">
          <h4>Мы выполняем:</h4>
          <ul>
          <?php foreach($site->children()->services()->children()->visible() as $item): ?>
            <li><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
          <?php endforeach ?>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="form_wrap">
            <div class="attention_wrap">
              <p class="attention"><span class="fa fa-bullhorn bullhorn-header"></span>Внимание!</p>
              <p class="description">Оставьте  ваши контактные данные и наш консультант свяжется с вами в течении 5 мин.</p>
            </div>
            <form id="footer_form" class="form">
              <p><input type="text" name="name" placeholder="Введите ваше имя" required ></p>
              <p><input type="tel" name="tel" placeholder="Введите ваш телефон" required ></p>
              <button type="submit">Отправить заявку</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php snippet('hidden_form') ?>

  <div class="sales hidden-sm hidden-xs">
    <a href="/actions">Акции</a>
  </div>
  
  <?= js('assets/js/libs.min.js') ?>
  <?= js('assets/js/common.js') ?>

  <!-- BEGIN JIVOSITE CODE {literal} -->
  <script type='text/javascript'>
  (function(){ var widget_id = 'qeHrKVQR3x';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
  <!-- {/literal} END JIVOSITE CODE -->

</body>
</html>