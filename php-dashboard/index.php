<?php
require_once 'functions.php';

// Handle language switch
if (isset($_GET['lang'])) {
    set_language($_GET['lang']);
    header('Location: index.php');
    exit;
}

// Handle theme switch
if (isset($_GET['theme'])) {
    set_theme($_GET['theme']);
    header('Location: index.php');
    exit;
}

$lang = get_language();
$theme = get_theme();

$lang_data = require "lang_{$lang}.php";

if (!is_logged_in()) {
    // Show login form
    ?>
    <!DOCTYPE html>
    <html lang="<?php echo htmlspecialchars($lang); ?>">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $lang_data['login']; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            body {
                background-color: <?php echo $theme === 'dark' ? '#1a202c' : '#fff'; ?>;
                color: <?php echo $theme === 'dark' ? '#cbd5e1' : '#000'; ?>;
            }
        </style>
    </head>
    <body class="flex items-center justify-center min-h-screen">
        <form action="login.php" method="post" class="bg-white dark:bg-gray-800 p-8 rounded shadow-md w-full max-w-sm">
            <h1 class="text-2xl mb-6 text-center"><?php echo $lang_data['login']; ?></h1>
            <?php if (isset($_GET['error'])): ?>
                <p class="text-red-500 mb-4"><?php echo $lang_data['login_error']; ?></p>
            <?php endif; ?>
            <label for="username" class="block mb-2"><?php echo $lang_data['username']; ?></label>
            <input type="text" id="username" name="username" required class="w-full p-2 mb-4 border rounded" />
            <label for="password" class="block mb-2"><?php echo $lang_data['password']; ?></label>
            <input type="password" id="password" name="password" required class="w-full p-2 mb-4 border rounded" />
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded"><?php echo $lang_data['submit']; ?></button>
        </form>
        <div class="fixed top-4 right-4 flex space-x-4">
            <form method="get" class="inline">
                <select name="lang" onchange="this.form.submit()" class="p-1 rounded border">
                    <option value="id" <?php echo $lang === 'id' ? 'selected' : ''; ?>>Bahasa Indonesia</option>
                    <option value="en" <?php echo $lang === 'en' ? 'selected' : ''; ?>>English</option>
                </select>
            </form>
            <form method="get" class="inline">
                <select name="theme" onchange="this.form.submit()" class="p-1 rounded border">
                    <option value="light" <?php echo $theme === 'light' ? 'selected' : ''; ?>><?php echo $lang_data['light']; ?></option>
                    <option value="dark" <?php echo $theme === 'dark' ? 'selected' : ''; ?>><?php echo $lang_data['dark']; ?></option>
                </select>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
} else {
    // Show dashboard
    ?>
    <!DOCTYPE html>
    <html lang="<?php echo htmlspecialchars($lang); ?>">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $lang_data['title']; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            body {
                background-color: <?php echo $theme === 'dark' ? '#1a202c' : '#fff'; ?>;
                color: <?php echo $theme === 'dark' ? '#cbd5e1' : '#000'; ?>;
            }
        </style>
    </head>
    <body class="min-h-screen p-6">
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold"><?php echo $lang_data['welcome']; ?>, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
            <nav>
                <a href="logout.php" class="text-red-600 hover:underline"><?php echo $lang_data['logout']; ?></a>
            </nav>
        </header>
        <main>
            <p>Ini adalah halaman dashboard admin.</p>
        </main>
        <div class="fixed top-4 right-4 flex space-x-4">
            <form method="get" class="inline">
                <select name="lang" onchange="this.form.submit()" class="p-1 rounded border">
                    <option value="id" <?php echo $lang === 'id' ? 'selected' : ''; ?>>Bahasa Indonesia</option>
                    <option value="en" <?php echo $lang === 'en' ? 'selected' : ''; ?>>English</option>
                </select>
            </form>
            <form method="get" class="inline">
                <select name="theme" onchange="this.form.submit()" class="p-1 rounded border">
                    <option value="light" <?php echo $theme === 'light' ? 'selected' : ''; ?>><?php echo $lang_data['light']; ?></option>
                    <option value="dark" <?php echo $theme === 'dark' ? 'selected' : ''; ?>><?php echo $lang_data['dark']; ?></option>
                </select>
            </form>
        </div>
    </body>
    </html>
    <?php
}
