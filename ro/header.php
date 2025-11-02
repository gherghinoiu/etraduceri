<?php
// header.php
// This file assumes $pageTitle, $hreflangEn, $hreflangRo, $activeMenuItemId, $joomlaScriptOptions are set before including

$defaultPageTitle = "Laseda Services"; // Fallback title
$defaultHreflangEn = "../en/index.html";
$defaultHreflangRo = "index.html";
$defaultJoomlaScriptOptions = '{"joomla.jtext":{"ERROR":"Eroare","MESSAGE":"Mesaj","NOTICE":"Observa\u021bie","WARNING":"Avertizare","JCLOSE":"\u00cenchidere","JOK":"OK","JOPEN":"Deschide"},"system.paths":{"root":"","rootFull":"https:\/\/traduceriautorizat.com\/","base":"","baseFull":"https:\/\/traduceriautorizat.com\/"},"csrf.token":"58c4933484251764276c671030f6ef73"}'; // This specific part can be tricky and might be better loaded from Joomla itself if possible

// Set defaults if not provided (though in a real Joomla setup, these would be populated by the CMS)
$pageTitle = isset($pageTitle) ? $pageTitle : $defaultPageTitle;
$hreflangEn = isset($hreflangEn) ? $hreflangEn : $defaultHreflangEn;
$hreflangRo = isset($hreflangRo) ? $hreflangRo : $defaultHreflangRo;
$joomlaScriptOptions = isset($joomlaScriptOptions) ? $joomlaScriptOptions : $defaultJoomlaScriptOptions;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro-ro" lang="ro-ro" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="rights" content="Laseda services SRL">
  <meta name="author" content="Laura">
  <meta name="description" content="Traduceri autorizate online. Efectuam traduceri autorizate, interpretariat si corectura text">
  <meta name="generator" content="Joomla! - Open Source Content Management">
  <title><?php echo $pageTitle; ?> - Laseda Services</title>
  <link href="<?php echo $hreflangEn; ?>" rel="alternate" hreflang="en-GB">
  <link href="<?php echo $hreflangRo; ?>" rel="alternate" hreflang="ro-RO">
  <link href="../images/favicon-32x32.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
  <link href="../plugins/system/t4/themes/base/vendors/font-awesome5/css/all.mine862.css?7b839389d4d0095e930836cb74918155" rel="stylesheet" />
  <link href="../plugins/system/t4/themes/base/vendors/font-awesome/css/font-awesome.mine862.css?7b839389d4d0095e930836cb74918155" rel="stylesheet" />
  <link href="../plugins/system/t4/themes/base/vendors/icomoon/css/icomoone862.css?7b839389d4d0095e930836cb74918155" rel="stylesheet" />
  <link href="../templates/ja_stark/css/animate.mine862.css?7b839389d4d0095e930836cb74918155" rel="stylesheet" />
  <link href="../media/mod_languages/css/template.mine862.css?7b839389d4d0095e930836cb74918155" rel="stylesheet" />
  <link href="../media/vendor/joomla-custom-elements/css/joomla-alert.min44b7.css?0.2.0" rel="stylesheet" />
  <link href="../plugins/system/t4/themes/base/vendors/js-offcanvas/_css/js-offcanvas.css" rel="stylesheet" />
  <link href="../templates/ja_stark/fonts/LouisGeorgeCafe/stylesheet.css" rel="stylesheet" />
  <link href="../templates/ja_stark/css/acm.css" rel="stylesheet" />
  <link href="../templates/ja_stark/acm/hero/css/style.css" rel="stylesheet" />
  <link href="../templates/ja_stark/css/template.css" rel="stylesheet" />
  <?php if (isset($pageSpecificCss)) {
    echo '<link href="' . $pageSpecificCss . '" rel="stylesheet" />';
  } ?>
  <?php if (isset($convertFormsCss)) {
    echo '<link href="' . $convertFormsCss . '" rel="stylesheet" />';
  } ?>

  <script src="../media/vendor/jquery/js/jquery.min8a0c.js?3.7.1"></script>
  <script type="application/json" class="joomla-script-options new">
    <?php echo $joomlaScriptOptions; ?>
  </script>
  <script src="../media/system/js/core.min8a1d.js?37ffe4186289eba9c5df81bea44080aff77b9684"></script>
  <script src="../media/vendor/bootstrap/js/bootstrap-es5.mine55b.js?5.3.2" nomodule defer></script>
  <script src="../media/system/js/messages-es5.min268e.js?c29829fd2432533d05b15b771f86c6637708bd9d" nomodule defer></script>
  <script src="../media/vendor/bootstrap/js/collapse.mine55b.js?5.3.2" type="module"></script>
  <script src="../media/vendor/webcomponentsjs/js/webcomponents-bundle.min0577.js?2.8.0" nomodule defer></script>
  <script src="../media/system/js/joomla-hidden-mail-es5.min46a8.js?b2c8377606bb898b64d21e2d06c6bb925371b9c3" nomodule defer></script>
  <script src="../media/system/js/joomla-hidden-mail.min3a6a.js?065992337609bf436e2fedbcbdc3de1406158b97" type="module"></script>
  <script src="../media/legacy/js/jquery-noconflict.min02ca.js?647005fc12b79b3ca2bb30c059899d5994e3e34d"></script>
  <script src="../media/vendor/jquery-migrate/js/jquery-migrate.min83e2.js?3.4.1"></script>
  <script src="../plugins/system/t4/themes/base/vendors/bootstrap/js/bootstrap.bundle.mine862.js?7b839389d4d0095e930836cb74918155"></script>
  <script src="../templates/ja_stark/js/html5lightbox/html5lightboxe862.js?7b839389d4d0095e930836cb74918155"></script>
  <script src="../templates/ja_stark/js/inviewe862.js?7b839389d4d0095e930836cb74918155"></script>
  <script src="../media/system/js/messages.minc0ea.js?7f7aa28ac8e8d42145850e8b45b3bc82ff9a6411" type="module"></script>
  <script src="../plugins/system/t4/themes/base/vendors/js-offcanvas/_js/js-offcanvas.pkgd.js"></script>
  <script src="../plugins/system/t4/themes/base/vendors/bodyscrolllock/bodyScrollLock.min.js"></script>
  <script src="../plugins/system/t4/themes/base/js/offcanvas.js"></script>
  <script src="../templates/ja_stark/js/template.js"></script>
  <script src="../plugins/system/t4/themes/base/js/basee862.js?7b839389d4d0095e930836cb74918155"></script>
  <script src="../plugins/system/t4/themes/base/js/megamenu.js"></script>
  <?php if (isset($convertFormsJs)) {
    echo '<script src="' . $convertFormsJs . '"></script>';
  } ?>
  <?php if (isset($dropzoneJs)) {
    echo '<script src="' . $dropzoneJs . '"></script>';
  } ?>
  <?php if (isset($fieldFileuploadJs)) {
    echo '<script src="' . $fieldFileuploadJs . '"></script>';
  } ?>


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
</head>

<body class="site-default navigation-ro theme-default layout-home nav-breakpoint-lg com_content view-article item-119" data-jver="4">

  <div class="t4-offcanvas" data-offcanvas-options='{"modifiers":"right,overlay"}' id="off-canvas-right" role="complementary" style="display:none;">
    <div class="t4-off-canvas-header">
      <a href="../index.p" title="Laseda Services">
        <img class="logo-img-sm d-block d-sm-none" src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50" alt="Laseda Services" />

        <img class="logo-img d-none d-sm-block" src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50" alt="Laseda Services" />

      </a>
      <button type="button" class="close js-offcanvas-close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>



  </div>
  <div class="t4-wrapper">
    <div class="t4-content">
      <div class="t4-content-inner">