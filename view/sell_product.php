<?php require "../includes/session.inc.php"; ?>

<?php
$page_title = "Sell Product - Soft Stock Solo Web Application";
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
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="dashboard.php" class="nav-link text-white">
                                <span class="material-symbols-outlined fa-m me-1 fa-fw align-middle">
                                    bar_chart_4_bars
                                </span>
                                <span class="fs-5 ms-3 d-none d-sm-inline align-middle">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 my-1">
                            <a href="#" class="nav-link text-white" style="background-color: rgba(255, 255, 255, 0.1);">
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
            <div class="col-6">
                <div class="container mt-4">
                    <h1>Sell Product</h1>
                    <form action="../includes/sell_product_add_items.inc.php" method="POST" class="needs-validation mt-5" id="form-sell-products-add-items" novalidate>
                        <div class="mb-3 row">
                            <div class="col">
                                <input type="text" class="form-control" id="input-sell-product-stock-id" name="input-sell-product-stock-id" hidden required>
                                <input type="text" class="form-control" id="input-sell-product-product-name" name="input-sell-product-product-name" hidden required>
                                <label for="input-sell-product-barcode-number" class="form-label">Barcode Number</label>
                                <input type="text" class="form-control" id="input-sell-product-barcode-number" name="input-sell-product-barcode-number" placeholder="Barcode Number" disabled required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the barcode number.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-sell-product-batch-number" class="form-label">Batch Number</label>
                                <input type="text" class="form-control" id="input-sell-product-batch-number" name="input-sell-product-batch-number" placeholder="Batch Number" disabled required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the batch number.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col">
                                <input type="number" class="form-control" id="input-sell-product-cost-price" name="input-sell-product-cost-price" min="0.00" max="10000.00" step="0.01" hidden required>
                                <label for="input-sell-product-unit-price" class="form-label">Unit Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="number" class="form-control" id="input-sell-product-unit-price" name="input-sell-product-unit-price" placeholder="Unit Price" min="0.00" max="10000.00" step="0.01" disabled required>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the unit price.
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="input-sell-product-current-stock" name="input-sell-product-current-stock" hidden>
                                <label for="input-sell-product-quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="input-sell-product-quantity" name="input-sell-product-quantity" placeholder="Quantity" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the quantity.
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 mt-2" name="sell-product-submit" id="sell-product-submit">Add Item</button>
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
                        } else if ($_GET["error"] == "invalidQuantity") {
                        ?>
                            <div class="alert alert-danger d-flex align-items-center mt-1" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    Don't have enough stock.
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <div class="col">
                        <h2 class="mt-5">Available Stocks</h2>
                        <input type="text" id="search-input" class="form-control" placeholder="Search for products">
                        <table class="table table-hover table-secondary mt-2" id="product-table">
                            <thead>
                                <tr>
                                    <th>Barcode</th>
                                    <th>Product Name</th>
                                    <th>Batch Number</th>
                                    <th>Current Stock</th>
                                    <th>Expire Date</th>
                                    <th>Unit Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require '../includes/get_stock.inc.php';

                                if (empty($stocks)) {
                                    echo '<tr><td colspan="6" class="text-center">No stock data available.</td></tr>';
                                } else {
                                    foreach ($stocks as $stockItem) {
                                        $currentDate = new DateTime();
                                        $expirationDate = new DateTime($stockItem['expire_date']);
                                        if ($stockItem['current_stock'] == 0 || $currentDate > $expirationDate) {
                                            continue;
                                        }
                                        echo '<tr class="editable-row" data-product-id="' . $stockItem['stock_id'] . '">';
                                        echo '<td class="editable" data-field="barcode_number">' . $stockItem['barcode_number'] . '</td>';
                                        echo '<td class="editable" data-field="product_name">' . $stockItem['product_name'] . '</td>';
                                        echo '<td class="editable" data-field="batch_number">' . $stockItem['batch_number'] . '</td>';
                                        echo '<td class="editable" data-field="current_stock">' . $stockItem['current_stock'] . '</td>';
                                        echo '<td class="editable" data-field="expire_date">' . $stockItem['expire_date'] . '</td>';
                                        echo '<td class="editable" data-field="unit_price">' . $stockItem['unit_price'] . '</td>';
                                        echo '<td class="editable" data-field="cost_price" hidden>' . $stockItem['cost_price'] . '</td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container mt-4">
                    <h1>Invoice Details</h1>
                    <div class="col">
                        <table class="table table-hover table-secondary mt-2" id="sell-product-invoice-details">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody id="invoice-details-body">

                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <form action="../includes/sell_product_invoice_details.inc.php" method="POST" class="needs-validation mt-5" id="form-sell-product-invoice-details" novalidate>
                            <input type="hidden" id="input-sell-product-invoice-details-billing-items" name="billingItems" />
                            <div class="col">
                                <input type="text" class="form-control" id="input-sell-product-invoice-details-total-profit" name="input-sell-product-invoice-details-total-profit" placeholder="Total" hidden>
                                <label for="input-sell-product-invoice-details-total" class="form-label">Total</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="text" class="form-control" id="input-sell-product-invoice-details-total" name="input-sell-product-invoice-details-total" placeholder="Total" readonly>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the batch number.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-sell-product-invoice-details-paid-amount" class="form-label">Paid Amount</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="text" class="form-control" id="input-sell-product-invoice-details-paid-amount" name="input-sell-product-invoice-details-paid-amount" placeholder="Paid Amount" required>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the batch number.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-sell-product-invoice-details-balance" class="form-label">Balance</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="text" class="form-control" id="input-sell-product-invoice-details-balance" name="input-sell-product-invoice-details-balance" placeholder="Balance" disabled>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the batch number.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 mt-2" name="sell-product-invoice-details-submit">Print</button>
                        </form>
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
                url: '../includes/sell_product_search_stocks.inc.php', // Create this PHP file
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
        const inputStockId = document.getElementById('input-sell-product-stock-id');
        const inputProductName = document.getElementById('input-sell-product-product-name');
        const inputBarcodeNumber = document.getElementById('input-sell-product-barcode-number');
        const inputBatchNumber = document.getElementById('input-sell-product-batch-number');
        const inputCurrentStock = document.getElementById('input-sell-product-current-stock');
        // const inputExpireDate = document.getElementById('input-sell-product-expire-date');
        const inputUnitPrice = document.getElementById('input-sell-product-unit-price');
        const inputCostPrice = document.getElementById('input-sell-product-cost-price');

        productTable.addEventListener('click', function(event) {
            if (event.target.closest('.editable-row')) {
                const row = event.target.closest('.editable-row');
                const stockID = row.getAttribute('data-product-id');
                const productName = row.querySelector('[data-field="product_name"]').textContent;
                const barcodeNumber = row.querySelector('[data-field="barcode_number"]').textContent;
                const batchNumber = row.querySelector('[data-field="batch_number"]').textContent;
                const currentStock = row.querySelector('[data-field="current_stock"]').textContent;
                // const expireDate = row.querySelector('[data-field="expire_date"]').textContent;
                const unitPrice = row.querySelector('[data-field="unit_price"]').textContent;
                const costPrice = row.querySelector('[data-field="cost_price"]').textContent;

                inputStockId.value = stockID;
                inputProductName.value = productName;
                inputBarcodeNumber.value = barcodeNumber;
                inputBatchNumber.value = batchNumber;
                inputCurrentStock.value = currentStock;
                // inputExpireDate.value = expireDate;
                inputUnitPrice.value = unitPrice;
                inputCostPrice.value = costPrice;


            }
        });
    });
</script>
<script>
    const billingItems = [];
    document.addEventListener('DOMContentLoaded', function() {

        // Your existing code here...

        // Get the "sell-product-submit" button by its ID
        const sellProductSubmitButton = document.getElementById('sell-product-submit');

        // Add a click event listener to the button
        sellProductSubmitButton.addEventListener('click', function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Get the values from the form fields
            const stockId = document.getElementById('input-sell-product-stock-id').value;
            const productName = document.getElementById('input-sell-product-product-name').value;
            const barcodeNumber = document.getElementById('input-sell-product-barcode-number').value;
            const batchNumber = document.getElementById('input-sell-product-batch-number').value;
            const costPrice = document.getElementById('input-sell-product-cost-price').value;
            const unitPrice = document.getElementById('input-sell-product-unit-price').value;
            const currentStock = parseInt(document.getElementById('input-sell-product-current-stock').value, 10);
            const quantity = parseInt(document.getElementById('input-sell-product-quantity').value, 10);

            console.log(stockId);
            console.log(productName);
            console.log(barcodeNumber);
            console.log(batchNumber);
            console.log(costPrice);
            console.log(unitPrice);
            console.log(quantity);
            console.log(currentStock);
            console.log(currentStock >= quantity);

            if (stockId && productName && barcodeNumber && batchNumber && costPrice && unitPrice && quantity && currentStock && (currentStock >= quantity)) {

                // Create an object to represent the data
                const dataObject = {
                    stockId: stockId,
                    productName: productName,
                    barcodeNumber: barcodeNumber,
                    batchNumber: batchNumber,
                    costPrice: costPrice,
                    unitPrice: unitPrice,
                    currentStock: currentStock,
                    quantity: quantity,
                    subProfit: ((unitPrice - costPrice) * quantity),
                    subTotal: (unitPrice * quantity)
                };

                console.log(dataObject);

                // Push the dataObject into the dataArray
                billingItems.push(dataObject);

                // You can optionally log the updated array for debugging
                console.log(billingItems);

                // Reset the form or clear the input fields as needed
                document.getElementById('input-sell-product-stock-id').value = '';
                document.getElementById('input-sell-product-product-name').value = '';
                document.getElementById('input-sell-product-barcode-number').value = '';
                document.getElementById('input-sell-product-batch-number').value = '';
                document.getElementById('input-sell-product-cost-price').value = '';
                document.getElementById('input-sell-product-unit-price').value = '';
                document.getElementById('input-sell-product-current-stock').value = '';
                document.getElementById('input-sell-product-quantity').value = '';

                // You can perform other actions here, such as updating the table to show the added data.

                updateInvoiceTable();

            }
        });
    });

    function updateInvoiceTable() {
        const invoiceTableBody = document.getElementById('invoice-details-body');
        const invoiceTotalInput = document.getElementById('input-sell-product-invoice-details-total');
        const invoiceTotalProfitInput = document.getElementById('input-sell-product-invoice-details-total-profit');

        // Clear the current table content
        invoiceTableBody.innerHTML = '';

        let total = 0; // Initialize the total
        let totalProfit = 0; // Initialize the total

        // Loop through billingItems and add rows to the table
        billingItems.forEach((item, index) => {
            const row = invoiceTableBody.insertRow();

            // You can customize how the data is displayed in the table cells
            row.insertCell(0).innerHTML = item.productName;
            row.insertCell(1).innerHTML = item.unitPrice;
            row.insertCell(2).innerHTML = item.quantity;
            const subtotal = (item.unitPrice * item.quantity).toFixed(2);
            const subProfit = ((item.unitPrice - item.costPrice) * item.quantity).toFixed(2);
            row.insertCell(3).innerHTML = subtotal; // Display the subtotal
            total += parseFloat(subtotal); // Add subtotal to the total
            totalProfit += parseFloat(subProfit);

            const removeButton = document.createElement('button');
            removeButton.innerText = 'Remove';
            removeButton.className = 'btn btn-danger';
            removeButton.onclick = function() {
                // Remove the item from the billingItems array
                billingItems.splice(index, 1);
                // Update the invoice details table and total
                updateInvoiceTable();
            };
            row.insertCell(4).appendChild(removeButton);
        });

        // Update the invoice total input field
        invoiceTotalInput.value = total.toFixed(2);
        invoiceTotalProfitInput.value = totalProfit.toFixed(2);

    }

    document.addEventListener('DOMContentLoaded', function() {
        // ...

        // Add an event listener to the form submit button
        const form = document.getElementById('form-sell-product-invoice-details');
        form.addEventListener('submit', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Update the hidden input field with the JSON string of billingItems
            const billingItemsInput = document.getElementById('input-sell-product-invoice-details-billing-items');
            billingItemsInput.value = JSON.stringify(billingItems);

            // Submit the form
            form.submit();
        });
    });
</script>
<script>
    // Get the paid amount and balance input elements
    const paidAmountInput = document.getElementById('input-sell-product-invoice-details-paid-amount');
    const balanceInput = document.getElementById('input-sell-product-invoice-details-balance');

    // Function to update the balance
    function updateBalance() {
        // Get the paid amount value
        const paidAmount = parseFloat(paidAmountInput.value) || 0; // Use 0 if the input is not a valid number

        // Get the total value
        const total = parseFloat(document.getElementById('input-sell-product-invoice-details-total').value) || 0;

        // Calculate the balance
        const balance = paidAmount - total;

        // Update the balance input field
        balanceInput.value = balance.toFixed(2);
    }

    // Add an event listener to the paid amount input
    paidAmountInput.addEventListener('input', updateBalance);

    // Call the function to calculate and display the initial balance
    updateBalance();


    // // Get the paid amount and balance input elements
    // const paidAmountInput = document.getElementById('input-sell-product-invoice-details-paid-amount');
    // const balanceInput = document.getElementById('input-sell-product-invoice-details-balance');

    // // Add an event listener to the paid amount input
    // paidAmountInput.addEventListener('input', function() {
    //     // Get the paid amount value
    //     const paidAmount = parseFloat(paidAmountInput.value) || 0; // Use 0 if the input is not a valid number

    //     // Get the total value
    //     const total = parseFloat(document.getElementById('input-sell-product-invoice-details-total').value) || 0;

    //     // Calculate the balance
    //     const balance = paidAmount - total;

    //     // Update the balance input field
    //     balanceInput.value = balance.toFixed(2);
    // });
</script>

<?php require "../includes/foot.inc.php"; ?>