<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Modal - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Load Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php
// Include the database configuration file
include '../config.php';
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Initialize variables to hold values from POST request
$customer_mob = $_POST["customer-mob"];
$customer_name = $_POST["customer-name"];
$customer_add = $_POST["customer-add"];
$btnbill = $_POST["bill-no"];
$refbill = $_POST["ref-bill-no"];
$ammount = $_POST["total-amount"];
$subtotal = $_POST["subtotal"];
$cgst = $_POST["cgst"];
$sgst = $_POST["sgst"] ;
$billdate = $_POST["bill-date"];
$cpu_make = $_POST["cpu-make"];
$cpu_model = $_POST["cpu-model"];
$cpu_hsn = $_POST["cpu-hsn"];
$cpu_warranty_exp = $_POST["cpu-warranty-exp"];
$motherboard_make = $_POST["motherboard-make"];
$motherboard_model = $_POST["motherboard-model"];
$motherboard_hsn = $_POST["motherboard-hsn"];
$motherboard_warranty_exp = $_POST["motherboard-warranty-exp"];
$hard_disk_make = $_POST["hard-disk-make"];
$hard_disk_model = $_POST["hard-disk-model"];
$hard_disk_hsn = $_POST["hard-disk-hsn"];
$hard_disk_warranty_exp = $_POST["hard-disk-warranty-exp"];
$ssd_make = $_POST["ssd-make"];
$ssd_model = $_POST["ssd-model"];
$ssd_hsn = $_POST["ssd-hsn"];
$ssd_warranty_exp = $_POST["ssd-warranty-exp"];
$ram_make = $_POST["ram-make"];
$ram_model = $_POST["ram-model"];
$ram_hsn = $_POST["ram-hsn"];
$ram_warranty_exp = $_POST["ram-warranty-exp"];
$smps_make = $_POST["smps-make"];
$smps_model = $_POST["smps-model"];
$smps_hsn = $_POST["smps-hsn"];
$smps_warranty_exp = $_POST["smps-warranty-exp"];
$monitor_make = $_POST["monitor-make"];
$monitor_model = $_POST["monitor-model"];
$monitor_hsn = $_POST["monitor-hsn"];
$monitor_warranty_exp = $_POST["monitor-warranty-exp"];
$keyboard_make = $_POST["keyboard-make"];
$keyboard_model = $_POST["keyboard-model"];
$keyboard_hsn = $_POST["keyboard-hsn"];
$keyboard_warranty_exp = $_POST["keyboard-warranty-exp"];
$mouse_make = $_POST["mouse-make"];
$mouse_model = $_POST["mouse-model"];
$mouse_hsn = $_POST["mouse-hsn"];
$mouse_warranty_exp = $_POST["mouse-warranty-exp"];
$ups_make = $_POST["ups-make"];
$ups_model = $_POST["ups-model"];
$ups_hsn = $_POST["ups-hsn"];
$ups_warranty_exp = $_POST["ups-warranty-exp"];
$printer_make = $_POST["printer-make"];
$printer_model = $_POST["printer-model"];
$printer_hsn = $_POST["printer-hsn"];
$printer_warranty_exp = $_POST["printer-warranty-exp"];
$gcard_make = $_POST["gcard-make"];
$gcard_model = $_POST["gcard-model"];
$gcard_hsn = $_POST["gcard-hsn"];
$gcard_warranty_exp = $_POST["gcard-warranty-exp"];


// CPU
$cpu_serial = $_POST["cpu-serial"];
$cpu_amount = $_POST["cpu-amount"];
$cpu_rate = $_POST["cpu-rate"];
$cpu_qty = $_POST["cpu-qty"];

// Motherboard
$motherboard_serial = $_POST["motherboard-serial"];
$motherboard_amount = $_POST["motherboard-amount"];
$motherboard_rate = $_POST["motherboard-rate"];
$motherboard_qty = $_POST["motherboard-qty"];

// Hard Disk
$hard_disk_serial = $_POST["hard-disk-serial"];
$hard_disk_amount = $_POST["hard-disk-amount"];
$hard_disk_rate = $_POST["hard-disk-rate"];
$hard_disk_qty = $_POST["hard-disk-qty"];

// SSD
$ssd_serial = $_POST["ssd-serial"];
$ssd_amount = $_POST["ssd-amount"];
$ssd_rate = $_POST["ssd-rate"];
$ssd_qty = $_POST["ssd-qty"];

// RAM
$ram_serial = $_POST["ram-serial"];
$ram_amount = $_POST["ram-amount"];
$ram_rate = $_POST["ram-rate"];
$ram_qty = $_POST["ram-qty"];

// SMPS
$smps_serial = $_POST["smps-serial"];
$smps_amount = $_POST["smps-amount"];
$smps_rate = $_POST["smps-rate"];
$smps_qty = $_POST["smps-qty"];

// Monitor
$monitor_serial = $_POST["monitor-serial"];
$monitor_amount = $_POST["monitor-amount"];
$monitor_rate = $_POST["monitor-rate"];
$monitor_qty = $_POST["monitor-qty"];

// Keyboard
$keyboard_serial = $_POST["keyboard-serial"];
$keyboard_amount = $_POST["keyboard-amount"];
$keyboard_rate = $_POST["keyboard-rate"];
$keyboard_qty = $_POST["keyboard-qty"];

// Mouse
$mouse_serial = $_POST["mouse-serial"];
$mouse_amount = $_POST["mouse-amount"];
$mouse_rate = $_POST["mouse-rate"];
$mouse_qty = $_POST["mouse-qty"];

// UPS
$ups_serial = $_POST["ups-serial"];
$ups_amount = $_POST["ups-amount"];
$ups_rate = $_POST["ups-rate"];
$ups_qty = $_POST["ups-qty"];

// Printer
$printer_serial = $_POST["printer-serial"];
$printer_amount = $_POST["printer-amount"];
$printer_rate = $_POST["printer-rate"];
$printer_qty = $_POST["printer-qty"];

// Graphics Card
$gcard_serial = $_POST["gcard-serial"];
$gcard_amount = $_POST["gcard-amount"];
$gcard_rate = $_POST["gcard-rate"];
$gcard_qty = $_POST["gcard-qty"];

// Pen Drive
$pendrive_serial = $_POST["pendrive-serial"];
$pendrive_amount = $_POST["pendrive-amount"];
$pendrive_rate = $_POST["pendrive-rate"];
$pendrive_qty = $_POST["pendrive-qty"];

// Router
$router_serial = $_POST["router-serial"];
$router_amount = $_POST["router-amount"];
$router_rate = $_POST["router-rate"];
$router_qty = $_POST["router-qty"];
$addhard1_serial = $_POST["addhard1-serial"];
$addhard1_amount = $_POST["addhard1-amount"];
$addhard1_rate = $_POST["addhard1-rate"];
$addhard1_qty = $_POST["addhard1-qty"];

$addhard2_serial = $_POST["addhard2-serial"];
$addhard2_amount = $_POST["addhard2-amount"];
$addhard2_rate = $_POST["addhard2-rate"];
$addhard2_qty = $_POST["addhard2-qty"];

$keymouse_serial = $_POST["keymouse-serial"];
$keymouse_amount = $_POST["keymouse-amount"];
$keymouse_rate = $_POST["keymouse-rate"];
$keymouse_qty = $_POST["keymouse-qty"];
// Check if the first 5 columns have values
if(empty($customer_mob) || empty($customer_name) || empty($btnbill) || empty($refbill) || empty($ammount)) {
    // Display an error
} else {
// SQL query to insert data into pcinsmain table
$sql = "INSERT INTO pcinsmain (customer_mob, customer_name, btnbill, refbill, ammount, 
    CPU_make, CPU_model, CPU_hsn, CPU_warranty_exp, 
    motherboard_make, motherboard_model, motherboard_hsn, motherboard_warranty_exp, 
    hard_disk_make, hard_disk_model, hard_disk_hsn, hard_disk_warranty_exp, 
    ssd_make, ssd_model, ssd_hsn, ssd_warranty_exp, 
    ram_make, ram_model, ram_hsn, ram_warranty_exp, 
    smps_make, smps_model, smps_hsn, smps_warranty_exp, 
    monitor_make, monitor_model, monitor_hsn, monitor_warranty_exp, 
    keyboard_make, keyboard_model, keyboard_hsn, keyboard_warranty_exp, 
    mouse_make, mouse_model, mouse_hsn, mouse_warranty_exp, 
    ups_make, ups_model, ups_hsn, ups_warranty_exp, 
    printer_make, printer_model, printer_hsn, printer_warranty_exp, 
    gcard_make, gcard_model, gcard_hsn, gcard_warranty_exp, 
cpu_serial, cpu_amount, cpu_rate, cpu_qty, motherboard_serial, 
motherboard_amount, motherboard_rate, motherboard_qty, hard_disk_serial, 
hard_disk_amount, hard_disk_rate, hard_disk_qty, ssd_serial, ssd_amount, 
ssd_rate, ssd_qty, ram_serial, ram_amount, ram_rate, ram_qty, smps_serial, 
smps_amount, smps_rate, smps_qty, monitor_serial, monitor_amount, monitor_rate,
 monitor_qty, keyboard_serial, keyboard_amount, keyboard_rate, keyboard_qty,
  mouse_serial, mouse_amount, mouse_rate, mouse_qty, ups_serial, ups_amount, 
  ups_rate, ups_qty, printer_serial, printer_amount, printer_rate, printer_qty,
   gcard_serial, gcard_amount, gcard_rate, gcard_qty, pendrive_serial, pendrive_amount, 
   pendrive_rate, pendrive_qty, router_serial, router_amount, router_rate, router_qty,
    addhard1_serial, addhard1_amount, addhard1_rate, addhard1_qty, addhard2_serial,
     addhard2_amount, addhard2_rate, addhard2_qty, keymouse_serial, keymouse_amount,
      keymouse_rate, keymouse_qty , subtotal , cgst , sgst, billdate) 
    VALUES ('$customer_mob', '$customer_name', '$btnbill', '$refbill', '$ammount', 
    '$cpu_make', '$cpu_model', '$cpu_hsn', '$cpu_warranty_exp', 
    '$motherboard_make', '$motherboard_model', '$motherboard_hsn', '$motherboard_warranty_exp', 
    '$hard_disk_make', '$hard_disk_model', '$hard_disk_hsn', '$hard_disk_warranty_exp', 
    '$ssd_make', '$ssd_model', '$ssd_hsn', '$ssd_warranty_exp', 
    '$ram_make', '$ram_model', '$ram_hsn', '$ram_warranty_exp', 
    '$smps_make', '$smps_model', '$smps_hsn', '$smps_warranty_exp', 
    '$monitor_make', '$monitor_model', '$monitor_hsn', '$monitor_warranty_exp', 
    '$keyboard_make', '$keyboard_model', '$keyboard_hsn', '$keyboard_warranty_exp', 
    '$mouse_make', '$mouse_model', '$mouse_hsn', '$mouse_warranty_exp', 
    '$ups_make', '$ups_model', '$ups_hsn', '$ups_warranty_exp', 
    '$printer_make', '$printer_model', '$printer_hsn', '$printer_warranty_exp', 
    '$gcard_make', '$gcard_model', '$gcard_hsn', '$gcard_warranty_exp', '$cpu_serial',
     '$cpu_amount', '$cpu_rate', '$cpu_qty', '$motherboard_serial', '$motherboard_amount', 
     '$motherboard_rate', '$motherboard_qty', '$hard_disk_serial', '$hard_disk_amount', '$hard_disk_rate', 
     '$hard_disk_qty', '$ssd_serial', '$ssd_amount', '$ssd_rate', '$ssd_qty', '$ram_serial', '$ram_amount',
      '$ram_rate', '$ram_qty', '$smps_serial', '$smps_amount', '$smps_rate', '$smps_qty', '$monitor_serial', 
      '$monitor_amount', '$monitor_rate', '$monitor_qty', '$keyboard_serial', '$keyboard_amount', '$keyboard_rate', 
      '$keyboard_qty', '$mouse_serial', '$mouse_amount', '$mouse_rate', '$mouse_qty', '$ups_serial', '$ups_amount',
       '$ups_rate', '$ups_qty', '$printer_serial', '$printer_amount', '$printer_rate', '$printer_qty', '$gcard_serial', 
       '$gcard_amount', '$gcard_rate', '$gcard_qty', '$pendrive_serial', '$pendrive_amount', '$pendrive_rate', '$pendrive_qty', 
       '$router_serial', '$router_amount', '$router_rate', '$router_qty', '$addhard1_serial', '$addhard1_amount', '$addhard1_rate', 
       '$addhard1_qty', '$addhard2_serial', '$addhard2_amount', '$addhard2_rate', '$addhard2_qty', '$keymouse_serial', '$keymouse_amount', 
       '$keymouse_rate', '$keymouse_qty' ,  '$subtotal', '$cgst', '$sgst' , '$billdate')";


if(mysqli_query($link, $sql)){

?>

<style>
    @page {
        size: auto;
        margin: 0mm;
    }

    body {
        background: #eee;
        margin-top: 0;
        padding: 0;
    }

    .text-danger strong {
        color: #9f181c;
    }

    .receipt-main {
        background: #ffffff none repeat scroll 0 0;
        border-bottom: 12px solid #333333;
        border-top: 12px solid #9f181c;
        /* margin-top: 50px; */
        /* margin-bottom: 50px; */
        padding: 40px 30px !important;
        position: relative;
        box-shadow: 0 1px 21px #acacac;
        color: #333333;
        font-family: open sans;
    }

    .receipt-main p {
        color: #333333;
        font-family: open sans;
        line-height: 1.42857;
    }

    .receipt-footer h1 {
        font-size: 15px;
        font-weight: 400 !important;
        margin: 0 !important;
    }

    .receipt-main::after {
        background: #414143 none repeat scroll 0 0;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        right: 0;
        top: -13px;
    }

    .receipt-main thead {
        background: #414143 none repeat scroll 0 0;
    }

    .receipt-main thead th {
        color: #fff;
    }

    .receipt-right h5 {
        font-size: 18px;
        font-weight: bolder;
        margin: 0 0 5px 0;
        color: navy;
    }

    .receipt-right p {
        font-size: 12px;
        margin: 0px;
    }

    .receipt-right p i {
        text-align: center;
        width: 18px;
        
    }

    .receipt-main td {
        padding: 3px 8px !important;
    }

    .term td {
        padding: 0px 5px !important;
    }
    .term table {
         width: 100%;
    }
    .term thead th {
        font-size: 10px;
        font-weight: initial !important;
    }
    .bill p{
        padding: 0;
        margin: 0;
        color: #9f181c;
    }
    .term tbody td {
        font-size: 10px;
        font-weight: initial !important;
    }

    .receipt-main th {
        padding: 0px 10px !important;
    }

    .receipt-main td {
        font-size: 10px;
        font-weight: initial !important;
    }

    .receipt-main td p:last-child {
        margin: 0;
        padding: 0;
    }

    .receipt-main td h2 {
        font-size: 15px;
        font-weight: 900;
        margin: 0;
        text-transform: uppercase;
    }

    #container {
        background-color: #dcdcdc;
    }
    </style>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#InkPrint').click(function() {
            window.print();
        });
    });
    </script>
</head>

<body>




    <div class="col-md-12">
        <div class="row">

            <div class="receipt-main col-md-8">
                <div class="row align-items-center">
                    <!-- <div class="receipt-header"> -->

                    <div class="col-4 text-left">
                        <div class="receipt-right">
                            <h5>Address</h5>
                            <p>Changghurail, Maju, J.B. Pur</P>
                            <p>Howrah - 711410</P>
                            <p><b>Mobile :</b> +91 9830255838</p>
                            <p><b>Email :</b> info@btntechno.in</p>
                            <p><b>GSTIN :</b> 19CCDPSO725H1ZJ</p>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row align-items-end">
                            <div class="col-2">
                                <div class="receipt-left">
                                    <img class="img-responsive" alt="iamgurdeeposahan" src="photo/logo.jpg"
                                        style="width: 80px;">
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="receipt-right">
                                    <h5>B.T.N TECHNO SOLUTION</h5>

                                    <p>Total IT And CCTV Solution</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="receipt-right">
                            <h5>TAX INVOICE</h5>
                            <p>DATE :</p>
                            <p>INVOICE NO # <?php echo $btnbill ; ?></p>

                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                <hr>

                <div class="row">
                    <!-- <div class="receipt-header receipt-header-mid"> -->
                    <div class="col-md-4 text-left">
                        <div class="receipt-right">
                            <h5>CUSTOMER</h5>
                            <p> <?php echo $customer_name ; ?> </p>
                            <?php echo $customer_add ; ?> 
                            <p><b>Mobile :</b>  <?php echo $customer_mob ; ?> </p>
                            <p><b>Email :</b> info@btntechno.in</p>
                            <p><b>GSTIN :</b> 19CCDPSO725H1ZJ</p>
                        </div>
                    </div>
                    

                    <!-- </div> -->
                </div>
                <hr>

                <div class ="bill">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col-md-6">Description</th>
                                <th>HSN/SAC</th>
                                <th>Warranty</th>
                                <th>QTY</th>
                                <th>RATE</th>
                                <th>AMOUNT</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            <tr>
                                <td>Payment for August 2016</td>
                                <td>ABHDYU</td>
                                <td>12</td>
                                <td>2</td>
                                <td>600</td>
                                <td> 12,00/-</td>
                            </tr>
                            
                          
                            

                            <tr>
                                <td colspan="2">
                                    <p><b>Our Bank Details:</b></p>
                                    <p>BANK OF INDIA</p>
                                    <p><b>A/C No.</b> 428220110000112(CA)</p>
                                    <p><b>IFS CODE:</b> BKID0004282</p>
                                    <p><b>Branch</b> MAJU</p>
                                </td>

                                <td colspan="3" class="text-right">
                                    <p>
                                        <strong>Subtotal Amount: </strong>
                                    
                                    <p>
                                        <strong>CGST 9%: </strong>
                                    </p>
                                    <p>
                                        <strong>SGST 9%: </strong>
                                    </p>
                                    <p>
                                        <strong>Round Off: </strong>
                                    </p>
                                </td>

                                <td>
                                    <p>
                                        <strong> 65,500/-</strong>
                                    </p>
                                    <p>
                                        <strong> 500/-</strong>
                                    </p>
                                    <p>
                                        <strong> 1300/-</strong>
                                    </p>
                                    <p>
                                        <strong>9500/-</strong>
                                    </p>
                                </td>
                            </tr>


                            <tr>

                                <td colspan="5" class="text-right">
                                    <h2><strong>Total: </strong></h2>


                                <td class="text-left text-danger">
                                    <h2><strong> 31.566/-</strong></h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>




                <div class="row">

                    <table>
                        <tr>
                            <td class="col">

                                <div class="term">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>
                                                    * TERMS AND CONDITIONS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Product received in good condition.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Warranty of all items are covered by the principles or by their
                                                    authorised service centeres. We don't have any legal or financial
                                                    liability for the same. Burn or physical damage case no warranty.
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>
                                                    Customer Acceptance (sign):
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </td>

                            <td class="col-6">
                                <h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
                            </td>

                            <td>
                                <div class="receipt-left">
                                    <h4>Stamp</h4>
                                </div>
                            </td>
                        </tr>



                    </table>


                </div>

            </div>
        </div>
    </div>
    <!-- <input type="button" onclick="printDiv('print-content')" value="print a div!"/> -->
    <a href="#" id="InkPrint">Print</a>




    <?php
     
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}
?>



<!-- /   echo '
//               <div class="modal fade show" id="verticalycentered" tabindex="-1" role="dialog">
//                 <div class="modal-dialog modal-dialog-centered" role="document">
//                   <div class="modal-content">
//                     <div class="modal-header">
//                       <h5 class="modal-title">Record added</h5>
//                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
//                     </div>
//                     <div class="modal-body">
//                       Record added successfully click below to add more records. 
//                     </div>
//                     <div class="modal-footer">
//                       <a href="/btnapp/activity.php" button type="button" class="btn btn-primary">Add more</button>
//                     </div>
//                   </div>
//                 </div>
//               </div>
            
//         ';

 
//   <script>
//   $(document).ready(function() {
//     $('#verticalycentered').modal('show');
//   });
// </script> -->