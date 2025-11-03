<?php
  // 1. Încarcă creierul site-ului și limba
  include 'core/init.php';

  // 2. Setează variabilele unice pentru această pagină
  $pageTitle = $lang['seo_title_contact'];
  $metaDescription = $lang['seo_desc_contact'];
  $bodyClass = "contact-page"; // Clasificări unice de pe <body>

  // 3. Încarcă Header-ul
  include 'includes/header.php';
?>

<div id="t4-component" class="t4-section  t4-component">
	<div class="t4-section-inner container">
		<div id="system-message-container" aria-live="polite"></div>
		<div class="com-content-article item-page project-page " itemscope itemtype="https://schema.org/Article">
			<meta itemprop="inLanguage" content="<?php echo $_SESSION['lang']; ?>">
			<div class="page-header">
				<h1><?php echo $lang['contact_h1']; ?></h1>
			</div>

			<div itemprop="articleBody" class="com-content-article__body">
				<h3>Laseda Services SRL</h3>
				<p><?php echo $lang['contact_address_label']; ?> <?php echo $lang['contact_address_value']; ?></p>
				<p><?php echo $lang['contact_phone_label']; ?> <?php echo $lang['contact_phone_value']; ?></p>
				<p><?php echo $lang['contact_email_label']; ?> <a id="email-link" href="#">Loading...</a></p>
			</div>
		</div>
	</div>
</div>

<script>
  // Simple email obfuscation to prevent basic scraping
  (function() {
    var user = 'laseda';
    var domain = 'traduceriautorizat.com';
    var email = user + '@' + domain;
    var link = document.getElementById('email-link');
    if (link) {
      link.href = 'mailto:' + email;
      link.textContent = email;
    }
  })();
</script>

<?php include 'includes/footer.php'; ?>
