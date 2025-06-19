<?php
// include/functions.php
session_start();

require_once 'config.php';

// Fungsi verifikasi login
function verify_login($username, $password) {
    global $database;

    $user = $database->get('owner', '*', ['username' => $username]);
    if ($user && password_verify($password, $user['password'])) {
        // Set session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['language'] = $user['bahasa'] ?? 'id';
        $_SESSION['theme'] = $user['tema'] ?? 'light';
        $_SESSION['color_theme'] = $user['warna_tema'] ?? 'default';
        return true;
    }
    return false;
}

// Fungsi cek apakah user sudah login
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Fungsi logout
function logout() {
    session_unset();
    session_destroy();
}

// Fungsi ambil bahasa user
function get_user_language() {
    return $_SESSION['language'] ?? 'id';
}

// Fungsi ambil tema user
function get_user_theme() {
    return $_SESSION['theme'] ?? 'light';
}

// Fungsi ambil warna tema user
function get_user_color_theme() {
    return $_SESSION['color_theme'] ?? 'default';
}

// Fungsi update preferensi bahasa dan tema user ke database dan session
function update_user_preferences($language, $theme, $color_theme) {
    global $database;
    if (!is_logged_in()) {
        return false;
    }
    $user_id = $_SESSION['user_id'];
    $database->update('owner', [
        'bahasa' => $language,
        'tema' => $theme,
        'warna_tema' => $color_theme
    ], ['id' => $user_id]);

    $_SESSION['language'] = $language;
    $_SESSION['theme'] = $theme;
    $_SESSION['color_theme'] = $color_theme;
    return true;
}
?>
