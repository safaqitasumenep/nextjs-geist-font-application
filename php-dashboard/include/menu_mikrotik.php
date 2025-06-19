<?php
// Navigasi menu MikroTik
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="mikrotik.php?id=dashboard"><?= $lang['mikrotik_title'] ?? 'MikroTik' ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMikrotik" 
      aria-controls="navbarMikrotik" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMikrotik">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=dashboard"><?= $lang['menu_dashboard'] ?? 'Dashboard' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=pppoe"><?= $lang['menu_pppoe'] ?? 'PPPoE' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=hotspot"><?= $lang['menu_hotspot'] ?? 'Hotspot' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=user_profiles"><?= $lang['menu_user_profiles'] ?? 'User Profiles' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=dhcp_server"><?= $lang['menu_dhcp_server'] ?? 'DHCP Server' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=netwatch"><?= $lang['menu_netwatch'] ?? 'Netwatch' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=queue_bandwidth"><?= $lang['menu_queue_bandwidth'] ?? 'Queue & Bandwidth' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=script"><?= $lang['menu_script'] ?? 'Script' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=firewall"><?= $lang['menu_firewall'] ?? 'Firewall' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=log_monitoring"><?= $lang['menu_log_monitoring'] ?? 'Log Monitoring' ?></a></li>
        <li class="nav-item"><a class="nav-link" href="mikrotik.php?id=panel_monitoring"><?= $lang['menu_panel_monitoring'] ?? 'Panel Monitoring Pelanggan' ?></a></li>
      </ul>
    </div>
  </div>
</nav>
