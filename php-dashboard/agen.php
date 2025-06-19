<?php
require_once 'functions.php';

if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}

$language = get_user_language();
$theme = get_user_theme();

$lang_file = $language === 'en' ? 'lang_en.php' : 'lang_id.php';
require_once $lang_file;
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($language) ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $lang['menu_agen'] ?? 'Data Agen' ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?= $theme === 'dark' ? '#121212' : '#f4f6f8' ?>;
            color: <?= $theme === 'dark' ? '#eee' : '#333' ?>;
            margin: 0;
            padding: 1rem;
        }
        a {
            color: <?= $theme === 'dark' ? '#66aaff' : '#007bff' ?>;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1><?= $lang['menu_agen'] ?? 'Data Agen' ?></h1>
    <p>Ini adalah halaman dummy untuk menu Data Agen.</p>
    <p><a href="admin.php">&larr; Kembali ke Dashboard</a></p>
</body>
</html>
