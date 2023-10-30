<?php
require "../includes/session.inc.php";

$user_id = $_SESSION['user_id'];

if (isset($_POST['delete-account-submit'])) {
        $category_name = $_POST['input-add-category-name'];
        $other_info = $_POST['input-add-category-other-info'];

        require_once 'dbh.inc.php';
        require_once '../model/delete_account_model.php';

        deleteAccount($conn, $user_id);
} else {
        header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/manage_account.php");
        exit();
}
