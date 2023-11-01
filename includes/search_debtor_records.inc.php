<?php
require_once '../includes/dbh.inc.php';

if (isset($_POST['search'])) {
    $searchQuery = $_POST['search'];

    // $sql = "SELECT * FROM debtor WHERE debtor_name LIKE ? OR debtor_nic LIKE ?";

    $sql = "SELECT
DR.debtor_record_id,
DR.debtor_id,
D.debtor_name,
D.debtor_nic,
I.invoice_id,
I.total_amount
FROM debtor_record AS DR
JOIN debtor AS D ON DR.debtor_id = D.debtor_id
JOIN invoice AS I ON DR.invoice_id = I.invoice_id WHERE D.debtor_name LIKE ? OR D.debtor_nic LIKE ?;";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/lend_product.php?error=stmtFailed');
        exit();
    } else {
        $searchPattern = "%$searchQuery%";
        mysqli_stmt_bind_param($stmt, "ss", $searchPattern, $searchPattern);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result->num_rows > 0) {
            echo '<thead>';
            echo '<tr>';
            echo '<th>Debtor Name</th>';
            echo '<th>NIC Number</th>';
            echo '<th>Invoice Number</th>';
            echo '<th>Total Amount</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($debtorRecord = $result->fetch_assoc()) {
                echo '<tr class="editable-row" data-debtor-record-id="' . $debtorRecord['debtor_record_id'] . '">';
                echo '<td class="editable" data-field="debtor_name">' . $debtorRecord['debtor_name'] . '</td>';
                echo '<td class="editable" data-field="debtor_nic">' . $debtorRecord['debtor_nic'] . '</td>';
                echo '<td class="editable" data-field="invoice_id">' . $debtorRecord['invoice_id'] . '</td>';
                echo '<td class="editable" data-field="total_amount">' . $debtorRecord['total_amount'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
        } else {
            echo '<thead>';
            echo '<tr>';
            echo '<th>Debtor Name</th>';
            echo '<th>NIC Number</th>';
            echo '<th>Invoice Number</th>';
            echo '<th>Total Amount</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tr><td colspan="4" class="text-center">No debtor records found.</td></tr>';
        }
    }
} else {
    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/lend_product.php');
    exit();
}
