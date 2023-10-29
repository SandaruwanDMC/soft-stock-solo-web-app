<?php
require "../includes/session.inc.php";

$user_id = $_SESSION['user_id'];

if (isset($_POST['add-category-submit'])) {
    $category_name = $_POST['input-add-category-name'];
    $other_info = $_POST['input-add-category-other-info'];

    require_once 'dbh.inc.php';
    require_once '../model/add_category_model.php';
    require_once '../controller/add_category_controller.php';

    if (emptyInputs($category_name) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_category.php?error=emptyInputs');
        exit();
    }
    addCategory($conn, $category_name, $other_info, $user_id);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_category.php");
    exit();
}