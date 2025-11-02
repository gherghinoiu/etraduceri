<?php
  // 1. Încarcă creierul site-ului și limba
  include 'core/init.php';

  // 2. Setează variabilele unice pentru această pagină
  $pageTitle = $lang['seo_title_servicii'];
  $metaDescription = $lang['seo_desc_servicii'];
  $bodyClass = "services-page"; // Clasificări unice de pe <body>

  // 3. Încarcă Header-ul
  include 'includes/header.php';
?>

<div id="t4-component" class="t4-section  t4-component">
  <div class="t4-section-inner container">
    <div id="system-message-container" aria-live="polite"></div>
    <div class="com-content-article item-page project-page " itemscope itemtype="https://schema.org/Article">
      <meta itemprop="inLanguage" content="<?php echo $_SESSION['lang']; ?>">

      <div class="page-header">
        <h2 itemprop="headline"><?php echo $lang['servicii_h2']; ?></h2>
      </div>

      <div itemprop="articleBody" class="com-content-article__body">
        <p><?php echo $lang['servicii_p1']; ?></p>
        <p><?php echo $lang['servicii_p2']; ?></p>
        <p>&nbsp;</p>
        <p><b><?php echo $lang['servicii_auth_title']; ?></b></p>
        <p><?php echo $lang['servicii_auth_p']; ?></p>
        <p>&nbsp;</p>
        <p><b><?php echo $lang['servicii_legal_title']; ?></b></p>
        <p><?php echo $lang['servicii_legal_p1']; ?></p>
        <p><?php echo $lang['servicii_legal_p2']; ?></p>
        <p>&nbsp;</p>
        <p><b><?php echo $lang['servicii_proof_title']; ?></b></p>
        <p><?php echo $lang['servicii_proof_p1']; ?></p>
        <p><?php echo $lang['servicii_proof_p2']; ?></p>
        <p>&nbsp;</p>
        <p><b><?php echo $lang['servicii_inter_title']; ?></b></p>
        <p><?php echo $lang['servicii_inter_p']; ?></p>
      </div>

    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
