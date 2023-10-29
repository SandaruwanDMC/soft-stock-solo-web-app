<?php
require "../includes/session.inc.php";

if (isset($_POST['view-category-submit'])) {
    $category_id = $_POST['input-view-category-id'];
    $category_name = $_POST['input-view-category-name'];
    $other_info = $_POST['input-view-category-other-info'];

    require_once 'dbh.inc.php';
    require_once '../model/view_category_model.php';
    require_once '../controller/view_category_controller.php';

    if (emptyInputs($category_id, $category_name) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_category.php?error=emptyInputs');
        exit();
    }
    updateCategory($conn, $category_id, $category_name, $other_info);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_category.php");
    exit();
}