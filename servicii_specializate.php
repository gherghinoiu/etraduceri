<?php
  // 1. Încarcă creierul site-ului și limba
  include 'core/init.php';

  // 2. Setează variabilele unice pentru această pagină
  $pageTitle = $lang['specializate_title'];
  $metaDescription = $lang['specializate_desc'];
  $bodyClass = "item-122"; // Clasificări unice de pe <body>

  // 3. Încarcă Header-ul
  include 'includes/header.php';
?>

        <div id="t4-component" class="t4-section  t4-component">
          <div class="t4-section-inner container">
            <div id="system-message-container" aria-live="polite"></div>
            <div class="com-content-article item-page project-page " itemscope itemtype="https://schema.org/Article">
              <meta itemprop="inLanguage" content="ro-RO">


              <div class="page-header">
                <h2 itemprop="headline"><?php echo $lang['specializate_h2']; ?></h2>
              </div>

              <div itemprop="articleBody" class="com-content-article__body">
                <p> </p>
                <p><b><?php echo $lang['specializate_juridice_title']; ?></b></p>
                <p><?php echo $lang['specializate_juridice_p1']; ?></p>
                <p><?php echo $lang['specializate_juridice_p2']; ?></p>
                <p> </p>
                <p><b><?php echo $lang['specializate_tehnice_title']; ?></b></p>
                <p><?php echo $lang['specializate_tehnice_p1']; ?></p>
                <p><?php echo $lang['specializate_tehnice_p2']; ?></p>
                <p> </p>
                <p><b><?php echo $lang['specializate_medicale_title']; ?></b></p>
                <p><?php echo $lang['specializate_medicale_p1']; ?></p>
                <p><?php echo $lang['specializate_medicale_p2']; ?></p>
                <p> </p>
                <p><b><?php echo $lang['specializate_literare_title']; ?></b></p>
                <p><?php echo $lang['specializate_literare_p1']; ?></p>
              </div>


            </div>
          </div>
        </div>

<?php
  // 4. Încarcă Footer-ul
  include 'includes/footer.php';
?>
