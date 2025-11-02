<?php
  // 1. Încarcă creierul site-ului și limba
  include 'core/init.php';

  // 2. Setează variabilele unice pentru această pagină
  $pageTitle = $lang['seo_title_preturi'];
  $metaDescription = $lang['seo_desc_preturi'];
  $bodyClass = "prices-page"; // Clasificări unice de pe <body>

  // 3. Încarcă Header-ul
  include 'includes/header.php';
?>

<div id="t4-component" class="t4-section  t4-component">
  <div class="t4-section-inner container">
    <div id="system-message-container" aria-live="polite"></div>
    <div class="com-content-article item-page project-page " itemscope itemtype="https://schema.org/Article">
      <meta itemprop="inLanguage" content="<?php echo $_SESSION['lang']; ?>">

      <div class="page-header">
        <h2 itemprop="headline"><?php echo $lang['preturi_h2']; ?></h2>
      </div>

      <div itemprop="articleBody" class="com-content-article__body">
        <p><?php echo $lang['preturi_p1']; ?></p>
        <p><?php echo $lang['preturi_p2']; ?></p>
        <p><?php echo $lang['preturi_p3']; ?></p>
        <p><?php echo $lang['preturi_p4']; ?></p>
        <p><?php echo $lang['preturi_p5']; ?></p>
        <p><?php echo $lang['preturi_p6']; ?></p>
        <p><?php echo $lang['preturi_p7']; ?></p>
        <p><?php echo $lang['preturi_p8']; ?></p>
        <p>&nbsp;</p>
        <table style="border-collapse: collapse; margin-left: auto; margin-right: auto;">
          <tbody>
            <tr>
              <td valign="top">
                <p><b><?php echo $lang['preturi_table_lang']; ?></b></p>
              </td>
              <td valign="top">
                <p><b><?php echo $lang['preturi_table_price']; ?></b></p>
                <p><b><?php echo $lang['preturi_table_details']; ?></b></p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>ENGLEZA</p>
              </td>
              <td valign="top">
                <p>30 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>FRANCEZA</p>
              </td>
              <td valign="top">
                <p>30 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>ITALIANA</p>
              </td>
              <td valign="top">
                <p>30 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>SPANIOLA</p>
              </td>
              <td valign="top">
                <p>35 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>GERMANA</p>
              </td>
              <td valign="top">
                <p>40 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>MAGHIARA</p>
              </td>
              <td valign="top">
                <p>45 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>RUSA</p>
              </td>
              <td valign="top">
                <p>60 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>TURCA</p>
              </td>
              <td valign="top">
                <p>50 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>SARBA</p>
              </td>
              <td valign="top">
                <p>80 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>CROATA</p>
              </td>
              <td valign="top">
                <p>80 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>PORTUGHEZA</p>
              </td>
              <td valign="top">
                <p>60 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>GREACA</p>
              </td>
              <td valign="top">
                <p>60 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>POLONA</p>
              </td>
              <td valign="top">
                <p>60 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>CEHA</p>
              </td>
              <td valign="top">
                <p>60 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>BULGARA</p>
              </td>
              <td valign="top">
                <p>65 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>SLOVACA</p>
              </td>
              <td valign="top">
                <p>80 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>UCRAINEANA</p>
              </td>
              <td valign="top">
                <p>60 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>OLANDEZA</p>
              </td>
              <td valign="top">
                <p>60 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>NORVEGIANA</p>
              </td>
              <td valign="top">
                <p>80 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>JAPONEZA</p>
              </td>
              <td valign="top">
                <p>70 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>HINDI</p>
              </td>
              <td valign="top">
                <p>80 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>SUEDEZA</p>
              </td>
              <td valign="top">
                <p>80 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>ARABA</p>
              </td>
              <td valign="top">
                <p>65 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>EBRAICA</p>
              </td>
              <td valign="top">
                <p>80 lei</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p>DANEZA</p>
              </td>
              <td valign="top">
                <p>90 lei</p>
              </td>
            </tr>
          </tbody>
        </table>
        <p>&nbsp;</p>
      </div>

    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
