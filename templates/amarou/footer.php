
<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
    <!-- ========================
      Footer
    ========================== -->
	<footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-5 footer-widget footer-widget-about">
              <h6 class="footer-widget-title">
                <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/about-head.php"
                    )
                  );?>
              </h6>
              <div class="footer-widget-content">
                <p class="mb-20">
                  <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/about.php"
                    )
                  );?>
                </p>
                <a href="request-quote.html" class="btn btn__primary btn__link ">
                  <i class="icon-arrow-right"></i><span>
                    <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/request.php"
                    )
                  );?>
                  </span>
                </a>
              </div>
            </div><!-- /.col-xl-4 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget-title">Services</h6>
              <div class="footer-widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Construction Manage</a></li>
                    <li><a href="#">Construction Consultants</a></li>
                    <li><a href="#">Architecture & Building</a></li>
                    <li><a href="#">Home Renovations</a></li>
                    <li><a href="#">Tiling & Painiting</a></li>
                    <li><a href="#">Interior Design</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget-title">Company</h6>
              <div class="footer-widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="leadership-team.html">Meet Our Team</a></li>
                    <li><a href="blog.html">News & Media</a></li>
                    <li><a href="projects-grid.html">Case Studies</a></li>
                    <li><a href="contacs.html">Contacts</a></li>
                    <li><a href="careers.html">Careers</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-contact">
              <h6 class="footer-widget-title">
                <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/contact-head.php"
                    )
                  );?>
              </h6>
              <div class="footer-widget-content">
                <p class="mb-20">
                  <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/contact-text.php"
                    )
                  );?>
                </p>
                <a class="contact-number contact-number-white d-flex align-items-center mb-20" href="tel:5565454117">
                  <i class="icon-phone"></i><span> 
                    <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/phone-full.php"
                    )
                  );?>
                  </span>
                </a><!-- /.contact__numbr -->
                <p class="mb-30">
                  <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/address.php"
                    )
                  );?>
                </p>
                <ul class="social-icons list-unstyled">
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH . "/includes/social.php"
                    )
                  );?>
                </ul><!-- /.social-icons -->
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-copyrights">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <p class="mb-0">
                <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/copyright.php"
                    )
                  );?>
              </p>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-copyrights-->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

    <div class="search-popup">
      <i class="search-popup__close">&times;</i>
      <form class="search-popup__form">
        <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
        <button class="search-popup__btn"><i class="fas fa-search"></i></button>
      </form>
    </div><!-- /. search-popup -->

  </div><!-- /.wrapper -->

  <script src="<?= SITE_TEMPLATE_PATH; ?>/js/jquery-3.5.1.min.js"></script>
  <script src="<?= SITE_TEMPLATE_PATH; ?>/js/plugins.js"></script>
  <script src="<?= SITE_TEMPLATE_PATH; ?>/js/main.js"></script>
</body>

</html>
