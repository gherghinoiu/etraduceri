<?php
session_start();

$username = 'sebastian';
$password = 'sebastian';
$articlesFile = 'articles.json';

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: adminArticles.php');
    exit;
}

// Login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['loggedin'] = true;
    } else {
        $login_error = 'Invalid credentials';
    }
}

// Handle form submissions
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    $articles = file_exists($articlesFile) ? json_decode(file_get_contents($articlesFile), true) : [];

    // Save or Update Article
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
        $id = !empty($_POST['id']) ? $_POST['id'] : uniqid();
        $newArticle = [
            'id' => $id,
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'author' => 'Sebastian', // Default author
            'date' => isset($_POST['show_date']) ? date('Y-m-d') : '',
            'published' => isset($articles[$id]) ? $articles[$id]['published'] : false
        ];
        $articles[$id] = $newArticle;
        file_put_contents($articlesFile, json_encode($articles));
        header('Location: adminArticles.php');
        exit;
    }

    // Delete Article
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        unset($articles[$id]);
        file_put_contents($articlesFile, json_encode($articles));
        header('Location: adminArticles.php');
        exit;
    }

    // Publish/Unpublish Article
    if (isset($_GET['publish'])) {
        $id = $_GET['publish'];
        if (isset($articles[$id])) {
            $articles[$id]['published'] = !$articles[$id]['published'];
            file_put_contents($articlesFile, json_encode($articles));
        }
        header('Location: adminArticles.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Articles</title>
    <!-- Get a free API key from https://www.tiny.cloud/ -->
    <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/8/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#articleBody',
            promotion: false
        });
    </script>
</head>
<body>

<?php if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']): ?>
    <h1>Login</h1>
    <form method="POST" action="adminArticles.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
        <?php if (isset($login_error)) echo "<p style='color:red;'>$login_error</p>"; ?>
    </form>
<?php else: ?>
    <a href="?logout=true">Logout</a>

    <?php
    $articles = file_exists($articlesFile) ? json_decode(file_get_contents($articlesFile), true) : [];
    $editArticle = null;
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        if (isset($articles[$id])) {
            $editArticle = $articles[$id];
        }
    }
    ?>

    <h1><?= $editArticle ? 'Edit' : 'Create' ?> Article</h1>
    <form method="POST" action="adminArticles.php">
        <input type="hidden" name="id" value="<?= $editArticle ? $editArticle['id'] : '' ?>">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?= $editArticle ? htmlspecialchars($editArticle['title']) : '' ?>" required>
        <br>
        <label for="articleBody">Body:</label>
        <textarea id="articleBody" name="body"><?= $editArticle ? htmlspecialchars($editArticle['body']) : '' ?></textarea>
        <br>
        <label for="show_date">Show Date:</label>
        <input type="checkbox" id="show_date" name="show_date" <?= ($editArticle && $editArticle['date']) || !$editArticle ? 'checked' : '' ?>>
        <br>
        <button type="submit" name="save">Save Article</button>
    </form>

    <hr>

    <h1>Articles</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Published</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= htmlspecialchars($article['title']) ?></td>
                <td><?= htmlspecialchars($article['author']) ?></td>
                <td><?= htmlspecialchars($article['date']) ?></td>
                <td><?= $article['published'] ? 'Yes' : 'No' ?></td>
                <td>
                    <a href="?edit=<?= $article['id'] ?>">Edit</a>
                    <a href="?delete=<?= $article['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    <a href="?publish=<?= $article['id'] ?>"><?= $article['published'] ? 'Unpublish' : 'Publish' ?></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

</body>
</html>
