<?php

// ================================
// 🔐 Secure Session Configuration
// ================================

// Force HTTPS (enable on live server)
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    ini_set('session.cookie_secure', 1);
}

ini_set('session.use_strict_mode', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', 'Strict');

session_start();

// Session Timeout (15 minutes)
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    session_unset();
    session_destroy();
}
$_SESSION['LAST_ACTIVITY'] = time();


// ================================
// 📁 Project Paths
// ================================

// Absolute server path
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/pft-website/');

// Base URL (Change when live)
define('BASE_URL', 'http://localhost/pft-website/');


// ================================
// 🌐 Site Settings
// ================================

define('SITE_NAME', 'Parrish Family Trucking');
define('THEME_COLOR', '#FFFFFF');
define('FONT_FAMILY', '"Times New Roman", Times, serif');


// ================================
// ⚙️ Production Error Handling
// ================================

error_reporting(0);
ini_set('display_errors', 0);

?>