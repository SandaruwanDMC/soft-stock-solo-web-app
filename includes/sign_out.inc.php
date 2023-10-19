<?php

session_start();
session_unset();
session_destroy();

header('location: ../index.php');
        exit;


//         <?php
// ini_set('session.gc_maxlifetime', 5); // Set the session timeout to 30 minutes
// session_start();

// if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 5)) {
//     session_unset();
//     session_destroy();
//     header("Location: ./index.php");
//     exit;
// } else {
//     $_SESSION['last_activity'] = time();
// }

// $pageTitle = "Home - Soft Stock Solo Web Application";
// ?>