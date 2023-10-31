<?php
require_once '../includes/dbh.inc.php';

if (isset($_POST['search'])) {
    $searchQuery = $_POST['search'];

    $sql = "SELECT * FROM debtor WHERE debtor_name LIKE ? OR debtor_nic LIKE ?";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_debtor.php?error=stmtFailed');
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
            echo '<th>Contact</th>';
            echo '<th>Address</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($debtor = $result->fetch_assoc()) {
                echo '<tr class="editable-row" data-debtor-id="' . $debtor['debtor_id'] . '">';
                echo '<td class="editable" data-field="debtor_name">' . $debtor['debtor_name'] . '</td>';
                echo '<td class="editable" data-field="debtor_nic">' . $debtor['debtor_nic'] . '</td>';
                echo '<td class="editable" data-field="debtor_contact">' . $debtor['debtor_contact'] . '</td>';
                echo '<td class="editable" data-field="debtor_address">' . $debtor['debtor_address'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
        } else {
            echo '<thead>';
            echo '<tr>';
            echo '<th>Debtor Name</th>';
            echo '<th>NIC Number</th>';
            echo '<th>Contact</th>';
            echo '<th>Address</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tr><td colspan="4" class="text-center">No debtors found.</td></tr>';
        }
    }
} else {
    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_debtor.php');
    exit();
}