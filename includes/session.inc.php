<?php
ini_set('session.gc_maxlifetime', 60 * 60);
session_start();

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 60 * 60)) {
    session_unset();
    session_destroy();
    header("Location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/index.php");
    exit;
} else {
    $_SESSION['last_activity'] = time();
}

if ($_SESSION["user_email"] === null) {
    header("Location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/index.php");
    exit;
}
