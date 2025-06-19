<?php
// Navigasi menu admin
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php?id=home"><?= $lang['dashboard_title'] ?? 'Dashboard' ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="admin.php?id=home"><?= $lang['menu_dashboard'] ?? 'Dashboard' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=agen"><?= $lang['menu_agen'] ?? 'Data Agen' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=keuangan"><?= $lang['menu_keuangan'] ?? 'Keuangan & Saldo' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=absensi"><?= $lang['menu_absensi'] ?? 'Monitoring Absensi' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=cuti_requests"><?= $lang['menu_cuti'] ?? 'Request Cuti' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=tiket"><?= $lang['menu_tiket'] ?? 'Tiket' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=shift_types"><?= $lang['menu_shift'] ?? 'Pengaturan Shift' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=pengaturan_tiket"><?= $lang['menu_pengaturan_tiket'] ?? 'Pengaturan Tiket' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=log"><?= $lang['menu_log'] ?? 'History & Log Saldo' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=payment"><?= $lang['menu_payment'] ?? 'Pembayaran' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=qr_tokens"><?= $lang['menu_qr_tokens'] ?? 'QR Token' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=paket"><?= $lang['menu_paket'] ?? 'Pengaturan Paket' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php?id=logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
