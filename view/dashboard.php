<?php require "../includes/session.inc.php";
require "../includes/dbh.inc.php";
require "../model/dashboard_model.php"; ?>

<?php
$page_title = "Home - Soft Stock Solo Web Application";
?>

<?php require "../includes/head.inc.php"; ?>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-secondary col-auto min-vh-100 d-flex flex-column justify-content-between">
                <div class="bg-secondary p-2">
                    <a href="#" class="d-flex text-decoration-none mt-1 ms-3 me-3 align-item-center text-white">
                        <span class="fs-3 d-none d-sm-inline">Soft Stock Solo</span>
                        <i class="fs-5 fa fa-gauge"></i>
                    </a>
                    <ul class="nav nav-pills flex-column mt-1">
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="#" class="nav-link text-white" style="background-color: rgba(255, 255, 255, 0.1);">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    bar_chart_4_bars
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="sell_product.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    qr_code_scanner
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Sell Product
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="add_category.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    <span class="material-symbols-outlined">
                                        category
                                    </span>
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Add Category
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="view_category.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    <span class="material-symbols-outlined">
                                        grid_view
                                    </span>
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    View Category
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="add_product.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    add_shopping_cart
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Add Product
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="view_product.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    production_quantity_limits
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    View Products
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="add_stock.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    inventory
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Add Stock
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="view_stock.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    <span class="material-symbols-outlined">
                                        inventory_2
                                    </span>
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    View Stock
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="add_debtor.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    <span class="material-symbols-outlined">
                                        <span class="material-symbols-outlined">
                                            person_add
                                        </span>
                                    </span>
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Add Debtor
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="view_debtor.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    <span class="material-symbols-outlined">
                                        badge
                                    </span>
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    View Debtor
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="lend_product.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    qr_code_scanner
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Lend Product
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="debtor_records.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    menu_book
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Debtor Records
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="view_profit_details.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    <span class="material-symbols-outlined">
                                        info
                                    </span>
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    View Profit Details
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="manage_account.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    manage_accounts
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Manage Account
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="../includes/sign_out.inc.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    logout
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Sign Out
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col">
                <div class="container mt-4">
                    <h1>Form Title</h1>
                    <form action="your_action.php" method="POST">>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> -->
            <div class="col">
                <div class="container mt-4">
                    <h1>Product Overview</h1>
                    <div class="mb-3 row">
                        <div class="col">
                            <!-- Total Products -->
                            <div class="alert alert-info mt-3">
                                <h4>Total Products</h4>
                                <p>The total number of products in your inventory: <strong><?php echo $totalProducts; ?></strong></p>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Products with Lower Stock -->
                            <div class="alert alert-warning mt-3">
                                <h4>Products with Lower Stock</h4>
                                <p>The number of products with lower stock: <strong><?php echo $lowerStock; ?></strong></p>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Products with Zero Stock -->
                            <div class="alert alert-danger mt-3">
                                <h4>Products with Zero Stock</h4>
                                <p>The number of products with zero stock: <strong><?php echo $zeroStock; ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">

                            <!-- Table for Products with Lower Stock -->
                            <h2 class="mt-4">Products with Lower Stock</h2>
                            <table class="table table-hover table-secondary mt-2">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Stock Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    require '../includes/get_stock_lower.inc.php';

                                    if (empty($stocks)) {
                                        echo '<tr><td colspan="2" class="text-center">No products with lower stock.</td></tr>';
                                    } else {
                                        foreach ($stocks as $stockItem) {
                                            echo '<tr>';
                                            echo '<td>' . $stockItem['product_name'] . '</td>';
                                            echo '<td>' . $stockItem['current_stock'] . '</td>';
                                            echo '</tr>';
                                        }
                                    }
                                    ?>
                                    <!-- <tr>
                                        <td>Product 1</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Product 2</td>
                                        <td>15</td>
                                    </tr> -->
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>

                        <div class="col">
                            <!-- Table for Products with Zero Stock -->
                            <h2 class="mt-4">Products with Zero Stock</h2>
                            <table class="table table-hover table-secondary mt-2">
                                <thead>
                                    <tr>
                                        <th>Barcode Number</th>
                                        <th>Product Name</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    require '../includes/get_stock_zero.inc.php';

                                    if (empty($stocks)) {
                                        echo '<tr><td colspan="2" class="text-center">No products with zero stock.</td></tr>';
                                    } else {
                                        foreach ($stocks as $stockItem) {
                                            echo '<tr>';
                                            echo '<td>' . $stockItem['barcode_number'] . '</td>';
                                            echo '<td>' . $stockItem['product_name'] . '</td>';
                                            echo '</tr>';
                                        }
                                    }
                                    ?>

                                    <!-- <tr>
                                        <td>Product 3</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Product 4</td>
                                        <td>0</td>
                                    </tr>
                                    Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
</script>

<?php require "../includes/foot.inc.php"; ?>