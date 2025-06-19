<?php
require_once __DIR__ . '/../include/functions.php';

if (!is_logged_in()) {
    header('Location: ../page/login.php');
    exit;
}

$language = get_user_language();
$theme = get_user_theme();

$lang_file = $language === 'en' ? __DIR__ . '/../lang/lang_en.php' : __DIR__ . '/../lang/lang_id.php';
require_once $lang_file;
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($language) ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $lang['menu_agen'] ?? 'Data Agen' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: <?= $theme === 'dark' ? '#121212' : '#f4f6f8' ?>;
            color: <?= $theme === 'dark' ? '#eee' : '#333' ?>;
            margin: 0;
            padding: 1rem;
        }
        a {
            color: <?= $theme === 'dark' ? '#66aaff' : '#007bff' ?>;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
