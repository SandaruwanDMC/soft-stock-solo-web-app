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
                            <a href="#" class="nav-link text-white" style="background-color: rgba(255, 255, 255, 0.1);">
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