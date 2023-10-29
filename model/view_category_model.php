<?php

function updateCategory($conn, $category_id, $category_name, $other_info) {
    $sql = "UPDATE categories SET category_name = ?, other_info = ? WHERE category_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_category.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssi", $category_name, $other_info, $category_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_category.php?error=none');
    exit();
}