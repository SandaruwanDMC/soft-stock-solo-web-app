<?php

function updateDebtor($conn, $debtor_nic, $debtor_name, $debtor_contact, $debtor_address, $debtor_id) {
    $sql = "UPDATE debtor SET debtor_nic = ?, debtor_name = ?, debtor_contact =  ?, debtor_address = ? WHERE debtor_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_debtor.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssi", $debtor_nic, $debtor_name, $debtor_contact, $debtor_address, $debtor_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_debtor.php?error=none');
    exit();
}