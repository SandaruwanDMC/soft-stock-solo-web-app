<?php

function addCategory($conn, $category_name, $other_info, $user_id) {
    $sql = "INSERT INTO categories(category_name, other_info, user_id) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_category.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssi", $category_name, $other_info, $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_category.php?error=none');
    exit();
}