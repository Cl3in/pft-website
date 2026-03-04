<?php
// ================================
// 🔐 Secure Session Configuration
// ================================

if (session_status() === PHP_SESSION_NONE) {

    // Force secure cookies if HTTPS
    $isSecure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => $isSecure,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);

    ini_set('session.use_strict_mode', 1);

    session_start();
}

// ================================
// ⏱️ Session Timeout (15 min)
// ================================

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    session_unset();
    session_destroy();
}
$_SESSION['LAST_ACTIVITY'] = time();


// ================================
// 📁 Project Paths
// ================================

if (!defined('BASE_PATH')) {
    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/pft-website/');
}

if (!defined('BASE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    define('BASE_URL', $protocol . '://' . $_SERVER['HTTP_HOST'] . '/pft-website/');
}


// ================================
// 🌐 Site Settings
// ================================

define('SITE_NAME', 'PFT');
define('THEME_COLOR', '#FFFFFF');
define('FONT_FAMILY', '"Times New Roman", Times, serif');


// ================================
// ⚙️ Production Error Handling
// ================================

error_reporting(0);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', BASE_PATH . 'logs/error.log');