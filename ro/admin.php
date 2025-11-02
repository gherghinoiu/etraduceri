<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


session_start();
$password = 'sebastian';
$articles_file = 'articles.json';

// Handle login
if (isset($_POST['password'])) {
    if ($_POST['password'] === $password) {
        $_SESSION['loggedin'] = true;
    } else {
        $login_error = 'Incorrect password!';
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

// Load existing articles
$articles = file_exists($articles_file) ? json_decode(file_get_contents($articles_file), true) : [];

// Handle DELETE
if (isset($_GET['delete'])) {
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
        $id_to_delete = $_GET['delete'];
        $articles = array_filter($articles, function($article) use ($id_to_delete) {
            return $article['id'] != $id_to_delete;
        });
        $articles = array_values($articles); // Re-index array
        file_put_contents($articles_file, json_encode($articles, JSON_PRETTY_PRINT));
        header('Location: admin.php');
        exit;
    }
}

// Handle EDIT - Load article for editing
$edit_article = null;
if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
    foreach ($articles as $article) {
        if ($article['id'] == $edit_id) {
            $edit_article = $article;
            break;
        }
    }
}

// Handle form submission (CREATE or UPDATE)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title_ro']) && isset($_POST['content_ro'])) {
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
        
        if (isset($_POST['edit_id']) && !empty($_POST['edit_id'])) {
            // UPDATE existing article
            foreach ($articles as $key => $article) {
                if ($article['id'] == $_POST['edit_id']) {
                    $articles[$key] = [
                        'id' => $_POST['edit_id'],
                        'title_ro' => $_POST['title_ro'],
                        'title_en' => $_POST['title_en'],
                        'content_ro' => $_POST['content_ro'],
                        'content_en' => $_POST['content_en'],
                        'date' => $article['date'], // Keep original date
                        'modified' => date('Y-m-d H:i:s')
                    ];
                    break;
                }
            }
        } else {
            // CREATE new article
            $new_article = [
                'id' => time(),
                'title_ro' => $_POST['title_ro'],
                'title_en' => $_POST['title_en'],
                'content_ro' => $_POST['content_ro'],
                'content_en' => $_POST['content_en'],
                'date' => date('Y-m-d H:i:s')
            ];
            array_unshift($articles, $new_article);
        }

        file_put_contents($articles_file, json_encode($articles, JSON_PRETTY_PRINT));
        header('Location: admin.php');
        exit;
    }
}

// --- Login Form ---
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style> body { font-family: sans-serif; max-width: 500px; margin: 50px auto; } input { padding: 8px; margin: 10px 0; } </style>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($login_error)) echo "<p style='color:red;'>$login_error</p>"; ?>
    <form method="post">
        Password: <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
<?php
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Articles</title>
    <script src="https://cdn.tiny.cloud/1/abjp02aysc6dmxk7b8j6dmqooipdhu66cop01dwbuwjlnssb/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
    <style>
        body { font-family: sans-serif; max-width: 1000px; margin: 20px auto; }
        input[type=text], textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; box-sizing: border-box; }
        button { padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer; }
        button:hover { background: #0056b3; }
        .logout { float: right; color: red; text-decoration: none; }
        .article-list { margin-top: 40px; border-top: 2px solid #ccc; padding-top: 20px; }
        .article-item { padding: 10px; border: 1px solid #ddd; margin: 10px 0; background: #f9f9f9; }
        .article-item h3 { margin: 0 0 10px 0; }
        .article-actions { margin-top: 10px; }
        .article-actions a { margin-right: 10px; padding: 5px 10px; text-decoration: none; background: #28a745; color: white; border-radius: 3px; }
        .article-actions a.delete { background: #dc3545; }
        .lang-section { border: 1px solid #ddd; padding: 15px; margin-bottom: 20px; background: #f5f5f5; }
    </style>
</head>
<body>
    <script>
      tinymce.init({
        selector: 'textarea.tinymce-editor',
        plugins: 'anchor autolink charmap codesample emoticons link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize forecolor backcolor | bold italic underline strikethrough | link table | align lineheight | bullist numlist | removeformat',
        height: 300,
        menubar: false
      });
    </script>
    
    <a href="?logout=true" class="logout">Logout</a>
    <h1><?php echo $edit_article ? 'Edit Article' : 'Create New Article'; ?></h1>
    
    <form method="post">
        <?php if ($edit_article): ?>
            <input type="hidden" name="edit_id" value="<?php echo $edit_article['id']; ?>">
        <?php endif; ?>
        
        <div class="lang-section">
            <h3>🇷🇴 Romanian Version</h3>
            <label>Title (Romanian)</label>
            <input type="text" name="title_ro" value="<?php echo $edit_article ? htmlspecialchars($edit_article['title_ro']) : ''; ?>" required>
            
            <label>Content (Romanian)</label>
            <textarea name="content_ro" class="tinymce-editor"><?php echo $edit_article ? htmlspecialchars($edit_article['content_ro']) : ''; ?></textarea>
        </div>
        
        <div class="lang-section">
            <h3>🇬🇧 English Version</h3>
            <label>Title (English)</label>
            <input type="text" name="title_en" value="<?php echo $edit_article ? htmlspecialchars($edit_article['title_en']) : ''; ?>" required>
            
            <label>Content (English)</label>
            <textarea name="content_en" class="tinymce-editor"><?php echo $edit_article ? htmlspecialchars($edit_article['content_en']) : ''; ?></textarea>
        </div>
        
        <button type="submit"><?php echo $edit_article ? 'Update Article' : 'Save Article'; ?></button>
        <?php if ($edit_article): ?>
            <a href="admin.php" style="margin-left: 10px; padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; display: inline-block;">Cancel</a>
        <?php endif; ?>
    </form>
    
    <div class="article-list">
        <h2>Existing Articles</h2>
        <?php if (empty($articles)): ?>
            <p>No articles yet.</p>
        <?php else: ?>
            <?php foreach ($articles as $article): ?>
                <div class="article-item">
                    <h3><?php echo htmlspecialchars($article['title_ro']); ?> / <?php echo htmlspecialchars($article['title_en']); ?></h3>
                    <small>Created: <?php echo $article['date']; ?></small>
                    <div class="article-actions">
                        <a href="?edit=<?php echo $article['id']; ?>">Edit</a>
                        <a href="?delete=<?php echo $article['id']; ?>" class="delete" onclick="return confirm('Delete this article?');">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
