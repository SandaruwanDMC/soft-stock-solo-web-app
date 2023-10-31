<?php require "../includes/session.inc.php"; ?>

<?php
$page_title = "View Stock - Soft Stock Solo Web Application";
?>

<?php require "../includes/head.inc.php"; ?>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-secondary col-auto min-vh-100 d-flex flex-column justify-content-between">
                <div class="bg-secondary p-2">
                    <a href="#" class="d-flex text-decoration-none mt-1 ms-3 me-3 align-item-center text-white">
                        <span class="fs-3 d-none d-sm-inline">Soft Stock Solo</span>
                        <i class="fs-5 fa fa-gauge"></i>
                    </a>
                    <ul class="nav nav-pills flex-column mt-1">
                        <!-- <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="dashboard.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    bar_chart_4_bars
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Dashboard
                                </span>
                            </a>
                        </li> -->
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
                        <!-- <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="lend_product.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    qr_code_scanner
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Lend Product
                                </span>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="debtor_records.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    menu_book
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Debtor Records
                                </span>
                            </a>
                        </li> -->
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
                                <span class=" material-symbols-outlined fa-m me-1 fa-fw align-middle">
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
                                <span class=" material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    inventory
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Add Stock
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="#" class="nav-link text-white" style="background-color: rgba(255, 255, 255, 0.1);">
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
                        <!-- <li class="nav-item py-2 py-sm-0 my-1">
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
                        </li> -->
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
            <div class="col">
                <div class="container mt-4">
                    <h1>View Stock</h1>
                    <form action="../includes/view_stock.inc.php" method="POST" class="needs-validation mt-5" novalidate>
                        <div class="mb-3 row">
                            <div class="col">
                                <input type="text" class="form-control" id="input-view-stock-id" name="input-view-stock-id" hidden>
                                <label for="input-view-stock-barcode-number" class="form-label">Barcode Number</label>
                                <input type="text" class="form-control" id="input-view-stock-barcode-number" name="input-view-stock-barcode-number" placeholder="Barcode Number" disabled>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the barcode number.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-view-stock-batch-number" class="form-label">Batch Number</label>
                                <input type="text" class="form-control" id="input-view-stock-batch-number" name="input-view-stock-batch-number" placeholder="Batch Number" disabled>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the batch number.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col">
                                <label for="input-view-stock-initial-stock" class="form-label">Initial Stock</label>
                                <input type="number" class="form-control" id="input-view-stock-initial-stock" name="input-view-stock-initial-stock" placeholder="Initial Stock" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the initial stock.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-view-stock-current-stock" class="form-label">Current Stock</label>
                                <input type="number" class="form-control" id="input-view-stock-current-stock" name="input-view-stock-current-stock" placeholder="Current Stock" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the current stock.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col">
                                <label for="input-view-stock-expire-date" class="form-label">Expire Date</label>
                                <input type="date" class="form-control" id="input-view-stock-expire-date" name="input-view-stock-expire-date" placeholder="Expire Date" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please select the expire date.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-view-stock-cost-price" class="form-label">Cost Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="number" class="form-control" id="input-view-stock-cost-price" name="input-view-stock-cost-price" placeholder="Cost Price" min="0.00" max="10000.00" step="0.01" required>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the cost price.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-view-stock-unit-price" class="form-label">Unit Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="number" class="form-control" id="input-view-stock-unit-price" name="input-view-stock-unit-price" placeholder="Unit Price" min="0.00" max="10000.00" step="0.01" required>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the unit price.
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 mt-2" name="view-stock-submit">Update Stock</button>
                    </form>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyInputs") {
                    ?>
                            <div class="alert alert-danger d-flex align-items-center mt-1" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    Empty inputs cannot be accepted.
                                </div>
                            </div>
                        <?php
                        } else if ($_GET["error"] == "batchNumberExist") {
                        ?>
                            <div class="alert alert-danger d-flex align-items-center mt-1" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    You have entered an exist batch number.
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <h2 class="mt-5">Available Stocks</h2>
                    <input type="text" id="search-input" class="form-control" placeholder="Search for products">
                    <table class="table table-hover table-secondary mt-2" id="product-table">
                        <thead>
                            <tr>
                                <th>Barcode Number</th>
                                <th>Product Name</th>
                                <th>Batch Number</th>
                                <th>Initial Stock</th>
                                <th>Current Stock</th>
                                <th>Expire Date</th>
                                <th>Cost Price</th>
                                <th>Unit Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require '../includes/get_stock.inc.php';

                            if (empty($stocks)) {
                                echo '<tr><td colspan="8" class="text-center">No stock data available.</td></tr>';
                            } else {
                                foreach ($stocks as $stockItem) {
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
                            }
                            ?>
                        </tbody>
                    </table>
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
<script>
    (function() {
        "use strict";

        var forms = document.querySelectorAll(".needs-validation");

        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener(
                "submit",
                function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search-input').on('input', function() {
            var searchQuery = $(this).val();

            // Send the search query to the server for processing
            $.ajax({
                type: 'POST',
                url: '../includes/search_stocks.inc.php', // Create this PHP file
                data: {
                    search: searchQuery
                },
                success: function(response) {
                    // Update the product table with the search results
                    $('#product-table').html(response);
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productTable = document.getElementById('product-table');
        const inputStockId = document.getElementById('input-view-stock-id');
        const inputBarcodeNumber = document.getElementById('input-view-stock-barcode-number');
        const inputBatchNumber = document.getElementById('input-view-stock-batch-number');
        const inputInitialStock = document.getElementById('input-view-stock-initial-stock');
        const inputCurrentStock = document.getElementById('input-view-stock-current-stock');
        const inputExpireDate = document.getElementById('input-view-stock-expire-date');
        const inputCostPrice = document.getElementById('input-view-stock-cost-price');
        const inputUnitPrice = document.getElementById('input-view-stock-unit-price');

        productTable.addEventListener('click', function(event) {
            if (event.target.closest('.editable-row')) {
                const row = event.target.closest('.editable-row');
                const stockID = row.getAttribute('data-product-id');
                const barcodeNumber = row.querySelector('[data-field="barcode_number"]').textContent;
                const batchNumber = row.querySelector('[data-field="batch_number"]').textContent;
                const initialStock = row.querySelector('[data-field="initial_stock"]').textContent;
                const currentStock = row.querySelector('[data-field="current_stock"]').textContent;
                const expireDate = row.querySelector('[data-field="expire_date"]').textContent;
                const costPrice = row.querySelector('[data-field="cost_price"]').textContent;
                const unitPrice = row.querySelector('[data-field="unit_price"]').textContent;

                inputStockId.value = stockID;
                inputBarcodeNumber.value = barcodeNumber;
                inputBatchNumber.value = batchNumber;
                inputInitialStock.value = initialStock;
                inputCurrentStock.value = currentStock;
                inputExpireDate.value = expireDate;
                inputCostPrice.value = costPrice;
                inputUnitPrice.value = unitPrice;
            }
        });
    });
</script>

<?php require "../includes/foot.inc.php"; ?>