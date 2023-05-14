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

// first it will genarate the bill (in.php) file thedn if clicked subit tyhen insert 
// step  1 insert on invoicemain 
// step 2 insert all product on invoice
// step update bill nouber on bill pc
include '../config.php';
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
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
$castid = $_POST["castid"]; 
$date =  $_POST["bill-date"];

$sql="INSERT INTO btnapp.invoicemain
( billno, refbill, cgst, sgst, subtotal, total)
VALUES( '$btnbill', '$refbill', '$cgst', '$sgst', '$subtotal', '$ammount');
;"
if(mysqli_query($link, $sql)){

    $list = json_decode($_POST['list'], true); // decode the JSON string into an array
    foreach($list as $row) {
        $pid = $row[0] ; 
        $code = $row[1] ;
        $pmake = $_POST["$code-make"];

        /// if $pmake !isempty 
        $pmodel = $_POST["$code-model"];
        $prosn = $_POST["$code-serial"];
        $proqty = $_POST["$code-qty"];
        $proamm = $_POST["$code-amount"];
        $prowarr = $_POST["$code-warranty-exp"];
        $prohsn = $_POST["$code-hsn"];
        $subtotal = $_POST["$code-subtotal"];
        $procgst = $_POST["$code-cgst"];
        $prosgst = $_POST["$code-sgst"];


   //


        $sql2 = "INSERT INTO btnapp.billpc
        (castid, , btnbill, `date`, product_id, promake, promod, prosn, proqty, proammount, prowarrenty, prohsn, subtota, cgst, sgst, total)
        VALUES('$castid',  '$btnbill', '$date', '$pid', '$pmake', '$pmodel', '$prosn', '$proqty', ' DATE_FORMAT(DATE_ADD(CURDATE(), INTERVAL $prowarr MONTH), '%Y-%m-%d')',
         '$prohsn', '$subtotal', '$procgst', '', '', '');"
    }
}
}