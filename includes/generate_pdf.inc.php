<?php
require "../includes/session.inc.php";
require_once '../tcpdf/tcpdf.php';
require "../includes/dbh.inc.php";
require "../model/view_profit_details_model.php";;

if (isset($_POST['view-profit-details-print-pdf-submit'])) {
    // Create new PDF document
    $pdf = new TCPDF();

    date_default_timezone_set('Asia/Colombo');

    $date = new DateTime();
    $currentDate = $date->format('Y-m-d h:i:s A T');

    // Set document information
    $pdf->SetCreator('Soft Stock Solo');
    $pdf->SetAuthor('Soft Stock Solo System');
    $pdf->SetTitle('Profit Details Report');
    $pdf->SetSubject('Profit Details PDF');

    // Add a page
    $pdf->AddPage();

    $pdf->SetFont('helvetica', 'B', 30);
    $pdf->Cell(0, 10, 'Soft Stock Solo Profit Report', 0, 1, 'C');
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
    $pdf->SetFont('helvetica', '', 10);
    $pdf->Cell(0, 10, 'Generated On: ' . $currentDate, 0, 1, 'R');
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
    $pdf->Ln();
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 10, 'Total Profit of Last 30 Days: Rs. ' . $totalProfit, 0, 1);
    $pdf->Cell(0, 10, 'Total Debts to be Recovered: Rs. ' . $totalDebt, 0, 1);
    $pdf->Cell(0, 10, 'Total Items Sold in Last 30 Days: ' . $itemCount, 0, 1);
    $pdf->Ln();

    $html = '
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
<div class="mb-3 row">
    <div class="col">
        <h2 class="mt-4">Best Selling Products by Profit</h2>
        <table class="table table-hover table-secondary mt-2">
            <thead>
                <tr>
                    <th style="background-color: #96D4D4;">Product Name</th>
                    <th style="background-color: #96D4D4;">Total Profit</th>
                </tr>
            </thead>
            <tbody>';

    require '../includes/get_best_selling_product_by_profit.inc.php';

    // Add table rows from your PHP code
    foreach ($products as $product) {
        $html .= '<tr><td>' . $product['product_name'] . '</td><td>Rs. ' . $product['total_profit'] . '</td></tr>';
    }

    // Close the table and container
    $html .= '</tbody></table></div></div>';

    // Output the HTML using writeHTML
    $pdf->writeHTML($html, true, false, true, false, '');

    // Add a page break to start the next table on a new page
    // $pdf->AddPage();

    $html = '
    <style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
      }
    </style>
<div class="mb-3 row">
    <div class="col">
        <h2 class="mt-4">Best Selling Products by Quantity</h2>
        <table class="table table-hover table-secondary mt-2">
            <thead>
                <tr>
                    <th style="background-color: #96D4D4;">Product Name</th>
                    <th style="background-color: #96D4D4;">Item Count</th>
                </tr>
            </thead>
            <tbody>';

    require '../includes/get_best_selling_product_by_quantity.inc.php';

    // Add table rows from your PHP code
    foreach ($products as $product) {
        $html .= '<tr><td>' . $product['product_name'] . '</td><td>' . $product['total_quantity_sold'] . '</td></tr>';
    }

    // Close the table and container
    $html .= '</tbody></table></div></div>';

    // Output the HTML using writeHTML
    $pdf->writeHTML($html, true, false, true, false, '');
    // Add other content as needed

    $pdf->SetFont('helvetica', 'B', 8);
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
    $pdf->Cell(0, 10, 'This is a system generated report...', 0, 1, 'L');
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

    // Output the PDF to the browser
    $pdf->Output('profit_details '.$currentDate.'.pdf', 'I');
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_profit_details.php");
    exit();
}
