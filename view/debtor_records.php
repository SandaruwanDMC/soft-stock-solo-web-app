<?php require "../includes/session.inc.php"; ?>

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
                            <a href="#" class="nav-link text-white">
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
                            <a href="#" class="nav-link text-white" style="background-color: rgba(255, 255, 255, 0.1);">
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
            <div class="col">
                <div class="container mt-4">
                    <h1>Lend Product</h1>
                    <form action="../includes/debtor_records.inc.php" method="POST" class="needs-validation mt-5" novalidate>
                        <div class="mb-3 row">
                            <div class="col">
                                <input type="text" class="form-control" id="input-debtor-records-debtor-record-id" name="input-debtor-records-debtor-record-id" hidden>
                                <label for="input-debtor-records-debtor-name" class="form-label">Debtor Name</label>
                                <input type="text" class="form-control" id="input-debtor-records-debtor-name" name="input-debtor-records-debtor-name" placeholder="Debtor Name" required disabled>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the debtor name.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col">
                                <label for="input-debtor-records-invoice-id" class="form-label">Invoice Number</label>
                                <input type="text" class="form-control" id="input-debtor-records-invoice-id" name="input-debtor-records-invoice-id" placeholder="Invoice Number" readonly required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the invoice number.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-debtor-records-total-amount" class="form-label">Total Amount</label>
                                <input type="text" class="form-control" id="input-debtor-records-total-amount" name="input-debtor-records-total-amount" placeholder="Total Amount" readonly required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the total amount.
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 my-3" name="debtor-records-submit">Mark as Paid</button>
                    </form>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyInputs") {
                    ?>
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    Empty inputs cannot be accepted.
                                </div>
                            </div>
                        <?php
                        } else if ($_GET["error"] == "invoiceIdExist") {
                        ?>
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    This invoice is assigned to the selected debtor or someone else.
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <div class="mb-3 row">
                        <div class="col">
                            <h2 class="mt-5">Available Debtor Records</h2>
                            <input type="text" id="search-input" class="form-control" placeholder="Search for debtors">
                            <table class="table table-hover table-secondary mt-3" id="debtor-records-table">
                                <thead>
                                    <tr>
                                        <th>Debtor Name</th>
                                        <th>NIC</th>
                                        <th>Invoice Number</th>
                                        <th>Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Use PHP to fetch categories from the database and loop through them
                                    // Example code assumes you have a $categories array
                                    require '../includes/get_debtor_records.inc.php';

                                    if (empty($debtorRecords)) {
                                        echo '<tr><td colspan="4" class="text-center">You don\'t have any saved debtor to display here</td></tr>';
                                    } else {
                                        foreach ($debtorRecords as $debtorRecord) {
                                            echo '<tr class="editable-row" data-debtor-record-id="' . $debtorRecord['debtor_record_id'] . '">';
                                            echo '<td class="editable" data-field="debtor_name">' . $debtorRecord['debtor_name'] . '</td>';
                                            echo '<td class="editable" data-field="debtor_nic">' . $debtorRecord['debtor_nic'] . '</td>';
                                            echo '<td class="editable" data-field="invoice_id">' . $debtorRecord['invoice_id'] . '</td>';
                                            echo '<td class="editable" data-field="total_amount">' . $debtorRecord['total_amount'] . '</td>';
                                            echo '</tr>';
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="col">
                            <h2 class="mt-5">Latest Invoices</h2>
                            <table class="table table-hover table-secondary mt-3" id="invoice-table">
                                <thead>
                                    <tr>
                                        <th>Invoice Number</th>
                                        <th>Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Use PHP to fetch categories from the database and loop through them
                                    // Example code assumes you have a $categories array
                                    // require '../includes/get_latest_invoices.inc.php';

                                    // if (empty($invoices)) {
                                    //     echo '<tr><td colspan="2" class="text-center">You don\'t have any invoices to display here</td></tr>';
                                    // } else {
                                    //     foreach ($invoices as $invoice) {
                                    //         echo '<tr class="editable-row">';
                                    //         echo '<td class="editable" data-field="invoice_id">' . $invoice['invoice_id'] . '</td>';
                                    //         echo '<td class="editable" data-field="invoice_id">' . $invoice['invoice_id'] . '</td>';
                                    //         echo '<td class="editable" data-field="invoice_id">' . $invoice['invoice_id'] . '</td>';
                                    //         echo '<td class="editable" data-field="total_amount">' . $invoice['total_amount'] . '</td>';
                                    //         echo '</tr>';
                                    //     }
                                    // }
                                    ?>
                                </tbody>
                            </table>
                        </div> -->
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
                url: '../includes/search_debtor_records.inc.php', // Create this PHP file
                data: {
                    search: searchQuery
                },
                success: function(response) {
                    // Update the product table with the search results
                    $('#debtor-records-table').html(response);
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const debtorRecordsTable = document.getElementById('debtor-records-table');
        const inputDebtorRecordId = document.getElementById('input-debtor-records-debtor-record-id');
        const inputDebtorName = document.getElementById('input-debtor-records-debtor-name');
        const inputInvoiceNumber = document.getElementById('input-debtor-records-invoice-id');
        const inputTotalAmount = document.getElementById('input-debtor-records-total-amount');

        debtorRecordsTable.addEventListener('click', function(event) {
            if (event.target.closest('.editable-row')) {
                const row = event.target.closest('.editable-row');
                const debtorRecordID = row.getAttribute('data-debtor-record-id');
                const debtorName = row.querySelector('[data-field="debtor_name"]').textContent;
                const invoiceNumber = row.querySelector('[data-field="invoice_id"]').textContent;
                const totalAmount = row.querySelector('[data-field="total_amount"]').textContent;


                inputDebtorRecordId.value = debtorRecordID;
                inputDebtorName.value = debtorName;
                inputInvoiceNumber.value = invoiceNumber;
                inputTotalAmount.value = totalAmount;
            }
        });
    });
</script>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const invoiceTable = document.getElementById('invoice-table');
        const inputInvoiceId = document.getElementById('input-debtor-records-invoice-id');
        const inputTotalAmount = document.getElementById('input-debtor-records-total-amount');

        invoiceTable.addEventListener('click', function(event) {
            if (event.target.closest('.editable-row')) {
                const row = event.target.closest('.editable-row');
                const invoiceId = row.querySelector('[data-field="invoice_id"]').textContent;
                const totalAmount = row.querySelector('[data-field="total_amount"]').textContent;

                inputInvoiceId.value = invoiceId;
                inputTotalAmount.value = totalAmount;
            }
        });
    });
</script> -->

<?php require "../includes/foot.inc.php"; ?>