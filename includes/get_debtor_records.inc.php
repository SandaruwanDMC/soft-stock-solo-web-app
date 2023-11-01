<?php

require_once '../includes/dbh.inc.php';

$user_id = $_SESSION['user_id'];

// $sql = "SELECT * FROM invoice WHERE user_id = ? ORDER BY created_at DESC LIMIT 5;";


$sql = "SELECT
DR.debtor_record_id,
DR.debtor_id,
D.debtor_name,
D.debtor_nic,
I.invoice_id,
I.total_amount
FROM debtor_record AS DR
JOIN debtor AS D ON DR.debtor_id = D.debtor_id
JOIN invoice AS I ON DR.invoice_id = I.invoice_id WHERE DR.user_id = ?;";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/debtor_records.php?error=stmtFailed');
    exit();
}

mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

// $categories = mysqli_fetch_assoc($resultData);

$debtorRecords = array(); // Initialize an empty array to store categories

while ($row = mysqli_fetch_assoc($resultData)) {
    $debtorRecords[] = $row; // Add each row to the categories array
}

mysqli_stmt_close($stmt);
