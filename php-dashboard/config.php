<?php
// include/config.php
require_once __DIR__ . '/../../vendor/autoload.php'; // pastikan Medoo sudah terinstall via composer

use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'safa_safaqita_owner',
    'server' => 'localhost',
    'username' => 'root', // sesuaikan dengan user db Anda
    'password' => '',     // sesuaikan dengan password db Anda
    'charset' => 'utf8mb4',
    'option' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
]);
?>
