<?php
require_once '../includes/dbh.inc.php';

if (isset($_POST['search'])) {
    $searchQuery = $_POST['search'];

    $sql = "SELECT products.barcode_number, products.product_name, stocks.stock_id, stocks.batch_number, stocks.initial_stock, stocks.current_stock, stocks.expire_date, stocks.cost_price, stocks.unit_price
        FROM products
        INNER JOIN stocks
        ON products.product_id = stocks.product_id
        WHERE products.product_name LIKE ? OR products.barcode_number LIKE ?";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_stock.php?error=stmtFailed');
        exit();
    } else {
        $searchPattern = "%$searchQuery%";
        mysqli_stmt_bind_param($stmt, "ss", $searchPattern, $searchPattern);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result->num_rows > 0) {
            echo '<thead>';
            echo '<tr>';
            echo '<th>Barcode Number</th>';
            echo '<th>Product Name</th>';
            echo '<th>Batch Number</th>';
            echo '<th>Initial Stock</th>';
            echo '<th>Current Stock</th>';
            echo '<th>Expire Date</th>';
            echo '<th>Cost Price</th>';
            echo '<th>Unit Price</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($stockItem = $result->fetch_assoc()) {
                echo '<tr class="editable-row" data-product-id="' . $stockItem['stock_id'] . '">';
                echo '<td class="editable" data-field="barcode_number">' . $stockItem['barcode_number'] . '</td>';
                echo '<td>' . $stockItem['product_name'] . '</td>';
                echo '<td class="editable" data-field="batch_number">' . $stockItem['batch_number'] . '</td>';
                echo '<td class="editable" data-field="initial_stock">' . $stockItem['initial_stock'] . '</td>';
                echo '<td class="editable" data-field="current_stock">' . $stockItem['current_stock'] . '</td>';
                echo '<td class="editable" data-field="expire_date">' . $stockItem['expire_date'] . '</td>';
                echo '<td class="editable" data-field="cost_price">' . $stockItem['cost_price'] . '</td>';
                echo '<td class="editable" data-field="unit_price">' . $stockItem['unit_price'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
        } else {
            echo '<thead>';
            echo '<tr>';
            echo '<th>Barcode Number</th>';
            echo '<th>Product Name</th>';
            echo '<th>Batch Number</th>';
            echo '<th>Initial Stock</th>';
            echo '<th>Current Stock</th>';
            echo '<th>Expire Date</th>';
            echo '<th>Cost Price</th>';
            echo '<th>Unit Price</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tr><td colspan="8" class="text-center">No stocks found.</td></tr>';
        }
    }
} else {
    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_stock.php');
    exit();
}