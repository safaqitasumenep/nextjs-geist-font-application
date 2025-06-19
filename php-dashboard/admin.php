<?php
require_once __DIR__ . '/include/functions.php';

if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}

$id = $_GET['id'] ?? 'home';

include __DIR__ . '/include/header.php';
include __DIR__ . '/include/navigasi.php';

$menu_file = __DIR__ . '/menu/' . basename($id) . '.php';
if (file_exists($menu_file)) {
    include $menu_file;
} else {
    echo "<div class='container mt-3'><h2>Halaman tidak ditemukan</h2></div>";
}

include __DIR__ . '/include/footer.php';
?>
        <a href="mikrotik.php"><?= $lang['menu_mikrotik'] ?? 'MikroTik' ?></a>
    </nav>
    <main>
        <h2><?= $lang['menu_dashboard'] ?? 'Dashboard' ?></h2>
        <p><?= $lang['dashboard_welcome'] ?? 'Ini adalah halaman dashboard utama.' ?></p>
    </main>
</body>
</html>
