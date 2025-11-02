<?php
// Setări implicite, în caz că variabilele nu sunt definite pe pagina
if (!isset($pageTitle)) { $pageTitle = 'Laseda Services'; }
if (!isset($metaDescription)) { $metaDescription = ''; }
if (!isset($bodyClass)) { $bodyClass = ''; }

// Determină calea relativă corectă (pentru CSS/JS)
$path_prefix = './'; 

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_SESSION['lang']; ?>" lang="<?php echo $_SESSION['lang']; ?>" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

  <meta charset="utf-8">
  <meta name="rights" content="Laseda services SRL">
  <meta name="author" content="Laura">
  
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta name="generator" content="Joomla! - Open Source Content Management">
  <title><?php echo htmlspecialchars($pageTitle); ?> - Laseda Services</title>
  
  <link href="<?php echo $path_prefix; ?>index.php?lang=en" rel="alternate" hreflang="en-GB">
  <link href="<?php echo $path_prefix; ?>index.php?lang=ro" rel="alternate" hreflang="ro-RO">

  <link href="<?php echo $path_prefix; ?>images/favicon-32x32.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
  <link href="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/vendors/font-awesome5/css/all.mine862.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/vendors/font-awesome/css/font-awesome.mine862.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/vendors/icomoon/css/icomoone862.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>templates/ja_stark/css/animate.mine862.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>media/mod_languages/css/template.mine862.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>media/vendor/joomla-custom-elements/css/joomla-alert.min44b7.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/vendors/js-offcanvas/_css/js-offcanvas.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>templates/ja_stark/fonts/LouisGeorgeCafe/stylesheet.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>templates/ja_stark/css/acm.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>templates/ja_stark/acm/hero/css/style.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>templates/ja_stark/css/template.css" rel="stylesheet" />
  <link href="<?php echo $path_prefix; ?>media/t4/css/12-108.css" rel="stylesheet" />
  
  <script src="<?php echo $path_prefix; ?>media/vendor/jquery/js/jquery.min8a0c.js"></script>
  <script src="<?php echo $path_prefix; ?>media/legacy/js/jquery-noconflict.min02ca.js"></script>
  <script src="<?php echo $path_prefix; ?>media/vendor/jquery-migrate/js/jquery-migrate.min83e2.js"></script>
  <script src="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/vendors/bootstrap/js/bootstrap.bundle.mine862.js"></script>
  <script src="<?php echo $path_prefix; ?>templates/ja_stark/js/html5lightbox/html5lightboxe862.js"></script>
  <script src="<?php echo $path_prefix; ?>templates/ja_stark/js/inviewe862.js"></script>
  <script src="<?php echo $path_prefix; ?>media/mod_menu/js/menu-es5.mine862.js" nomodule defer></script>

  <script type="application/json" class="joomla-script-options new">
    {
      "joomla.jtext": {
        "ERROR": "Eroare",
        "MESSAGE": "Mesaj",
        "NOTICE": "Observa\u021bie",
        "WARNING": "Avertizare",
        "JCLOSE": "\u00cenchidere",
        "JOK": "OK",
        "JOPEN": "Deschide"
      },
      "system.paths": {
        "root": "",
        "rootFull": "https:\/\/traduceriautorizat.com\/",
        "base": "",
        "baseFull": "https:\/\/traduceriautorizat.com\/"
      },
      "csrf.token": "58c4933484251764276c671030f6ef73"
    }
  </script>

  <script src="<?php echo $path_prefix; ?>media/system/js/core.min8a1d.js"></script>
  <script src="<?php echo $path_prefix; ?>media/vendor/bootstrap/js/bootstrap-es5.mine55b.js" nomodule defer></script>
  <script src="<?php echo $path_prefix; ?>media/system/js/messages-es5.min268e.js" nomodule defer></script>
  <script src="<?php echo $path_prefix; ?>media/vendor/bootstrap/js/collapse.mine55b.js" type="module"></script>
  <script src="<?php echo $path_prefix; ?>media/system/js/messages.minc0ea.js" type="module"></script>
  <script src="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/vendors/js-offcanvas/_js/js-offcanvas.pkgd.js"></script>
  <script src="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/vendors/bodyscrolllock/bodyScrollLock.min.js"></script>
  <script src="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/js/offcanvas.js"></script>
  <script src="<?php echo $path_prefix; ?>templates/ja_stark/js/template.js"></script>
  <script src="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/js/basee862.js"></script>
  <script src="<?php echo $path_prefix; ?>plugins/system/t4/themes/base/js/megamenu.js"></script>
  <link href="<?php echo $path_prefix; ?>index.php" rel="alternate" hreflang="x-default">


  <!--[if lt IE 9]>
    <script src="/media/jui/js/html5.js"></script>
  <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" />
  <style type="text/css">
    @-webkit-viewport {
      width: device-width;
    }

    @-moz-viewport {
      width: device-width;
    }

    @-ms-viewport {
      width: device-width;
    }

    @-o-viewport {
      width: device-width;
    }

    @viewport {
      width: device-width;
    }
  </style>
  <meta name="HandheldFriendly" content="true" />
  <meta name="apple-mobile-web-app-capable" content="YES" />
  <!-- //META FOR IOS & HANDHELD -->

</head>

<body class="site-default navigation-<?php echo $_SESSION['lang']; ?> theme-default nav-breakpoint-lg com_content view-article <?php echo $bodyClass; ?>" data-jver="4">

  <div class="t4-offcanvas" data-offcanvas-options='{"modifiers":"right","overlay"}' id="off-canvas-right" role="complementary" style="display:none;">
    <div class="t4-off-canvas-header">
      <a href="https://mail.traduceriautorizat.com/" title="Laseda Services">
        <img class="logo-img-sm d-block d-sm-none" src="<?php echo $path_prefix; ?>images/mstile-50x50.png" alt="Laseda Services" />
        <img class="logo-img d-none d-sm-block" src="<?php echo $path_prefix; ?>images/mstile-50x50.png" alt="Laseda Services" />
      </a>
      <button type="button" class="close js-offcanvas-close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
  </div>
  
  <div class="t4-wrapper">
    <div class="t4-content">
      <div class="t4-content-inner">

        <div id="t4-topbar" class="t4-section  t4-topbar  t4-palette-dark">
          <div class="bg-overlay bg-overlay-image">&nbsp;</div>
          <div class="t4-section-inner container">
            <div class="t4-row row">
              <div class="t4-col topbar col-sm col-md-2">
                <div class="t4-module t4-section-module module " id="Mod119">
                  <div class="module-inner">
                    <div class="module-ct col-md-8">
                      <div class="mod-languages">
                        <p class="visually-hidden" id="language_picker_des_119"><?php echo $lang['topbar_select_lang']; ?></p>
                         <a href="?lang=en" title="English (United Kingdom)"><img src="<?php echo $path_prefix; ?>media/mod_languages/images/en_gb.gif" alt="English (United Kingdom)"></a>
                         <a href="?lang=ro" title="Română (România)"><img src="<?php echo $path_prefix; ?>media/mod_languages/images/ro_ro.gif" alt="Română (România)"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="t4-col top-a col-sm">
                <div class="custom">
                  <p><?php echo $lang['topbar_intrebare']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="t4-header" class="t4-section  t4-header  t4-palette-primary  t4-sticky">
          <div class="t4-section-inner container">
            <div class="t4-row row">
              <div class="t4-col logo col col-lg-2">
                <div class="navbar-brand logo-image logo-control">
                  <a href="index.php" title="Laseda Services">
                    <img class="logo-img-sm d-block d-sm-none" src="<?php echo $path_prefix; ?>images/mstile-50x50.png" alt="Laseda Services" />
                    <img class="logo-img d-none d-sm-block" src="<?php echo $path_prefix; ?>images/mstile-50x50.png" alt="Laseda Services" />
                  </a>
                </div>
              </div>
              <div class="t4-col mainnav col">
                <div class="t4-navbar">
                  <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#t4-megamenu-mainmenu-ro-ro" aria-expanded="false" aria-label="Toggle navigation" style="display: none;">
                      <i class="fa fa-bars toggle-bars"></i>
                    </button>
                    <div id="t4-megamenu-mainmenu-ro-ro" class="t4-megamenu collapse navbar-collapse">
                      
                      <ul class="nav navbar-nav level0" itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="nav-item default" data-id="108"><a href="index.php" class="nav-link"><?php echo $lang['nav_acasa']; ?></a></li>
                        <li class="nav-item" data-id="116"><a href="preturi.php" class="nav-link"><?php echo $lang['nav_preturi']; ?></a></li>
                        <li class="nav-item dropdown parent" data-id="117"><a href="servicii.php" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"><?php echo $lang['nav_servicii']; ?><i class="item-caret"></i></a>
                          <div class="dropdown-menu level1" data-bs-popper="static">
                            <div class="dropdown-menu-inner">
                              <ul>
                                <li class="nav-item" data-id="121"><a href="servicii_licitatii.php" class="dropdown-item"><?php echo $lang['nav_servicii_sub_1']; ?></a></li>
                                <li class="nav-item" data-id="122"><a href="servicii_specializate.php" class="dropdown-item"><?php echo $lang['nav_servicii_sub_2']; ?></a></li>
                                <li class="nav-item" data-id="123"><a href="servicii_companii.php" class="dropdown-item"><?php echo $lang['nav_servicii_sub_3']; ?></a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <li class="nav-item" data-id="118"><a href="intrebari-frecvente.php" class="nav-link"><?php echo $lang['nav_intrebari']; ?></a></li>
                        <li class="nav-item" data-id="119"><a href="contact.php" class="nav-link"><?php echo $lang['nav_contact']; ?></a></li>
                        <li class="nav-item" data-id="120"><a href="comanda-online.php" class="nav-link"><?php echo $lang['nav_comanda']; ?></a></li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div id="t4-hero" class="t4-section  t4-hero  t4-section-inview  t4-palette-dark">
          <div class="bg-overlay bg-overlay-image">&nbsp;</div>
          <div class="t4-section-inner container-fluid">
            <div class="t4-row row">
              <div class="t4-col hero-1 col-12 col-md-5">
                <div id="acm-hero-112" class="acm-hero style-1 text-left  show-intro">
                  <div class="hero-content">
                    
                    <h1 class="hero-heading animated" data-animated-type="fadeInRight">
                      <?php echo $lang['hero_title']; ?>
                    </h1>
                    
                    <p class="lead hero-intro animated delay-1s" data-animated-type="fadeInRight">
                      <?php echo $lang['hero_desc']; ?>
                    </p>
                    
                    <div class="hero-btn-actions animated delay-2s" data-animated-type="fadeInRight">
                      <a class="btn btn-lg btn-secondary" href="comanda-online.php" title="<?php echo $lang['hero_btn']; ?>">
                        <?php echo $lang['hero_btn']; ?> <i class="fas fa-long-arrow-alt-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="t4-col hero-2 col-sm">
                <div class="hero-2 no-card ">
                  <div id="acm-hero-128" class="acm-hero style-2 text-right ">
                    <div class="row">
                      <div class="hero-content col-md-6">
                        <img class="hero-img" src="<?php echo $path_prefix; ?>images/stampila.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
