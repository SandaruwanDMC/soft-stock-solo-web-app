<?php require "../includes/session.inc.php"; ?>

<?php
$page_title = "View Category - Soft Stock Solo Web Application";
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
                            <a href="#" class="nav-link text-white" style="background-color: rgba(255, 255, 255, 0.1);">
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
                    <h1>View Debtor</h1>
                    <form action="../includes/view_debtor.inc.php" method="POST" class="needs-validation mt-5" novalidate>
                        <div class="mb-3 row">
                            <div class="col">
                                <input type="text" class="form-control" id="input-view-debtor-id" name="input-view-debtor-id" hidden>
                                <label for="input-view-debtor-name" class="form-label">Debtor Name</label>
                                <input type="text" class="form-control" id="input-view-debtor-name" name="input-view-debtor-name" placeholder="Debtor Name" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the debtor name.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-view-debtor-nic" class="form-label">NIC Number</label>
                                <input type="text" class="form-control" id="input-view-debtor-nic" name="input-view-debtor-nic" placeholder="National Identity Card Number">
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter debtor NIC number.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col">
                                <label for="input-view-debtor-contact" class="form-label">Contact</label>
                                <input type="text" class="form-control" id="input-view-debtor-contact" name="input-view-debtor-contact" placeholder="Contact" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the debtor contact.
                                </div>
                            </div>
                            <div class="col">
                                <label for="input-view-debtor-address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="input-view-debtor-address" name="input-view-debtor-address" placeholder="Address">
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter the debtor address.
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 my-3" name="view-debtor-submit">Update Debtor</button>
                    </form>
                    <h2 class="mt-5">Available Debtors</h2>
                    <input type="text" id="search-input" class="form-control" placeholder="Search for debtors">
                    <table class="table table-hover table-secondary mt-3" id="product-table">
                        <thead>
                            <tr>
                                <th>Debtor Name</th>
                                <th>NIC Number</th>
                                <th>Contact</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require '../includes/get_debtor.inc.php';

                            if (empty($debtors)) {
                                echo '<tr><td colspan="4" class="text-center">You don\'t have any saved debtor to display here</td></tr>';
                            } else {
                                foreach ($debtors as $debtor) {
                                    echo '<tr class="editable-row" data-debtor-id="' . $debtor['debtor_id'] . '">';
                                    echo '<td class="editable" data-field="debtor_name">' . $debtor['debtor_name'] . '</td>';
                                    echo '<td class="editable" data-field="debtor_nic">' . $debtor['debtor_nic'] . '</td>';
                                    echo '<td class="editable" data-field="debtor_contact">' . $debtor['debtor_contact'] . '</td>';
                                    echo '<td class="editable" data-field="debtor_address">' . $debtor['debtor_address'] . '</td>';
                                    echo '</tr>';
                                }
                            }

                            // if (empty($categories)) {
                            //     echo '<tr><td colspan="4" class="text-center">You don\'t have any saved category to display here</td></tr>';
                            // } else {
                            //     foreach ($categories as $category) {
                            //         echo '<tr class="editable-row" data-category-id="' . $category['category_id'] . '">';
                            //         echo '<td class="editable" data-field="category_name">' . $category['category_name'] . '</td>';
                            //         echo '<td class="editable" data-field="other_info">' . $category['other_info'] . '</td>';
                            //         echo '</tr>';
                            //     }
                            // }
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

        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

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
                url: '../includes/search_debtor.inc.php', // Create this PHP file
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
        const inputDebtorId = document.getElementById('input-view-debtor-id');
        const inputDebtorName = document.getElementById('input-view-debtor-name');
        const inputDebtorNIC = document.getElementById('input-view-debtor-nic');
        const inputDebtorContact = document.getElementById('input-view-debtor-contact');
        const inputDebtorAddress = document.getElementById('input-view-debtor-address');

        productTable.addEventListener('click', function(event) {
            if (event.target.closest('.editable-row')) {
                const row = event.target.closest('.editable-row');
                const debtorID = row.getAttribute('data-debtor-id');
                const debtorName = row.querySelector('[data-field="debtor_name"]').textContent;
                const debtorNIC = row.querySelector('[data-field="debtor_nic"]').textContent;
                const debtorContact = row.querySelector('[data-field="debtor_contact"]').textContent;
                const debtorAddress = row.querySelector('[data-field="debtor_address"]').textContent;

                inputDebtorId.value = debtorID;
                inputDebtorName.value = debtorName;
                inputDebtorNIC.value = debtorNIC;
                inputDebtorContact.value = debtorContact;
                inputDebtorAddress.value = debtorAddress;
            }
        });
    });
</script>


<?php require "../includes/foot.inc.php"; ?>