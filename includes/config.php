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
// 📁 Project Paths (Auto Detect)
// ================================

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$domain   = $_SERVER['HTTP_HOST'];

/* Local Development */
if ($domain === 'localhost' || $domain === '127.0.0.1') {

    $projectFolder = '/pft-website/';

    if (!defined('BASE_PATH')) {
        define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . $projectFolder);
    }

    if (!defined('BASE_URL')) {
        define('BASE_URL', $protocol . $domain . $projectFolder);
    }

/* Live Domain */
} elseif ($domain === 'www.parrishft.com' || $domain === 'parrishft.com') {

    if (!defined('BASE_PATH')) {
        define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
    }

    if (!defined('BASE_URL')) {
        define('BASE_URL', $protocol . $domain . '/');
    }

/* Fallback for other environments */
} else {

    if (!defined('BASE_PATH')) {
        define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
    }

    if (!defined('BASE_URL')) {
        define('BASE_URL', $protocol . $domain . '/');
    }

}


// ================================
// 📦 Assets Shortcut
// ================================

if (!defined('ASSETS')) {
    define('ASSETS', BASE_URL . 'assets/');
}


// ================================
// 🌐 Site Settings
// ================================

define('SITE_NAME', 'Parrish Freight Transport');
define('THEME_COLOR', '#FFFFFF');
define('FONT_FAMILY', '"Times New Roman", Times, serif');


// ================================
// ⚙️ Production Error Handling
// ================================

error_reporting(0);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

if (!file_exists(BASE_PATH . 'logs')) {
    mkdir(BASE_PATH . 'logs', 0755, true);
}

ini_set('error_log', BASE_PATH . 'logs/error.log');