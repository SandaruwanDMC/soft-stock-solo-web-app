<?php

function addDebtor($conn, $debtor_nic, $debtor_name, $debtor_contact, $debtor_address, $user_id) {
    $sql = "INSERT INTO debtor(debtor_nic, debtor_name, debtor_contact, debtor_address, user_id) VALUES(?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_debtor.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssi", $debtor_nic, $debtor_name, $debtor_contact, $debtor_address, $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_debtor.php?error=none');
    exit();
}