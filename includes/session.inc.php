<?php
ini_set('session.gc_maxlifetime', 60 * 60);
session_start();

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 60 * 60)) {
    session_unset();
    session_destroy();
    header("Location: ./index.php");
    exit;
} else {
    $_SESSION['last_activity'] = time();
}

if ($_SESSION["user_id"] === null) {
    header("Location: ./index.php");
    exit;
}
