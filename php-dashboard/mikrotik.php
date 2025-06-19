<?php
require_once 'functions.php';

if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}

$language = get_user_language();
$theme = get_user_theme();

// Load language file
$lang_file = $language === 'en' ? 'lang_en.php' : 'lang_id.php';
require_once $lang_file;
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($language) ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $lang['mikrotik_title'] ?? 'MikroTik' ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?= $theme === 'dark' ? '#121212' : '#f4f6f8' ?>;
            color: <?= $theme === 'dark' ? '#eee' : '#333' ?>;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: <?= $theme === 'dark' ? '#1f1f1f' : '#007bff' ?>;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        nav {
            background-color: <?= $theme === 'dark' ? '#222' : '#e9ecef' ?>;
            padding: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        nav a {
            color: <?= $theme === 'dark' ? '#ddd' : '#007bff' ?>;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 1rem;
        }
        @media (max-width: 600px) {
            nav {
                flex<create_file>
<path>php-dashboard/mikrotik.php</path>
<content>
<?php
require_once 'functions.php';

if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}

$language = get_user_language();
$theme = get_user_theme();

// Load language file
$lang_file = $language === 'en' ? 'lang_en.php' : 'lang_id.php';
require_once $lang_file;
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($language) ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $lang['mikrotik_title'] ?? 'MikroTik' ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?= $theme === 'dark' ? '#121212' : '#f4f6f8' ?>;
            color: <?= $theme === 'dark' ? '#eee' : '#333' ?>;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: <?= $theme === 'dark' ? '#1f1f1f' : '#007bff' ?>;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        nav.main-menu {
            background-color: <?= $theme === 'dark' ? '#222' : '#e9ecef' ?>;
            padding: 1rem;
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        nav.main-menu a {
            color: <?= $theme === 'dark' ? '#ddd' : '#007bff' ?>;
            text-decoration: none;
            font-weight: bold;
        }
        nav.main-menu a:hover {
            text-decoration: underline;
        }
        nav.submenu {
            background-color: <?= $theme === 'dark' ? '#333' : '#fff' ?>;
            padding: 1rem;
            margin-top: 1rem;
        }
        nav.submenu a {
            display: block;
            margin-bottom: 0.5rem;
            color: <?= $theme === 'dark' ? '#ccc' : '#007bff' ?>;
            text-decoration: none;
        }
        nav.submenu a:hover {
            text-decoration: underline;
        }
        main {
            padding: 1rem;
        }
        @media (max-width: 600px) {
            nav.main-menu {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1><?= $lang['mikrotik_title'] ?? 'MikroTik' ?></h1>
        <p><a href="admin.php" style="color: <?= $theme === 'dark' ? '#f88' : '#c00' ?>;">&larr; <?= $lang['back_to_dashboard'] ?? 'Kembali ke Dashboard' ?></a></p>
    </header>
    <nav class="submenu">
        <a href="pppoe.php"><?= $lang['menu_pppoe'] ?? 'PPPoE' ?></a>
        <a href="hotspot.php"><?= $lang['menu_hotspot'] ?? 'Hotspot' ?></a>
        <a href="user_profiles.php"><?= $lang['menu_user_profiles'] ?? 'User Profiles' ?></a>
        <a href="dhcp_server.php"><?= $lang['menu_dhcp_server'] ?? 'DHCP Server' ?></a>
        <a href="netwatch.php"><?= $lang['menu_netwatch'] ?? 'Netwatch' ?></a>
        <a href="queue_bandwidth.php"><?= $lang['menu_queue_bandwidth'] ?? 'Queue & Bandwidth' ?></a>
        <a href="script.php"><?= $lang['menu_script'] ?? 'Script' ?></a>
        <a href="firewall.php"><?= $lang['menu_firewall'] ?? 'Firewall' ?></a>
        <a href="log_monitoring.php"><?= $lang['menu_log_monitoring'] ?? 'Log Monitoring' ?></a>
        <a href="panel_monitoring.php"><?= $lang['menu_panel_monitoring'] ?? 'Panel Monitoring Pelanggan' ?></a>
    </nav>
    <main>
        <h2><?= $lang['mikrotik_welcome'] ?? 'Selamat datang di halaman MikroTik.' ?></h2>
        <p><?= $lang['mikrotik_info'] ?? 'Ini adalah halaman utama MikroTik dengan menu dummy.' ?></p>
    </main>
</body>
</html>
