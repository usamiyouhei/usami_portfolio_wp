<!-- footer -->
<footer class="footer" id="footer">
      <div class="footer__container">
        <nav class="footer__nav inner">
          <ul class="footer__items">
            <li class="footer__item"><a href="<?php echo esc_url(home_url("/#about")); ?>">About</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url("/#service")); ?>">Service</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url("/#news")); ?>">News</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url("/#works")); ?>">Works</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url("/#contact")); ?>">Contact</a></li>
          </ul>
        </nav>
        <div class="footer__icon">
          <a href="<?php echo get_template_directory_uri(); ?>/https://twitter.com/" 
            ><i class="fa-brands fa-x-twitter"></i
          ></a>
          <a href="<?php echo get_template_directory_uri(); ?>/https://www.instagram.com/" 
            ><i class="fa-brands fa-square-instagram"></i
          ></a>
          <a href="<?php echo get_template_directory_uri(); ?>/https://www.facebook.com/"
            ><i class="fa-brands fa-facebook"></i
          ></a>
          <a href="<?php echo get_template_directory_uri(); ?>/https://github.com/usamiyouhei"
            ><i class="fa-brands fa-github"></i
          ></a>
          <a href="<?php echo get_template_directory_uri(); ?>/https://www.youtube.com/"
            ><i class="fa-brands fa-youtube"></i
          ></a>
        </div>

        <div class="footer__info inner">
          <h4>Information</h4>
          <p>
            〒460-0067<br />
            愛知県名古屋市千種区池下2-2-8<br />
            正木ビル1-A<br />
            052-753-9669
          </p>
        </div>
      </div>
      <div class="footer__copy-right">
        <p>&copy;<?php echo wp_date("Y");?>y.usami</p>
      </div>
    </footer>

    <!-- pagetop-buttton -->
    <!-- <div class="page-top" style="display: block">
      <a href="#" class="page-top-link">
        <i class="fa-solid fa-arrow-up"></i>
      </a>
    </div> -->

    <!-- <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-26/js/5-1-26.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script> -->
    <!-- <script src="./js/main.js"></script> -->
    <?php wp_footer(); ?>
  </body>
</html>
