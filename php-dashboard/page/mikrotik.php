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
    <title><?= $lang['mikrotik_title'] ?? 'MikroTik' ?></title>
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
    <h1><?= $lang['mikrotik_title'] ?? 'MikroTik' ?></h1>
    <nav class="mb-3">
        <a href="pppoe.php" class="btn btn-link"><?= $lang['menu_pppoe'] ?? 'PPPoE' ?></a>
        <a href="hotspot.php" class="btn btn-link"><?= $lang['menu_hotspot'] ?? 'Hotspot' ?></a>
        <a href="user_profiles.php" class="btn btn-link"><?= $lang['menu_user_profiles'] ?? 'User Profiles' ?></a>
        <a href="dhcp_server.php" class="btn btn-link"><?= $lang['menu_dhcp_server'] ?? 'DHCP Server' ?></a>
        <a href="netwatch.php" class="btn btn-link"><?= $lang['menu_netwatch'] ?? 'Netwatch' ?></a>
        <a href="queue_bandwidth.php" class="btn btn-link"><?= $lang['menu_queue_bandwidth'] ?? 'Queue & Bandwidth' ?></a>
        <a href="script.php" class="btn btn-link"><?= $lang['menu_script'] ?? 'Script' ?></a>
        <a href="firewall.php" class="btn btn-link"><?= $lang['menu_firewall'] ?? 'Firewall' ?></a>
        <a href="log_monitoring.php" class="btn btn-link"><?= $lang['menu_log_monitoring'] ?? 'Log Monitoring' ?></a>
        <a href="panel_monitoring.php" class="btn btn-link"><?= $lang['menu_panel_monitoring'] ?? 'Panel Monitoring Pelanggan' ?></a>
    </nav>
    <p><?= $lang['mikrotik_welcome'] ?? 'Selamat datang di halaman MikroTik.' ?></p>
    <p><a href="admin.php">&larr; <?= $lang['back_to_dashboard'] ?? 'Kembali ke Dashboard' ?></a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
