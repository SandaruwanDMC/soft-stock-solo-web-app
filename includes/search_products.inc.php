<?php
require_once '../includes/dbh.inc.php';

if (isset($_POST['search'])) {
    $searchQuery = $_POST['search'];
    $sql = "SELECT * FROM products WHERE product_name LIKE ? OR barcode_number LIKE ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_stock.php?error=stmtFailed');
        exit();
    } else {
        $searchPattern = "%$searchQuery%";
        mysqli_stmt_bind_param($stmt, "ss", $searchPattern, $searchPattern);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result->num_rows > 0) {
            echo '<thead>';
            echo   '<tr>';
            echo '<th>Barcode Number</th>';
            echo   '<th>Product Name</th>';
            echo  '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($product = $result->fetch_assoc()) {
                echo '<tr class="editable-row" data-product-id="' . $product['product_id'] . '">';
                echo '<td class="editable" data-field="barcode_number">' . $product['barcode_number'] . '</td>';
                echo '<td>' . $product['product_name'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
        } else {
            echo '<thead>';
            echo   '<tr>';
            echo '<th>Barcode Number</th>';
            echo   '<th>Product Name</th>';
            echo  '</tr>';
            echo '</thead>';
            echo '<tr><td colspan="2" class="text-center">No products found</td></tr>';
        }
    }
} else {
    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_stock.php');
    exit();
}