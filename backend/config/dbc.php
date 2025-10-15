<?php
if (!defined('DB_HOST'))
    define('DB_HOST', 'localhost');
if (!defined('DB_USER'))
    define('DB_USER', 'root');
if (!defined('DB_PASS'))
    define('DB_PASS', '');
if (!defined('DB_NAME'))
    define('DB_NAME', 'cybertron_labs');

// Admin credentials
$admin_email = "admin@cybertronlabs.com";
$admin_password = "CyberLabs123@";

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>