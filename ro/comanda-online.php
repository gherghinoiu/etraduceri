<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro-ro" lang="ro-ro" dir="ltr">


<!-- Mirrored from traduceriautorizat.com/index.php/ro/comanda-online?view=form by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 05:07:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

<?php
// Start the session
session_start();

// Verifică dacă există un mesaj de status de la trimiterea formularului
$formMessage = null;
$scrollToForm = false; // Adaugă această linie
if (isset($_SESSION['form_status'])) {
    $formMessage = $_SESSION['form_status'];
	$scrollToForm = true; // Setează flag-ul pe true
    // Șterge mesajul din sesiune pentru a nu fi afișat din nou la un refresh ulterior
    unset($_SESSION['form_status']);
}

// CSRF token
if(empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(16));
$csrf = $_SESSION['csrf'];
// echo "The CSRF token in the session isss: ";
// var_dump($_SESSION['csrf']);

// ... (rest of your existing PHP code for languages, services, etc.)
?>

	<meta charset="utf-8">
	<meta name="rights" content="Laseda services SRL">
	<meta name="description"
		content="Traduceri autorizate online. Efectuam traduceri autorizate, interpretariat si corectura text">
	<meta name="generator" content="Joomla! - Open Source Content Management">
	<title>Comandă o traducere</title>
	<link href="../en/order3b1e.html?view=form" rel="alternate" hreflang="en-GB">
	<link href="comanda-online.php" rel="alternate" hreflang="ro-RO">
	<link href="../images/favicon-32x32.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
	<link
		href="../plugins/system/t4/themes/base/vendors/font-awesome5/css/all.mine862.css?7b839389d4d0095e930836cb74918155"
		rel="stylesheet" />
	<link
		href="../plugins/system/t4/themes/base/vendors/font-awesome/css/font-awesome.mine862.css?7b839389d4d0095e930836cb74918155"
		rel="stylesheet" />
	<link
		href="../plugins/system/t4/themes/base/vendors/icomoon/css/icomoone862.css?7b839389d4d0095e930836cb74918155"
		rel="stylesheet" />
	<link href="../templates/ja_stark/css/animate.mine862.css?7b839389d4d0095e930836cb74918155" rel="stylesheet" />
	<link href="../media/mod_languages/css/template.mine862.css?7b839389d4d0095e930836cb74918155" rel="stylesheet" />
	<link href="../media/vendor/joomla-custom-elements/css/joomla-alert.min44b7.css?0.2.0" rel="stylesheet" />
	<link href="../media/com_convertforms/css/convertformse862.css?7b839389d4d0095e930836cb74918155"
		rel="stylesheet" />
	<link href="../plugins/system/t4/themes/base/vendors/js-offcanvas/_css/js-offcanvas.css" rel="stylesheet" />
	<link href="../templates/ja_stark/fonts/LouisGeorgeCafe/stylesheet.css" rel="stylesheet" />
	<link href="../templates/ja_stark/css/acm.css" rel="stylesheet" />
	<link href="../templates/ja_stark/acm/hero/css/style.css" rel="stylesheet" />
	<link href="../templates/ja_stark/css/template.css" rel="stylesheet" />
	<link href="../media/t4/css/12-120.css" rel="stylesheet" />
	<style>
		#cf_1 .cf-btn:after {
			border-radius: 5px
		}
	</style>
	<style>
		.convertforms {
			--color-primary: #4285F4;
			--color-success: #0F9D58;
			--color-danger: #DB4437;
			--color-warning: #F4B400;
			--color-default: #444;
			--color-grey: #ccc;

		}
	</style>
	<style>
		#cf_1 {
			--font: Arial;
			--max-width: 1024px;
			--background-color: rgba(238, 238, 238, 1);
			--border-radius: 0px;
			--label-color: #969393;
			--label-size: 13px;
			--input-color: #333333;
			--input-text-align: left;
			--input-background-color: #fafafa;
			--input-border-color: #ffffff;
			--input-border-radius: 5px;
			--input-size: 13px;
			--input-padding: 11px 20px;
			--background-image: url(../index.html);
			--background-repeat: no-repeat;
			--background-size: auto;
			--background-position: center top;

		}
	</style>
	<script src="../media/mod_menu/js/menu-es5.mine862.js?7b839389d4d0095e930836cb74918155" nomodule defer></script>
	<script src="../media/vendor/jquery/js/jquery.min8a0c.js?3.7.1"></script>
	<script type="application/json"
		class="joomla-script-options new">{"com_convertforms":{"baseURL":"\/index.php\/ro\/component\/convertforms","debug":false},"joomla.jtext":{"COM_CONVERTFORMS_INVALID_RESPONSE":"Invalid Response","COM_CONVERTFORMS_INVALID_TASK":"Invalid Task","COM_CONVERTFORMS_ERROR_WAIT_FILE_UPLOADS":"Please wait file uploading to complete.","COM_CONVERTFORMS_UPLOAD_FILETOOBIG":"File is too big ({{filesize}}MB). Max filesize: {{maxFilesize}}MB.","COM_CONVERTFORMS_UPLOAD_INVALID_FILE":"You can't upload files of this type.","COM_CONVERTFORMS_UPLOAD_FALLBACK_MESSAGE":"Your browser does not support drag'n'drop file uploads.","COM_CONVERTFORMS_UPLOAD_RESPONSE_ERROR":"Server responded with {{statusCode}} code.","COM_CONVERTFORMS_UPLOAD_CANCEL_UPLOAD":"Cancel upload","COM_CONVERTFORMS_UPLOAD_CANCEL_UPLOAD_CONFIRMATION":"Are you sure you want to cancel this upload?","COM_CONVERTFORMS_UPLOAD_REMOVE_FILE":"Remove file","COM_CONVERTFORMS_UPLOAD_MAX_FILES_EXCEEDED":"You can not upload any more files.","ERROR":"Eroare","MESSAGE":"Mesaj","NOTICE":"Observa\u021bie","WARNING":"Avertizare","JCLOSE":"\u00cenchidere","JOK":"OK","JOPEN":"Deschide"},"system.paths":{"root":"","rootFull":"https:\/\/traduceriautorizat.com\/","base":"","baseFull":"https:\/\/traduceriautorizat.com\/"},"csrf.token":"58c4933484251764276c671030f6ef73","system.keepalive":{"interval":840000,"uri":"\/index.php\/ro\/component\/ajax\/?format=json"}}</script>
	<script src="../media/system/js/core.min8a1d.js?37ffe4186289eba9c5df81bea44080aff77b9684"></script>
	<script src="../media/vendor/bootstrap/js/bootstrap-es5.mine55b.js?5.3.2" nomodule defer></script>
	<script src="../media/system/js/keepalive-es5.min544d.js?4eac3f5b0c42a860f0f438ed1bea8b0bdddb3804" defer
		nomodule></script>
	<script src="../media/system/js/messages-es5.min268e.js?c29829fd2432533d05b15b771f86c6637708bd9d" nomodule
		defer></script>
	<script src="../media/vendor/bootstrap/js/collapse.mine55b.js?5.3.2" type="module"></script>
	<script src="../media/system/js/keepalive.mind58a.js?9f10654c2f49ca104ca0449def6eec3f06bd19c0"
		type="module"></script>
	<script src="../media/legacy/js/jquery-noconflict.min02ca.js?647005fc12b79b3ca2bb30c059899d5994e3e34d"></script>
	<script src="../media/vendor/jquery-migrate/js/jquery-migrate.min83e2.js?3.4.1"></script>
	<script
		src="../plugins/system/t4/themes/base/vendors/bootstrap/js/bootstrap.bundle.mine862.js?7b839389d4d0095e930836cb74918155"></script>
	<script
		src="../templates/ja_stark/js/html5lightbox/html5lightboxe862.js?7b839389d4d0095e930836cb74918155"></script>
	<script src="../templates/ja_stark/js/inviewe862.js?7b839389d4d0095e930836cb74918155"></script>
	<script src="../media/system/js/messages.minc0ea.js?7f7aa28ac8e8d42145850e8b45b3bc82ff9a6411"
		type="module"></script>
	<script src="../media/com_convertforms/js/sitee862.js?7b839389d4d0095e930836cb74918155"></script>
	<script src="../../cdn.jsdelivr.net/npm/dropzone%405.9.2/dist/dropzone.min.js"></script>
	<script src="../media/com_convertforms/js/field_fileuploade862.js?7b839389d4d0095e930836cb74918155"></script>
	<script src="../plugins/system/t4/themes/base/vendors/js-offcanvas/_js/js-offcanvas.pkgd.js"></script>
	<script src="../plugins/system/t4/themes/base/vendors/bodyscrolllock/bodyScrollLock.min.js"></script>
	<script src="../plugins/system/t4/themes/base/js/offcanvas.js"></script>
	<script src="../templates/ja_stark/js/template.js"></script>
	<script src="../plugins/system/t4/themes/base/js/basee862.js?7b839389d4d0095e930836cb74918155"></script>
	<script src="../plugins/system/t4/themes/base/js/megamenu.js"></script>
	<link href="comanda-online.php" rel="alternate" hreflang="x-default">


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

<body class="site-default navigation-ro theme-default layout-home nav-breakpoint-lg com_convertforms view-form item-120"
	data-jver="4">

	<div class="t4-offcanvas" data-offcanvas-options='{"modifiers":"right,overlay"}' id="off-canvas-right"
		role="complementary" style="display:none;">
		<div class="t4-off-canvas-header">
			<a href="../index.html" title="Laseda Services">
				<img class="logo-img-sm d-block d-sm-none"
					src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50"
					alt="Laseda Services" />

				<img class="logo-img d-none d-sm-block"
					src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50"
					alt="Laseda Services" />

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
												<p class="visually-hidden" id="language_picker_des_119">Selectați limba
													dvs</p>


												<!-- <ul aria-labelledby="language_picker_des_119"
													class="mod-languages__list lang-inline">

													<li>
														<a href="../en/order3b1e.html?view=form">
															<img title="English (United Kingdom)"
																src="../media/mod_languages/images/en_gb.gif"
																alt="English (United Kingdom)"> </a>
													</li>
													<li class="lang-active">
														<a aria-current="true" href="comanda-online.php">
															<img title="Română (România)"
																src="../media/mod_languages/images/ro_ro.gif"
																alt="Română (România)"> </a>
													</li>
												</ul> -->

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="t4-col top-a col-sm">


								<div class="custom">
									<p>Ai întrebări? Sună la: 0749051111</p>
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
									<a href="../index.html" title="Laseda Services">
										<img class="logo-img-sm d-block d-sm-none"
											src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50"
											alt="Laseda Services" />

										<img class="logo-img d-none d-sm-block"
											src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50"
											alt="Laseda Services" />

									</a>
								</div>

							</div>
							<div class="t4-col mainnav col">
								<div class="t4-navbar">

									<nav class="navbar navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse"
											data-target="#t4-megamenu-mainmenu-ro-ro" aria-expanded="false"
											aria-label="Toggle navigation" style="display: none;">
											<i class="fa fa-bars toggle-bars"></i>
										</button>
										<div id="t4-megamenu-mainmenu-ro-ro"
											class="t4-megamenu collapse navbar-collapse">

											<ul class="nav navbar-nav level0" itemscope="itemscope"
												itemtype="http://www.schema.org/SiteNavigationElement">
												<li class="nav-item default" data-id="108" itemprop="name" data-level="1"
                          data-align="left"><a href="index.php" class="nav-link" role="button">Acasă</a></li>
												<li class="nav-item" data-id="116" itemprop="name" data-level="1"><a
														href="preturi.html" class="nav-link">Prețuri</a></li>
												<li class="nav-item dropdown parent" data-id="117" itemprop="name"
													data-level="1"><a href="servicii.html"
														class="nav-link dropdown-toggle" role="button"
														aria-haspopup="true" aria-expanded="false"
														data-toggle="dropdown">Servicii<i class="item-caret"></i></a>
													<div class="dropdown-menu level1" data-bs-popper="static">
														<div class="dropdown-menu-inner">
															<ul>
																<li class="nav-item" data-id="121" itemprop="name"
																	data-level="2"><a
																		href="servicii/licitatii-si-proiecte-cu-finantare-europeana.html"
																		class="dropdown-item">Licitații și proiecte cu
																		finanțare europeană</a></li>
																<li class="nav-item" data-id="122" itemprop="name"
																	data-level="2"><a
																		href="servicii/traduceri-specializate.html"
																		class="dropdown-item">Traduceri specializate</a>
																</li>
																<li class="nav-item" data-id="123" itemprop="name"
																	data-level="2"><a
																		href="servicii/servicii-pentru-companii.html"
																		class="dropdown-item">Servicii pentru
																		companii</a></li>
															</ul>
														</div>
													</div>
												</li>
												<li class="nav-item" data-id="118" itemprop="name" data-level="1"><a
														href="intrebari-frecvente.html" class="nav-link">Întrebări
														frecvente</a></li>
												<li class="nav-item" data-id="119" itemprop="name" data-level="1"><a
														href="contact.html" class="nav-link">Contact</a></li>
												<li class="nav-item current active" data-id="120" itemprop="name"
													data-level="1"><a href="comanda-online.php"
														class="nav-link" aria-current="page">Comandă</a></li>
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
											Traduceri online </h1>

										<p class="lead hero-intro animated delay-1s" data-animated-type="fadeInRight">
											Oferim servicii profesionale de traducere autorizată și legalizată, revizie
											și interpretariat în peste 20 de limbi de circulație internațională, în
											regim normal și în regim de urgență, inclusiv în weekend sau sărbători
											legale. </p>

										<div class="hero-btn-actions animated delay-2s"
											data-animated-type="fadeInRight">
											<a class="btn btn-lg btn-secondary" href="comanda-online.php"
												title="Comandă acum">
												Comandă acum <i class="fas fa-long-arrow-alt-right"></i>
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

												<img class="hero-img"
													src="../images/stampila.png#joomlaImage://local-images/stampila.png?width=430&amp;height=434"
													alt="" />
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				
				














<style>
  #form-status-message { margin-top: 15px; font-weight: bold; }
  .success { color: #28a745; }
  .error { color: #dc3545; }
</style>

<div class="translation-form-container" id="top-of-order-form" >
  <form class="translation-form" id="order-form" action="upload_handler.php" method="POST" enctype="multipart/form-data">
    
    <input type="hidden" name="csrf" value="<?php echo $csrf; ?>">
    
    <h2 class="translation-form__title">Comandă o Traducere</h2>
    
    <div class="translation-form__grid">
      <div class="translation-form__group">
        <label for="form-name" class="translation-form__label">Nume Complet</label>
        <input type="text" id="form-name" name="name" class="translation-form__input" placeholder="Ex: Ion Popescu" required>
      </div>
      
      <div class="translation-form__group">
        <label for="form-phone" class="translation-form__label">Telefon</label>
        <input type="tel" id="form-phone" name="phone" class="translation-form__input" placeholder="Ex: 0722 123 456" required>
      </div>
      
      <div class="translation-form__group">
        <label for="form-email" class="translation-form__label">Adresă de Email</label>
        <input type="email" id="form-email" name="email" class="translation-form__input" placeholder="Ex: ion.popescu@email.com" required>
      </div>
      
      <div class="translation-form__group">
        <label for="form-service" class="translation-form__label">Tipul Serviciului</label>
        <select id="form-service" name="service" class="translation-form__select" required>
          <option value="" disabled selected>Alegeți un serviciu...</option>
          <option value="autorizata">Traducere autorizată</option>
          <option value="legalizata">Traducere legalizată</option>
          <option value="interpretariat">Interpretariat</option>
          <option value="corectura">Corectură text</option>
        </select>
      </div>
      
      <div class="translation-form__group translation-form__group--full-width">
        <label for="form-documents" class="translation-form__label">Încarcă Documente</label>
        <div class="translation-form__file-upload">
          <input type="file" id="form-documents" name="documents[]" class="translation-form__file-input" multiple required>
          <label for="form-documents" class="translation-form__file-label">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
            <span>Alege fișiere</span>
          </label>
          <div class="translation-form__file-list" id="file-list-display">Niciun fișier selectat</div>
        </div>
      </div>
      
      <div class="translation-form__group translation-form__group--full-width">
        <label for="form-details" class="translation-form__label">Detalii Suplimentare (Opțional)</label>
        <textarea id="form-details" name="details" rows="5" class="translation-form__textarea" placeholder="Orice informație suplimentară care ne-ar putea ajuta..."></textarea>
      </div>
    </div>
    
    <button class="translation-form__submit" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
        <span>Trimite Comanda</span>
    </button>
    
    <div id="form-status-message" class="translation-form__status">
      <?php if ($formMessage): ?>
        <p class="<?php echo htmlspecialchars($formMessage['status']); ?>">
          <?php echo htmlspecialchars($formMessage['message']); ?>
        </p>
      <?php endif; ?>
    </div>
  </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('order-form');
  const statusMessage = document.getElementById('form-status-message');
  const submitButton = form.querySelector('button[type="submit"]');

  form.addEventListener('submit', function (event) {
    // Prevent the default page reload
    event.preventDefault();

    // Disable button to prevent multiple submissions
    submitButton.disabled = true;
    submitButton.textContent = 'Se trimite...';
    statusMessage.innerHTML = '';

    // Collect all form data, including files
    const formData = new FormData(form);

    // Send the data asynchronously using fetch
    fetch('upload_handler.php', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      // Check if the server responded with an error code
      if (!response.ok) {
        // Try to get a specific error message from the JSON
        return response.json().then(err => { throw new Error(err.message || 'A apărut o eroare de server.') });
      }
      return response.json();
    })
    .then(data => {
      // Handle success
      if (data.status === 'success') {
        // 1. Show the popup
        //alert(data.message);
        
        // 2. Show the success message below the form
        statusMessage.innerHTML = `<p class="success">${data.message}</p>`;
        
        // 3. Reset the form for a new submission
        form.reset();
      } else {
        // Handle logical errors returned from the server
        throw new Error(data.message || 'A apărut o eroare neașteptată.');
      }
    })
    .catch(error => {
      // Handle network errors or errors thrown from the server
      console.error('Submission Error:', error);
      statusMessage.innerHTML = `<p class="error">Eroare: ${error.message}</p>`;
    })
    .finally(() => {
      // Re-enable the button
      submitButton.disabled = false;
      submitButton.textContent = 'Trimite Comanda';
    });
  });
});
</script>





				<div id="t4-section-3" class="t4-section  t4-section-3  t4-section-inview">
					<div class="t4-section-inner container">
						<div class="t4-module t4-section-module module " id="Mod130">
							<div class="module-inner">
								<div class="row">
									<div class="module-head-group col-md-4">
										<h3 class="module-title "><span>Modul de lucru</span></h3>
										<h2 class="sub-title"></h2>
										<p class="sub-desc"></p>
									</div>
									<div class="module-ct col-md-8">
										<div id="acm-hero-130" class="acm-hero style-2 text-left ">
											<div class="row">


												<div class="hero-content col-md-6">



													<p class="lead hero-intro">
														1. Ne trimiteți documentul sau textul de tradus, limba/limbile
														în care doriți traducerea, termenul limită și toate detaliile
														comenzii. </p>

												</div>


												<div class="hero-content col-md-6">



													<p class="lead hero-intro">
														2. În cel mai scurt timp vă vom oferi o ofertă de preț și data
														de livrare. </p>

												</div>


												<div class="hero-content col-md-6">



													<p class="lead hero-intro">
														3. După confirmarea dvs., serviciile de
														traducere/revizie/interpretariat vor fi efectuate. </p>

												</div>


												<div class="hero-content col-md-6">



													<p class="lead hero-intro">
														4. Livrarea se va face în cel mai scurt timp, în format
														electronic prin e-mail și/sau fizic, prin curier la adresa
														solicitată. </p>

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

				<div id="t4-footer" class="t4-section  t4-footer  t4-section-inview  t4-palette-dark">
					<div class="t4-section-inner container">
						<div class="t4-row row">
							<div class="t4-col footer col-sm col-md-7">

								<div id="acm-hero-118" class="acm-hero style-1 text-left  show-intro">

									<div class="hero-content">
										<h2 class="hero-heading animated" data-animated-type="fadeInRight">
											Serviciile noastre se adresează atât companiilor cât și persoanelor fizice,
											criteriile care ne definesc fiind profesionalismul și flexibilitatea. Un
											client mulțumit reprezintă o dovadă clară a succesului nostru. </h2>


									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

				<div id="t4-footnav" class="t4-section  t4-footnav  t4-palette-dark">
					<div class="t4-section-inner container">
						<div class="t4-row row">
							<div class="t4-col logo col-sm-12 col-md-3">
								<div class="navbar-brand logo-image logo-control">
									<a href="../index.html" title="Laseda Services">
										<img class="logo-img-sm d-block d-sm-none"
											src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50"
											alt="Laseda Services" />

										<img class="logo-img d-none d-sm-block"
											src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50"
											alt="Laseda Services" />

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
												<button class="navbar-toggler navbar-toggler-right" type="button"
													data-bs-toggle="collapse" data-bs-target="#navbar133"
													aria-controls="navbar133" aria-expanded="false"
													aria-label="Comută navigarea">
													<span class="icon-menu" aria-hidden="true"></span>
												</button>
												<div class="collapse navbar-collapse" id="navbar133">
													<ul class="mod-menu mod-list nav ">
														<li class="nav-item item-131"><a href="https://anpc.ro/"
																class=" nav-link">ANPC</a></li>
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
<?php if ($scrollToForm): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formElement = document.getElementById('top-of-order-form');
            if (formElement) {
                // Derulează pagina lin până la începutul formularului
                formElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    </script>
    <?php endif; ?>
</body>

<!-- Mirrored from traduceriautorizat.com/index.php/ro/comanda-online?view=form by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 05:07:27 GMT -->

</html>
