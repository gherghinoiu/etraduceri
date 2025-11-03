<?php
  // 1. Încarcă creierul site-ului și limba
  include 'core/init.php';

  // 2. Setează variabilele unice pentru această pagină
  $pageTitle = $lang['companii_title'];
  $metaDescription = $lang['companii_desc'];
  $bodyClass = "item-123"; // Clasificări unice de pe <body>

  // 3. Încarcă Header-ul
  include 'includes/header.php';
?>

        <div id="t4-component" class="t4-section  t4-component">
          <div class="t4-section-inner container">
            <div id="system-message-container" aria-live="polite"></div>
            <div class="com-content-article item-page project-page " itemscope itemtype="https://schema.org/Article">
              <meta itemprop="inLanguage" content="ro-RO">


              <div class="page-header">
                <h2 itemprop="headline"><?php echo $lang['companii_h2']; ?></h2>
              </div>

              <div itemprop="articleBody" class="com-content-article__body">
                <p> </p>
                <p><?php echo $lang['companii_p1']; ?></p>
                <p><?php echo $lang['companii_p2']; ?></p>
                <p><?php echo $lang['companii_p3']; ?></p>
                <p><?php echo $lang['companii_p4']; ?></p>
                <p><?php echo $lang['companii_p5']; ?></p>
                <p><?php echo $lang['companii_p6']; ?></p>
                <p><?php echo $lang['companii_p7']; ?></p>
                <p><?php echo $lang['companii_p8']; ?></p>
              </div>


            </div>
          </div>
        </div>

<?php
  // 4. Încarcă Footer-ul
  include 'includes/footer.php';
?>
