<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 


    <!-- ============================
        Slider
    ============================== -->
    <section class="slider slider-layout1">
      <div class="slick-carousel carousel-arrows-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="<?= SITE_TEMPLATE_PATH; ?>/images/sliders/1.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="slide-item__content">
                  <h1 class="slide-item__subtitle">High Quality Construction Solutions For Residentials & Industries!
                  </h1>
                  <h2 class="slide-item__title">Provide Effective Building Solutions!</h2>
                  <p class="slide-item__desc">A leading developer of A-grade commercial, industrial and residential
                    projects
                    in USA. Since its foundation the company has doubled its turnover</p>
                  <a href="about-us.html" class="btn btn__primary btn__lg mr-30">
                    <i class="icon-arrow-right"></i><span>More About Us!</span>
                  </a>
                  <a href="services.html" class="btn btn__white">Our Services</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-9 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="<?= SITE_TEMPLATE_PATH; ?>/images/sliders/2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="slide-item__content">
                  <h1 class="slide-item__subtitle">High Quality Construction Solutions For Residentials & Industries!
                  </h1>
                  <h2 class="slide-item__title">Always Work With Global Industries.</h2>
                  <p class="slide-item__desc">A leading developer of A-grade commercial, industrial and residential
                    projects
                    in USA. Since its foundation the company has doubled its turnover</p>
                  <a href="about-us.html" class="btn btn__primary btn__lg mr-30">
                    <i class="icon-arrow-right"></i><span>More About Us!</span>
                  </a>
                  <a href="services.html" class="btn btn__white">Our Services</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-9 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
    features
    =========================== -->
    <section class="features-latout1 py-0">
      <div class="container">
        <div class="row mx-0">
          <div class="col-sm-12 col-md-12 col-lg-12 px-0 features-wrapper d-flex flex-wrap">
            <!-- feature item #1 -->
            <div class="feature-item">
              <div class="feature-item__content">
                <h4 class="feature-item__title">Powerfull Strategy</h4>
                <p class="feature-item__desc">Facilities meet high security requirements and are certified to the
                  highest local standards.</p>
                <a href="#" class="btn btn__link btn__secondary"><i class="icon-arrow-right"></i></a>
              </div><!-- /.feature-content -->
            </div><!-- /.col-lg-3 -->
            <!-- feature item #2 -->
            <div class="feature-item">
              <div class="feature-item__content">
                <h4 class="feature-item__title">Award Winning</h4>
                <p class="feature-item__desc">International supply chains involves of unknown risks and challenging
                  regulations.</p>
                <a href="#" class="btn btn__link btn__secondary"><i class="icon-arrow-right"></i></a>
              </div><!-- /.feature-content -->
            </div><!-- /.col-lg-3 -->
            <!-- feature item #3 -->
            <div class="feature-item">
              <div class="feature-item__content">
                <h4 class="feature-item__title">Accurate Testing</h4>
                <p class="feature-item__desc">Utilising latest processing solutions, and decades of work experience.</p>
                <a href="#" class="btn btn__link btn__secondary"><i class="icon-arrow-right"></i></a>
              </div><!-- /.feature-content -->
            </div><!-- /.col-lg-3 -->
            <!-- feature item #4 -->
            <div class="feature-item bg-theme">
              <div class="slick-carousel m-slides-0"
                data-slick='{"slidesToShow": 1, "arrows": false, "dots": true, "autoPlay": true}'>
                <div class="feature-item__content">
                  <h4 class="feature-item__title color-white d-flex align-items-end mb-25">
                    <span class="counter">6,154</span><span>Projects</span>
                  </h4>
                  <p class="feature-item__desc color-white mb-0">Complete control over products allows us to ensure our
                    customers receive
                    the best quality prices and service.</p>
                </div><!-- /.feature-content -->
                <div class="feature-item__content">
                  <h4 class="feature-item__title color-white d-flex align-items-end mb-25">
                    <span class="counter">3,200</span><span>Employees</span>
                  </h4>
                  <p class="feature-item__desc color-white mb-0">Complete control over products allows us to ensure our
                    customers receive
                    the best quality prices and service.</p>
                </div><!-- /.feature-content -->
              </div>
            </div><!-- /.col-lg-3 -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.features -->

    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about-img-container">
              <div class="about-img">
                <img src="assets/images/about/1.jpg" alt="about" class="img-fluid">
              </div><!-- /.about-img -->
              <div class="about-img">
                <img src="assets/images/about/2.jpg" alt="about" class="img-fluid">
              </div><!-- /.about-img -->
            </div>
            <div class="video-box">
              <a class="video-btn video-btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video-btn__player">
                  <i class="fa fa-play"></i>
                </div>
              </a>
            </div><!-- /.video__box -->
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-container heading-layout2">
              <h3 class="heading__title">Ready to Bring Bigger, Better, Faster & Stronger Projects Than Ever!!</h3>
              <p class="heading__desc mt-30 mb-30">Amarou is a representative Industrial Construction operator
                providing full range of service in the sphere of Civil Construction & Mechanical Engineering worldwide
                for any type of industrial soultions.
              </p>
              <p class="heading__desc mb-30">Yet those that embrace change are thriving, building bigger, better,
                faster, and
                stronger products than ever before. You are helping lead the charge; we can help you build on your past
                and prepare future changing faster than ever before, Amarou Constructions are evolving.</p>
              <ul class="list-items list-unstyled mb-40">
                <li>Quality Control System, 100% Satisfaction Guarantee</li>
                <li>Highly Professional Staff, Accurate Testing Processes</li>
                <li>Unrivalled workmanship, Professional and Qualified</li>
              </ul>
              <a href="projects-grid.html" class="btn btn__secondary btn__icon">
                <i class="icon-arrow-right"></i><span>Schedule An Appointment</span>
              </a>
            </div><!-- /heading -->
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- ========================
        Services Layout 2
    =========================== -->
    <section class="services-layout2 pb-90">
      <div class="bg-img"><img src="assets/images/backgrounds/3.jpg" alt="banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h2 class="heading__subtitle color-gray">Quality Construction Solutions For Industries!</h2>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <h3 class="heading__title color-white mb-50">Best A Grade Commercial & Residential Services</h3>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="heading__desc color-dark font-weight-bold mb-50">QA leading developer of A-grade commercial,
              industrial and residential
              projects in USA. Since its foundation the company has doubled its turnover year on year with its staff.
            </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-brick"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Architecture <br> & Building</h4>
                  <p class="service-item__desc">Architecture is both the process and the product of planning, and
                    constructing
                    buildings or any other structures.</p>
                  <ul class="list-items list-items-layout2 list-unstyled mb-30">
                    <li>Cognitive architecture</li>
                    <li>Computer architecture</li>
                    <li>Enterprise architecture</li>
                  </ul>
                  <a href="services-single-service.html" class="btn btn__secondary">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div><!-- /.service-item -->

              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-gloves"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Construction <br> Consultants</h4>
                  <p class="service-item__desc">Given the increasing complexity of many construction projects it is
                    becoming
                    more common that a consultant.</p>
                  <ul class="list-items list-items-layout2 list-unstyled mb-30">
                    <li>Cognitive architecture</li>
                    <li>Computer architecture</li>
                    <li>Enterprise architecture</li>
                  </ul>
                  <a href="services-single-service.html" class="btn btn__secondary">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div><!-- /.service-item -->

              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-high-visibility"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Construction<br> Management</h4>
                  <p class="service-item__desc">Professional service uses specialized, project management techniques to
                    oversee
                    the planning, design.</p>
                  <ul class="list-items list-items-layout2 list-unstyled mb-30">
                    <li>Cognitive architecture</li>
                    <li>Computer architecture</li>
                    <li>Enterprise architecture</li>
                  </ul>
                  <a href="services-single-service.html" class="btn btn__secondary">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div><!-- /.service-item -->

              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-floor-plan"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Planning And <br> Scheduling</h4>
                  <p class="service-item__desc">When it comes to choosing a renovator to transform the interior of your
                    home,
                    quality never be compromised.</p>
                  <ul class="list-items list-items-layout2 list-unstyled mb-30">
                    <li>Cognitive architecture</li>
                    <li>Computer architecture</li>
                    <li>Enterprise architecture</li>
                  </ul>
                  <a href="services-single-service.html" class="btn btn__secondary">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div><!-- /.service-item -->

              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-pantone"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Tiling And <br> Painting</h4>
                  <p class="service-item__desc">When it comes to choosing a renovator to transform the interior of your
                    home, quality never be compromised.</p>
                  <ul class="list-items list-items-layout2 list-unstyled mb-30">
                    <li>Cognitive architecture</li>
                    <li>Computer architecture</li>
                    <li>Enterprise architecture</li>
                  </ul>
                  <a href="services-single-service.html" class="btn btn__secondary">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div><!-- /.service-item -->

              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-concrete-mixer-1"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Design Build <br> Contracts</h4>
                  <p class="service-item__desc">Design build is project delivery in which one entity works under a
                    single
                    contract with the project owner to provide.</p>
                  <ul class="list-items list-items-layout2 list-unstyled mb-30">
                    <li>Cognitive architecture</li>
                    <li>Computer architecture</li>
                    <li>Enterprise architecture</li>
                  </ul>
                  <a href="services-single-service.html" class="btn btn__secondary">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-12 -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- =====================
         Clients
      ======================== -->
    <section class="clients bg-gray">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/1.png" alt="client">
              <img src="assets/images/clients/1.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/2.png" alt="client">
              <img src="assets/images/clients/2.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/3.png" alt="client">
              <img src="assets/images/clients/3.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/4.png" alt="client">
              <img src="assets/images/clients/4.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/5.png" alt="client">
              <img src="assets/images/clients/5.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/6.png" alt="client">
              <img src="assets/images/clients/6.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/7.png" alt="client">
              <img src="assets/images/clients/7.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/8.png" alt="client">
              <img src="assets/images/clients/8.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/9.png" alt="client">
              <img src="assets/images/clients/9.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/10.png" alt="client">
              <img src="assets/images/clients/10.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/11.png" alt="client">
              <img src="assets/images/clients/11.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
          <div class="col-6 col-sm-4 col-md-2 col-lg-2">
            <div class="client">
              <img src="assets/images/clients/12.png" alt="client">
              <img src="assets/images/clients/12.png" alt="client">
            </div><!-- /.client -->
          </div><!-- /.col-lg-2 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients -->

    <!-- =========================
         Banner layout 1
        =========================== -->
    <section class="banner-layout3 py-0 bg-gray">
      <div class="container-fluid col-padding-0">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="banner-panel">
              <div class="heading-layout2 mb-40">
                <h2 class="heading__subtitle">How We Work In Three Easy Steps</h2>
                <h3 class="heading__title">Pushing The Boundaries Of What’s Possible.</h3>
                <p class="heading__desc">Yet those that embrace change are thriving, building bigger, better, faster,
                  and stronger products than ever before. You are helping lead the charge; we can help you build on your
                  past and prepare future changing faster than ever before.</p>
              </div><!-- /.heading -->
              <div class="row">
                <!-- fancybox item #1 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox-item__icon">
                      <i class="icon-barrier"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox-item__content">
                      <h4 class="fancybox-item__title">Evaluation & Signing Of The Contract.</h4>
                      <p class="fancybox-item__desc d-flex align-items-center">
                        <span class="divider-line divider-line-sm mr-2"></span><strong>Step 01</strong>
                      </p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-4 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox-item__icon">
                      <i class="icon-measurement"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox-item__content">
                      <h4 class="fancybox-item__title">Preparation Of The Work Plan.</h4>
                      <p class="fancybox-item__desc d-flex align-items-center">
                        <span class="divider-line divider-line-sm mr-2"></span><strong>Step 02</strong>
                      </p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-4 -->
                <!-- fancybox item #3 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox-item__icon">
                      <i class="icon-excavator"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox-item__content">
                      <h4 class="fancybox-item__title">Implementation Of Quality Works.</h4>
                      <p class="fancybox-item__desc d-flex align-items-center">
                        <span class="divider-line divider-line-sm mr-2"></span><strong>Step 03</strong>
                      </p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-4 -->
              </div>
            </div><!-- /.banner-panel -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-7">
            <img src="assets/images/banners/3.jpg" alt="banner" class="w-100">
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 1 -->

    <!-- =========================== 
      portfolio standard carousel
    ============================= -->
    <section class="portfolio-standard portfolio-standard-carousel pt-20 pb-60 bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading mb-40">
              <h2 class="heading__subtitle">Explore Recent Works</h2>
              <h3 class="heading__title">Featured Projects</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <!-- portfolio item #1 -->
              <div class="portfolio-item">
                <div class="portfolio-item__img">
                  <a class="popup-gallery-item" href="assets/images/portfolio/grid/1.jpg">
                    <img src="assets/images/portfolio/grid/1.jpg" alt="portfolio img">
                  </a>
                </div><!-- /.portfolio-img -->
                <div class="portfolio-item__content">
                  <div class="portfolio-item__cat">
                    <a href="#">Building</a><a href="#">Interior</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio-item__title"><a href="projects-single-project.html">The Fallingwater House</a>
                  </h4>
                  <p class="portfolio-item__desc">We understand that data is greatest asset when it comes to analyzing
                    and
                    optimizing your supply chain performance.</p>
                  <a href="projects-single-project.html" class="btn btn__loadMore">
                    <i class="icon-arrow-right"></i> <span>Explore More</span>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #2 -->
              <div class="portfolio-item">
                <div class="portfolio-item__img">
                  <a class="popup-gallery-item" href="assets/images/portfolio/grid/2.jpg">
                    <img src="assets/images/portfolio/grid/2.jpg" alt="portfolio img">
                  </a>
                </div><!-- /.portfolio-img -->
                <div class="portfolio-item__content">
                  <div class="portfolio-item__cat">
                    <a href="#">Construction</a><a href="#">Engineering</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio-item__title"><a href="projects-single-project.html">The Guggenheim Museum</a>
                  </h4>
                  <p class="portfolio-item__desc">Cost savings is crucial, innovative technology minimizes your overall
                    spend
                    by utilizing an extensive consolidation.</p>
                  <a href="projects-single-project.html" class="btn btn__loadMore">
                    <i class="icon-arrow-right"></i> <span>Explore More</span>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #3 -->
              <div class="portfolio-item">
                <div class="portfolio-item__img">
                  <a class="popup-gallery-item" href="assets/images/portfolio/grid/3.jpg">
                    <img src="assets/images/portfolio/grid/3.jpg" alt="portfolio img">
                  </a>
                </div><!-- /.portfolio-img -->
                <div class="portfolio-item__content">
                  <div class="portfolio-item__cat">
                    <a href="#">Renovation</a><a href="#">Architecture</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio-item__title"><a href="projects-single-project.html">Neue National Galerie</a>
                  </h4>
                  <p class="portfolio-item__desc">Our Group has been building relationships and projects last. Serving
                    an
                    impressive list of long-term clients with experience.</p>
                  <a href="projects-single-project.html" class="btn btn__loadMore">
                    <i class="icon-arrow-right"></i> <span>Explore More</span>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #4 -->
              <div class="portfolio-item">
                <div class="portfolio-item__img">
                  <a class="popup-gallery-item" href="assets/images/portfolio/grid/4.jpg">
                    <img src="assets/images/portfolio/grid/4.jpg" alt="portfolio img">
                  </a>
                </div><!-- /.portfolio-img -->
                <div class="portfolio-item__content">
                  <div class="portfolio-item__cat">
                    <a href="#">Construstion</a><a href="#">Cuilding</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio-item__title"><a href="projects-single-project.html">Sagrada Familia</a></h4>
                  <p class="portfolio-item__desc">Cost savings is crucial, innovative technology minimizes your overall
                    spend
                    by utilizing an extensive consolidation.</p>
                  <a href="projects-single-project.html" class="btn btn__loadMore">
                    <i class="icon-arrow-right"></i> <span>Explore More</span>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #5 -->
              <div class="portfolio-item">
                <div class="portfolio-item__img">
                  <a class="popup-gallery-item" href="assets/images/portfolio/grid/5.jpg">
                    <img src="assets/images/portfolio/grid/5.jpg" alt="portfolio img">
                  </a>
                </div><!-- /.portfolio-img -->
                <div class="portfolio-item__content">
                  <div class="portfolio-item__cat">
                    <a href="#">Engineering</a><a href="#">Renovation</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio-item__title"><a href="projects-single-project.html">Heydar Aliyev Center</a></h4>
                  <p class="portfolio-item__desc">Our Group has been building relationships and projects last. Serving
                    an
                    impressive list of long-term clients with experience.</p>
                  <a href="projects-single-project.html" class="btn btn__loadMore">
                    <i class="icon-arrow-right"></i> <span>Explore More</span>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #6 -->
              <div class="portfolio-item">
                <div class="portfolio-item__img">
                  <a class="popup-gallery-item" href="assets/images/portfolio/grid/6.jpg">
                    <img src="assets/images/portfolio/grid/6.jpg" alt="portfolio img">
                  </a>
                </div><!-- /.portfolio-img -->
                <div class="portfolio-item__content">
                  <div class="portfolio-item__cat">
                    <a href="#">Building</a><a href="#">Modern</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio-item__title"><a href="projects-single-project.html">Cathedral of Brasilia</a>
                  </h4>
                  <p class="portfolio-item__desc">We understand that data is greatest asset when it comes to analyzing
                    and
                    optimizing your supply chain performance.</p>
                  <a href="projects-single-project.html" class="btn btn__loadMore">
                    <i class="icon-arrow-right"></i> <span>Explore More</span>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.slick-carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio standard carousel -->

    <!-- =========================
       Banner layout 4
      =========================== -->
    <section class="banner-layout4 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/banners/4.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading-layout3 heading-light mb-30">
              <h2 class="heading__subtitle">We Work With Global Industries!</h2>
              <h3 class="heading__title">We Help Build On Past & Prepare For Your Future.</h3>
            </div>
            <a href="services.html" class="btn btn__white btn__bordered mb-20">Our Services</a>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="row fancybox-light">
              <!-- fancybox item #1 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-warning"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">Control System</h4>
                    <p class="fancybox-item__desc">High security requirements and are certified .</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-44 -->
              <!-- fancybox item #2 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-laser-level"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">100% Satisfaction</h4>
                    <p class="fancybox-item__desc">Building projects impressive list of long-term clients.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #3 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-disc-grinder"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">Professional Staff</h4>
                    <p class="fancybox-item__desc">Involves of unknown risks and challenging regulations.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #4 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-chainsaw"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">Workmanship</h4>
                    <p class="fancybox-item__desc">Take great pride in everything that we do in our Company.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-44 -->
              <!-- fancybox item #5 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-ladder"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">High Performance</h4>
                    <p class="fancybox-item__desc">Recognized as one of World's leading Construction firms.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #6 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-brush"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">Uinque Solutions</h4>
                    <p class="fancybox-item__desc">Bring bigger, better, faster and stronger projects than ever.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 4 -->

    <!-- ==========================
        contact layout 2
      =========================== -->
    <section class="contact-layout2 py-0 bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact-panel mt--130">
              <div class="testimonials testimonials-layout1 bg-overlay bg-overlay-theme">
                <div class="bg-img">
                  <img src="assets/images/banners/6.jpg" alt="banner">
                </div>
                <div class="slick-carousel"
                  data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "infinite": true}'>
                  <!-- Testimonial #1 -->
                  <div class="testimonial-item">
                    <div class="testimonial-item__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-item__desc">They are the expertly trained team members who take extra step and
                      go the extra mile, to fulfill our promise to deliver dynamic solutions to our customers to fit
                      needs of a rapidly changing global environment!!
                    </p>
                    <div class="testimonial-item__meta">
                      <div class="testimonial-item__thumb">
                        <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                      </div><!-- /.testimonial-thumb -->
                      <div>
                        <h4 class="testimonial-item__meta-title">Martin Hope</h4>
                        <p class="testimonial-item__meta-desc">Pro Cons</p>
                      </div>
                    </div><!-- /.testimonial-meta -->
                  </div><!-- /. testimonial-item -->
                  <!-- Testimonial #2 -->
                  <div class="testimonial-item">
                    <div class="testimonial-item__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                      determination turned it into an awesome and great project which make me happy because they help me
                      accelerate my business.
                    </p>
                    <div class="testimonial-item__meta">
                      <div class="testimonial-item__thumb">
                        <img src="assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                      </div><!-- /.testimonial-thumb -->
                      <div>
                        <h4 class="testimonial-item__meta-title">John Peter</h4>
                        <p class="testimonial-item__meta-desc">7oroof Inc</p>
                      </div>
                    </div><!-- /.testimonial-meta -->
                  </div><!-- /. testimonial-item -->
                  <!-- Testimonial #3 -->
                  <div class="testimonial-item">
                    <div class="testimonial-item__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                      determination turned it into an awesome and great project which make me happy because they help me
                      accelerate my business.
                    </p>
                    <div class="testimonial-item__meta">
                      <div class="testimonial-item__thumb">
                        <img src="assets/images/testimonials/thumbs/3.jpg" alt="author thumb">
                      </div><!-- /.testimonial-thumb -->
                      <div>
                        <h4 class="testimonial-item__meta-title">John Peter</h4>
                        <p class="testimonial-item__meta-desc">7oroof Inc</p>
                      </div>
                    </div><!-- /.testimonial-meta -->
                  </div><!-- /. testimonial-item -->
                </div>
              </div><!-- /.testimonials-layout1 -->
              <form method="post" action="assets/php/contact.php" id="contactForm" class="contact-panel__form">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Request A Quote</h4>
                    <p class="contact-panel__desc mb-40">We take great pride in everything that we do, complete control
                      over products allows us to ensure our customers receive the best quality service.
                    </p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select class="form-control" style="display: none;">
                        <option>select your industry</option>
                        <option>Petroleum &amp; Gas Energy</option>
                        <option>Construction &amp; Engineering</option>
                        <option>Mechanical Engineering</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Additional Details!" id="contact-messgae"
                        name="contact-messgae" required></textarea>
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                    <button type="submit" class="btn btn__secondary mr-40">
                      <i class="icon-arrow-right"></i> <span>Submit Request</span>
                    </button>
                    <div class="form-group input-radio my-3">
                      <label class="label-radio">I accept the privacy and terms.
                        <input type="checkbox" checked="">
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                  </div><!-- /.col-lg-12 -->
                </div>
              </form>
            </div><!-- /.contact__panel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

    <!-- =========================== 
      counters
    ============================= -->
    <section class="counters-layout2">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="heading-layout3 mb-70">
              <h2 class="heading__subtitle">Work With All The Major Industry Suppliers</h2>
              <h3 class="heading__title">Committed To Delivering High Quality Construction Projects And Innovate Design!
              </h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- counter item #1 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">6,154</h4>
              <p class="counter-item__desc">Projects And Residentials Completed in 2020</p>
            </div>
            <hr>
            <p>Yet those that embrace change are thriving, building bigger, better, faster, and stronger products than
              ever.</p>
            <ul class="list-items list-items-layout2 list-unstyled">
              <li>Download Brochures</li>
              <li>Pricing and Plans</li>
              <li>Request Quote</li>
            </ul>
          </div><!-- /.col-sm-3 -->
          <!-- counter item #2 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">2,512</h4>
              <p class="counter-item__desc">Qualified Employees And Workers With Us</p>
            </div>
            <hr>
            <p>You are helping lead the charge; we can help you build on your past and prepare future changing faster.
            </p>
            <ul class="list-items list-items-layout2 list-unstyled">
              <li>Our Leadership Team</li>
              <li>Awards & Regognition</li>
              <li>Join Our Team</li>
            </ul>
          </div><!-- /.col-sm-3 -->
          <!-- counter item #3 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">1,784</h4>
              <p class="counter-item__desc">Satisfied Clients We Have Served Globally</p>
            </div>
            <hr>
            <p>Industrial Construction operator providing full range of service in the sphere of Civil Construction.</p>
            <ul class="list-items list-items-layout2 list-unstyled">
              <li>Clients & Investors</li>
              <li>Our Locations</li>
              <li>Contsct Us</li>
            </ul>
          </div><!-- /.col-sm-3 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">0,46</h4>
              <p class="counter-item__desc">Years Of Experience In The Construction Industry</p>
            </div>
            <hr>
            <p>Since its foundation the company has doubled its turnover year on year with our experienced staff.</p>
            <ul class="list-items list-items-layout2 list-unstyled">
              <li>Mission and Vission</li>
              <li>Company History</li>
              <li>Help & FAQs</li>
            </ul>
          </div><!-- /.col-sm-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.counters -->

    <!-- =========================
       Banner layout 1
      =========================== -->
    <section class="banner-layout1 py-0 has-top-gray">
      <div class="container-fluid col-padding-0">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <img src="assets/images/banners/1.jpg" alt="banner" class="w-100">
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="banner-panel">
              <a class="video-btn video-btn-md popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video-btn__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video-btn__title">Watch Our Intro!</span>
              </a>
              <div class="heading-layout2 mt-20 mb-20">
                <h3 class="heading__title">Providing Full Range Services And Soultions Worldwide. </h3>
              </div><!-- /.heading -->
              <div id="accordion">
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                    <a class="accordion__item-title" href="#">Which Plan Is Right For Me?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <p>With any financial product that you buy, it is important that you know you are getting the best
                        advice from a reputable company as often</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                    <a class="accordion__item-title" href="#">Do I have to commit to a contract?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <p>With any financial product that you buy, it is important that you know you are getting the best
                        advice from a reputable company as often</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item opened">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion__item-title" href="#">What Payment Methods Are Available?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse show" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <p>With any financial product that you buy, it is important that you know you are getting the best
                        advice from a reputable company as often</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
              </div><!-- /.accordion -->
            </div><!-- /.banner-panel -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 1 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle">Insight and Trends</h2>
              <h3 class="heading__title">Recent Articles</h3>
              <span class="divider-line mx-auto"></span>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Blog Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/4.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap align-items-center">
                  <span class="post-item__meta-date">Jan 20, 2020</span>
                  <div class="post-item__meta-cat">
                    <a href="#">Oil & Gas</a><a href="#">Insights</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="post-item__title"><a href="blog-single-post.html">Importers achieve cost savings through the
                    First Sale rule!</a>
                </h4>
                <p class="post-item__desc">The trade war currently ensuing between the US and several nations around the
                  globe, most fiercely with China, shows no signs of the first set of tariffs levied against solar...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/5.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap align-items-center">
                  <span class="post-item__meta-date">Oct 18, 2020</span>
                  <div class="post-item__meta-cat">
                    <a href="#">Industry</a><a href="#">Construction</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="post-item__title"><a href="blog-single-post.html">Cargo flow through better supply chain
                    visibility, control.</a>
                </h4>
                <p class="post-item__desc">Global provider connected products for consumers, and enterprises worldwide,
                  supply chain control is everything, provide visibility and traceability needed for...</p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/6.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap align-items-center">
                  <span class="post-item__meta-date">Jan 20, 2020</span>
                  <div class="post-item__meta-cat">
                    <a href="#">Engineering</a><a href="#">Distribution</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="post-item__title"><a href="blog-single-post.html">Importance of specialized focus in
                    portfolio, Oil & Gas</a>
                </h4>
                <p class="post-item__desc">Our team provides highly skilled & experienced portfolio managers who know
                  the
                  intricacies of this vertical and focus on providing innovative solutions in Oil & Gas...</p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <!-- ========================= 
         contact layout3
    =========================  -->
    <section class="contact-layout3 py-0">
      <div id="map" style="height: 620px;">
        <?$APPLICATION->IncludeComponent(
          "bitrix:map.yandex.view", 
          ".default", 
          array(
            "API_KEY" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "CONTROLS" => array(
              0 => "ZOOM",
              1 => "MINIMAP",
              2 => "TYPECONTROL",
              3 => "SCALELINE",
            ),
            "INIT_MAP_TYPE" => "MAP",
            "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:40.699306141186554;s:10:\"yandex_lon\";d:-73.95707725778041;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:-73.9673769403979;s:3:\"LAT\";d:40.69617489119925;s:4:\"TEXT\";s:13:\"Amarou Office\";}}}",
            "MAP_HEIGHT" => "620",
            "MAP_ID" => "",
            "MAP_WIDTH" => "100%",
            "OPTIONS" => array(
              0 => "ENABLE_SCROLL_ZOOM",
              1 => "ENABLE_DBLCLICK_ZOOM",
              2 => "ENABLE_DRAGGING",
            )
          ),
          false
        );?>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 offset-lg-8">
            <div class="contact-panel__info bg-white">
              <div class="contact-panel__block">
                <h5 class="contact-panel__block__title">Our Location</h5>
                <ul class="contact-panel__block__list list-unstyled">
                  <li>
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
                  </li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <div class="contact-panel__block">
                <h5 class="contact-panel__block__title">
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
                </h5>
                <ul class="contact-panel__block__list list-unstyled">
                  <li>Email: 
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/email.php"
                      )
                    );?>  
                  </li>
                  <li>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/phone-add.php"
                      )
                    );?>
                  </li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <div class="contact-panel__block">
                <h5 class="contact-panel__block__title">
                  <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/working-hours-head.php"
                    )
                  );?>
                </h5>
                <ul class="contact-panel__block__list list-unstyled">
                  <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => SITE_TEMPLATE_PATH . "/includes/working-hours-full.php"
                    )
                  );?>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <a href="contacs.html" class="btn btn__primary btn__block">
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
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact-layout3 -->


    
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
