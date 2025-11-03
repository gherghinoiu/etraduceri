<?php
  // 1. Încarcă creierul site-ului și limba
  include 'core/init.php';

  // 2. Setează variabilele unice pentru această pagină
  $pageTitle = 'Articles';
  $metaDescription = 'Read our latest articles.';
  $bodyClass = "layout-articles item-108"; // Clasificări unice de pe <body>

  // 3. Încarcă Header-ul
  include 'includes/header.php';
?>

<div id="t4-component" class="t4-section t4-component">
  <div class="t4-section-inner container">
    <div id="system-message-container" aria-live="polite"></div>
    <div class="com-content-article item-page project-page" itemscope itemtype="https://schema.org/Article">
      <meta itemprop="inLanguage" content="ro-RO">
      <div itemprop="articleBody" class="com-content-article__body">
        <h1 style="text-align: center;">Articles</h1>
        <br/>

        <?php
          $articlesFile = 'articles.json';
          $articles = [];
          if (file_exists($articlesFile)) {
              $articles = json_decode(file_get_contents($articlesFile), true);
          }

          foreach ($articles as $article) {
              if ($article['published']) {
                  echo '<div class="article">';
                  echo '<h2>' . htmlspecialchars($article['title']) . '</h2>';
                  echo '<p><em>By ' . htmlspecialchars($article['author']) . ' on ' . htmlspecialchars($article['date']) . '</em></p>';
                  echo '<div>' . $article['body'] . '</div>';
                  echo '</div><hr>';
              }
          }
        ?>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
