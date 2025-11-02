<?php
  // 1. Încarcă creierul site-ului și limba
  include 'core/init.php';

  // 2. Setează variabilele unice pentru această pagină
  $pageTitle = $lang['seo_title_faq'];
  $metaDescription = $lang['seo_desc_faq'];
  $bodyClass = "faq-page"; // Clasificări unice de pe <body>

  // 3. Încarcă Header-ul
  include 'includes/header.php';
?>

<div id="t4-component" class="t4-section  t4-component">
  <div class="t4-section-inner container">
    <div id="system-message-container" aria-live="polite"></div>
    <div class="com-content-article item-page project-page " itemscope itemtype="https://schema.org/Article">
      <meta itemprop="inLanguage" content="<?php echo $_SESSION['lang']; ?>">

      <div itemprop="articleBody" class="com-content-article__body">
        <h2><?php echo $lang['faq_h2']; ?></h2>
        <h6><?php echo $lang['faq_h6']; ?></h6>
        <p>&nbsp;</p>
        <h3><?php echo $lang['faq_q1']; ?></h3>
        <p><?php echo $lang['faq_a1']; ?></p>
        <p>&nbsp;</p>
        <h3><strong><?php echo $lang['faq_q2']; ?></strong></h3>
        <p><?php echo $lang['faq_a2']; ?></p>
        <p>&nbsp;</p>
        <h3><strong><?php echo $lang['faq_q3']; ?></strong></h3>
        <p><?php echo $lang['faq_a3']; ?></p>
        <p>&nbsp;</p>
        <h3><strong><?php echo $lang['faq_q4']; ?></strong></h3>
        <p><?php echo $lang['faq_a4']; ?></p>
        <p>&nbsp;</p>
        <h3><strong><?php echo $lang['faq_q5']; ?></strong></h3>
        <p><?php echo $lang['faq_a5']; ?></p>
        <p>&nbsp;</p>
        <h3><strong><?php echo $lang['faq_q6']; ?></strong></h3>
        <p><?php echo $lang['faq_a6']; ?></p>
        <p>&nbsp;</p>
        <h3><strong><?php echo $lang['faq_q7']; ?></strong></h3>
        <p><?php echo $lang['faq_a7']; ?></p>
        <p>&nbsp;</p>
        <h3><strong><?php echo $lang['faq_q8']; ?></strong></h3>
        <p><?php echo $lang['faq_a8']; ?></p>
        <p>&nbsp;</p>
        <h3><?php echo $lang['faq_q9']; ?></h3>
        <p><?php echo $lang['faq_a9']; ?></p>
        <p>&nbsp;</p>
        <h3><?php echo $lang['faq_q10']; ?></h3>
        <p><?php echo $lang['faq_a10']; ?></p>
      </div>

    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
