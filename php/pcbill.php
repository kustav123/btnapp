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



// Check if $btnbill already exists
$checkQuery = "SELECT billno FROM btnapp.invoicemain WHERE billno = '$btnbill'";
$checkResult = mysqli_query($link, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    // $btnbill already exists, handle the situation as needed (e.g., display an error message)
    echo "Error: Bill number already exists";
} else {
    $sql = "INSERT INTO btnapp.invoicemain (billno, refbill, cgst, sgst, subtotal, total, castmob, date) VALUES ('$btnbill', '$refbill', '$cgst', '$sgst', '$subtotal', '$ammount', '$customer_mob', '$date')";
    $sql3 = "UPDATE invoice SET num = num + 1 WHERE type = 'T'";
    mysqli_query($link, $sql3);

    if(mysqli_query($link, $sql)){
        $list = json_decode($_POST['list'], true); // decode the JSON string into an array
        // print_r($list);
        foreach($list as $row) {
               $pid = $row['id'];
                $code = $row['code'];
                $pmake = $_POST["$code-make"];
            
            if (!empty($pmake)){
                // echo 'dddd';

                $pmodel = $_POST["$code-model"];
                $prosn = $_POST["$code-serial"];
                $proqty = $_POST["$code-qty"];
                $proamm = $_POST["$code-amount"];
                $prowarr = $_POST["$code-warranty-exp"];
                $prohsn = $_POST["$code-hsn"];
                // $subtotal = $_POST["$code-subtotal"];
                // $procgst = $_POST["$code-cgst"];
                // $prosgst = $_POST["$code-sgst"];
                $prorate = $_POST["$code-rate"];

                $sql2 = "INSERT INTO btnapp.billpc
                (castmob, btnbill, date , product_id, promake, promod, prosn, proqty, prorate, prowarrenty, prohsn, proammount)
                VALUES('$customer_mob', '$btnbill' , '$date', '$pid', '$pmake', '$pmodel', '$prosn', '$proqty', '$prorate',  DATE_FORMAT(DATE_ADD(CURDATE(), INTERVAL 36 MONTH), '%Y-%m-%d'), ' $prohsn', '$proamm');";
                
                mysqli_query($link, $sql2);


                }
        }
    }
}
}