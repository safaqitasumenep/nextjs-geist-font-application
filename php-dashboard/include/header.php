<?php
require_once __DIR__ . '/functions.php';

$language = get_user_language();
$theme = get_user_theme();
$color_theme = get_user_color_theme();

$lang_file = $language === 'en' ? __DIR__ . '/../lang/lang_en.php' : __DIR__ . '/../lang/lang_id.php';
require_once $lang_file;
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($language) ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $lang['dashboard_title'] ?? 'Dashboard Admin' ?></title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/fontawesome.min.css" rel="stylesheet" />
    <link href="/css/custom.css" rel="stylesheet" />
</head>
<body class="<?= htmlspecialchars($theme) ?> <?= htmlspecialchars($color_theme) ?>">
<?php if (!is_logged_in()): ?>
    <script>window.location.href = '/login.php';</script>
<?php endif; ?>
