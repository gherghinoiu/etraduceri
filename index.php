<?php
  // 1. Încarcă creierul site-ului și limba
  include 'core/init.php';
  
  // 2. Setează variabilele unice pentru această pagină
  $pageTitle = $lang['seo_title_acasa'];
  $metaDescription = $lang['seo_desc_acasa'];
  $bodyClass = "layout-home item-108"; // Clasificări unice de pe <body>
  
  // 3. Încarcă Header-ul
  include 'includes/header.php';
?>


        <div id="t4-component" class="t4-section  t4-component">
          <div class="t4-section-inner container">
            <div id="system-message-container" aria-live="polite"></div>
            <div class="com-content-article item-page project-page " itemscope itemtype="https://schema.org/Article">
              <meta itemprop="inLanguage" content="ro-RO">







              <div itemprop="articleBody" class="com-content-article__body">
                <h1 style="text-align: center;"><?php echo $lang['home_h1']; ?></h1>
                <h2 style="text-align: center;"><?php echo $lang['home_h2']; ?></h2>
                <br/>
                <h3 style="text-align: center;"><?php echo $lang['home_h3']; ?></h3>
              </div>


            </div>
          </div>
        </div>

        

        <div id="t4-section-1" class="t4-section  t4-section-1  t4-section-inview gutter-big  t4-palette-primary">
          <div class="bg-overlay bg-overlay-image">&nbsp;</div>
          <div class="t4-section-inner container">
            <div class="t4-module t4-section-module module " id="Mod114">
              <div class="module-inner">
                <div class="row">
                  <div class="module-head-group col-md-4">
                    <h1 class="module-title "><span>Laseda Services</span></h1>
                    <h2 class="sub-title"></h2>
                    <p class="sub-desc"></p>
                  </div>
                  <div class="module-ct col-md-8">
                    <div id="acm-hero-114" class="acm-hero style-1 text-left  show-intro">

                      <div class="hero-content">
                        <h2 class="hero-heading animated" data-animated-type="fadeInRight">
                          <?php echo $lang['home_who_we_are']; ?> </h2>

                        <p class="lead hero-intro animated delay-1s" data-animated-type="fadeInRight">
                          <?php echo $lang['home_who_we_are_text']; ?> </p>

                        <div class="hero-btn-actions animated delay-2s" data-animated-type="fadeInRight">
                          <a class="btn btn-lg btn-secondary" href="servicii.html" title="<?php echo $lang['home_our_services']; ?>">
                            <?php echo $lang['home_our_services_text']; ?> <i class="fas fa-long-arrow-alt-right"></i>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="t4-section-2" class="t4-section  t4-section-2  gutter-big t4-section-inview">
          <div class="t4-section-inner container">
            <div class="t4-module t4-section-module module " id="Mod115">
              <div class="module-inner">
                <div class="row">
                  <div class="module-head-group col-md-4">
                    <h3 class="module-title "><span><?php echo $lang['home_our_services']; ?></span></h3>
                    <h2 class="sub-title"></h2>
                    <p class="sub-desc"></p>
                  </div>
                  <div class="module-ct col-md-8">
                    <div id="acm-hero-115" class="acm-hero style-2 text-left ">
                      <div class="row">


                        <div class="hero-content col-md-6">

                          <img class="hero-img" src="../images/item-4.png#joomlaImage://local-images/item-4.png?width=60&amp;height=57" alt="<?php echo $lang['home_authorized_translations']; ?>" />

                          <h5 class="hero-heading">
                            <a href="#" title="<?php echo $lang['home_authorized_translations']; ?>">
                              <?php echo $lang['home_authorized_translations']; ?> </a>
                          </h5>

                          <p class="lead hero-intro">
                            <?php echo $lang['home_authorized_translations_text']; ?> </p>

                        </div>


                        <div class="hero-content col-md-6">

                          <img class="hero-img" src="../images/item-3.png#joomlaImage://local-images/item-3.png?width=60&amp;height=60" alt="<?php echo $lang['home_legalized_translations']; ?>" />

                          <h5 class="hero-heading">
                            <a href="#" title="<?php echo $lang['home_legalized_translations']; ?>">
                              <?php echo $lang['home_legalized_translations']; ?> </a>
                          </h5>

                          <p class="lead hero-intro">
                            <?php echo $lang['home_legalized_translations_text']; ?>
                          </p>

                        </div>


                        <div class="hero-content col-md-6">

                          <img class="hero-img" src="../images/item-2.png#joomlaImage://local-images/item-2.png?width=60&amp;height=60" alt="<?php echo $lang['home_text_correction']; ?>" />

                          <h5 class="hero-heading">
                            <a href="#" title="<?php echo $lang['home_text_correction']; ?>">
                              <?php echo $lang['home_text_correction']; ?> </a>
                          </h5>

                          <p class="lead hero-intro">
                            <?php echo $lang['home_text_correction_text']; ?> </p>

                        </div>


                        <div class="hero-content col-md-6">

                          <img class="hero-img" src="../images/item-2.png#joomlaImage://local-images/item-2.png?width=60&amp;height=60" alt="<?php echo $lang['home_interpretation_services']; ?>" />

                          <h5 class="hero-heading">
                            <a href="#" title="<?php echo $lang['home_interpretation_services']; ?>">
                              <?php echo $lang['home_interpretation_services']; ?> </a>
                          </h5>

                          <p class="lead hero-intro">
                            <?php echo $lang['home_interpretation_services_text']; ?> </p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="t4-section-3" class="t4-section  t4-section-3  t4-section-inview">
          <div class="t4-section-inner container">
            <div class="t4-module t4-section-module module " id="Mod130">
              <div class="module-inner">
                <div class="row">
                  <div class="module-head-group col-md-4">
                    <h3 class="module-title "><span><?php echo $lang['home_how_we_work']; ?></span></h3>
                    <h2 class="sub-title"></h2>
                    <p class="sub-desc"></p>
                  </div>
                  <div class="module-ct col-md-8">
                    <div id="acm-hero-130" class="acm-hero style-2 text-left ">
                      <div class="row">


                        <div class="hero-content col-md-6">



                          <p class="lead hero-intro">
                            <?php echo $lang['home_how_we_work_step_1']; ?> </p>

                        </div>


                        <div class="hero-content col-md-6">



                          <p class="lead hero-intro">
                            <?php echo $lang['home_how_we_work_step_2']; ?> </p>

                        </div>


                        <div class="hero-content col-md-6">



                          <p class="lead hero-intro">
                            <?php echo $lang['home_how_we_work_step_3']; ?> </p>

                        </div>


                        <div class="hero-content col-md-6">



                          <p class="lead hero-intro">
                            <?php echo $lang['home_how_we_work_step_4']; ?> </p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




        <div id="t4-section-7" class="t4-section  t4-section-7  t4-section-inview  t4-palette-gray">
          <div class="bg-overlay bg-overlay-image">&nbsp;</div>
        </div>

        <div id="t4-section-8" class="t4-section  t4-section-8  t4-section-inview   t4-palette-primary">
          <div class="bg-overlay bg-overlay-image">&nbsp;</div>
        </div>

        <!-- <div id="t4-footer" class="t4-section  t4-footer  t4-section-inview  t4-palette-dark">
          <div class="t4-section-inner container">
            <div class="t4-row row">
              <div class="t4-col footer col-sm col-md-7">

                <div id="acm-hero-118" class="acm-hero style-1 text-left  show-intro">

                  <div class="hero-content">
                    <h2 class="hero-heading animated" data-animated-type="fadeInRight">
                      Serviciile noastre se adresează atât companiilor cât și persoanelor fizice, criteriile care ne definesc fiind profesionalismul și flexibilitatea. Un client mulțumit reprezintă o dovadă clară a succesului nostru. </h2>


                  </div>

                </div>
              </div>

            </div>
          </div>
        </div> -->

        <div id="t4-footnav" class="t4-section  t4-footnav  t4-palette-dark">
          <div class="t4-section-inner container">
            <div class="t4-row row">
              <div class="t4-col logo col-sm-12 col-md-3">
                <div class="navbar-brand logo-image logo-control">
                  <a href="../index.html" title="Laseda Services">
                    <img class="logo-img-sm d-block d-sm-none" src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50" alt="Laseda Services" />

                    <img class="logo-img d-none d-sm-block" src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50" alt="Laseda Services" />

                  </a>
                </div>

              </div>
              <div class="t4-col footnav-1 col-sm col-md-3">
                <div class="t4-module module " id="Mod117">
                  <div class="module-inner">
                    <div class="module-ct">

                      <div class="custom">
                        <p>Copyright 2022 Laseda Services</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="t4-col footnav-2 col-sm col-md-3">
                <div class="t4-module module " id="Mod133">
                  <div class="module-inner">
                    <h3 class="module-title "><span>Suport clienți</span></h3>
                    <div class="module-ct">
                      <nav class="navbar navbar-expand-md" aria-label="Suport clienți">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbar133" aria-controls="navbar133" aria-expanded="false" aria-label="Comută navigarea">
                          <span class="icon-menu" aria-hidden="true"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar133">
                          <ul class="mod-menu mod-list nav ">
                            <li class="nav-item item-131"><a href="https://anpc.ro/" class=" nav-link">ANPC</a></li>
                          </ul>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div><a href='javascript:' id='back-to-top'><i class='fa fa-chevron-up'></i></a>
      </div>
    </div>
  </div>

</body>

<!-- Mirrored from traduceriautorizat.com/index.php/ro/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 05:07:05 GMT -->

</html>