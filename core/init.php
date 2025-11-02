<?php
// 1. Începe sesiunea pentru a memora limba aleasă
session_start();

// 2. Verifică dacă utilizatorul a cerut o limbă nouă (de ex. ?lang=en)
if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    if ($_GET['lang'] == 'ro') {
        $_SESSION['lang'] = 'ro';
    } else if ($_GET['lang'] == 'en') {
        $_SESSION['lang'] = 'en';
    }
}

// 3. Stabilește limba implicită (română) dacă nu este setată nicio limbă
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'ro';
}

// 4. Stabilește calea către fișierele de limbă
$lang_file = 'lang/' . $_SESSION['lang'] . '.php';

// 5. Încarcă fișierul de limbă. $lang va fi disponibil pe toate paginile
if (file_exists($lang_file)) {
    $lang = include $lang_file;
} else {
    // Fallback în caz de eroare
    $lang = include 'lang/ro.php';
}
?>