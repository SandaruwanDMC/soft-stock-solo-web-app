<?php

require_once '../includes/dbh.inc.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM debtor WHERE user_id = ?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_debtor.php?error=stmtFailed');
    exit();
}

mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

// $categories = mysqli_fetch_assoc($resultData);

$debtors = array(); // Initialize an empty array to store categories

while ($row = mysqli_fetch_assoc($resultData)) {
    $debtors[] = $row; // Add each row to the categories array
}

mysqli_stmt_close($stmt);