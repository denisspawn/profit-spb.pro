<?php snippet('header') ?>

<!-- ############################################################################################# -->
  <main class="main" role="main">
  
    <section class="trust_triggers">
      <div class="container">
        <div class="row">
          <div class="h2_wrap">
            <h2>Почему выбирают нас?</h2>
          </div>
          <div class="col-lg-4">
            <div class="triger">
              <div class="image_triger">
                <img src="assets/img/trigers/clock.svg" alt="">
              </div>
            </div>
            <div class="p_wrap">
              <p>Выезд по адресу в день заказа</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="triger">
              <div class="image_triger">
                <img src="assets/img/trigers/cup.svg" alt="">
              </div>
            </div>
            <div class="p_wrap">
              <p>Гарантия на работы 2 года</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="triger">
              <div class="image_triger">
                <img src="assets/img/trigers/hat.svg" alt="">
              </div>
            </div>
            <div class="p_wrap">
              <p>Мы профессионалы</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ############################################################################################# -->

  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

      <p class="footer-madewithkirby">
        <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b class="heart">♥</b></a>
      </p>
    
    </div>
  </footer>
  
  <?= js('assets/js/libs.min.js') ?>
  <?= js('assets/js/common.js') ?>
</body>
</html>