<?php
require "../includes/session.inc.php";

$user_id = $_SESSION['user_id'];

if (isset($_POST['debtor-records-submit'])) {
        $debtor_record_id = $_POST['input-debtor-records-debtor-record-id'];

        require_once 'dbh.inc.php';
        require_once '../model/debtor_records_model.php';

        deleteDebtoRecord($conn, $debtor_record_id);
} else {
        header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/debtor_records.php");
        exit();
}
