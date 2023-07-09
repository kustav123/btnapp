<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="./css/bill.css">
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Template Main CSS File -->
    <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#InkPrint').click(function() {
            $.ajax({
                url: 'php/pcbill.php',
                type: 'post',
                dataType: 'application/json',
                data: <?=json_encode($_POST); ?>,
                success: function(data) {console.log(data)},
                error: function(data){console.log(data)}
            });
            window.print();
        });
    });
    </script> -->
</head>

<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


include 'config.php';
$bill = trim($_GET["bill"]) ;


$sql1= "select c.name , c.mob , c.email , c.address , c.gstno ,  i.billno , i.cgst , i.sgst , i.subtotal , i.total , i.date from clientmain c  , invoicemain i where i.billno = '$bill' and i.castmob = c.mob";
$sql2= "SELECT * FROM billpc where btnbill = '$bill'";


if($result = mysqli_query($link, $sql1)){
    if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_array($result)){
        $customer_name = $row['name'];
        $customer_mob = $row['mob'];
        $customer_email = $row['email'];
        $customer_add = $row['address'];
        $btnbill = $row['billno'];
        $cgst = $row['cgst'];
        $sgst = $row['sgst'];
        $subtotal = $row['subtotal'];
        $total = $row['total'];
        $billdate = $row['date'];
        $customer_gst = $row['gstno'];

       };
    };
};

   
?>


<body>
    <div class="col-md-12">
        <div class="row">
            <div class="receipt-main col-md-8">
                <div class="row align-items-center">
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
                                    <img class="img-responsive" alt="" src="photo/logo.jpg" style="width: 80px;">
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
                            <p>DATE : <?=(isset($billdate)) ? $billdate  :''; ?></p>
                            <p>BILL NO # <?=(isset($btnbill)) ? $btnbill  :''; ?></p>
                            <!-- <p>REFERANCE BILL NO # <?=(isset($refbill)) ? $refbill  :''; ?></p> -->
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-4 text-left">
                        <div class="receipt-right">
                            <h5>CUSTOMER</h5>
                            <p><?=(isset($customer_name)) ? $customer_name  :''; ?></P>
                            <p><?=(isset($customer_add)) ? $customer_add  :''; ?></P>
                            <p><b>Mobile :</b> <?=(isset($customer_mob)) ? $customer_mob  :''; ?></p> 
                            <p><b>Email :</b> <?=(isset($customer_email)) ? $customer_email  :''; ?></p> 
                            <p><b>GSTIN :</b> <?=(isset($customer_gst)) ? $customer_gst  :''; ?></p>
                        </div>
                    </div>
                </div>
                <hr>

                <div class ="bill">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col-md-6">Description</th>
                                <th>HSN/SAC</th>
                                <!-- <th>Warranty</th> -->
                                <th>QTY</th>
                                <th>RATE</th>
                                <th>AMOUNT</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($result = mysqli_query($link, $sql2)){
                                    if(mysqli_num_rows($result) > 0){
                                       while($row = mysqli_fetch_array($result)){
                                        echo "<tr class='product-tr'>
                                            <td>{$row['promake']} - {$row['promod']} , SN. - {$row['prosn']}</td> 
                                            <td>{$row['prohsn']}</td>
                                            <td>{$row['proqty']}</td>
                                            <td>{$row['prorate']}</td>
                                            <td>{$row['proammount']}</td>
                                        </tr>";
                                       
                                       };
                                    };
                                };

                                // $list = json_decode($_POST['list']);
                                // $emptyCount = 0;
                                // foreach($list as $row) {                                    
                                //     $pid = $row->id; 
                                //     $code = $row->code;
                                //     $pmake = $_POST["$code-make"];
                                //     if (!empty($pmake)){
                                //         echo "<tr class='product-tr'>
                                //             <td>{$pmake} - {$_POST["$code-model"]} , SN. - {$_POST["$code-serial"]}</td> 
                                //             <td>{$_POST["$code-hsn"]}</td>
                                //             <!--  <td>{$_POST["$code-warranty-exp"]}</td> -->
                                //             <td>{$_POST["$code-qty"]}</td>
                                //             <td>{$_POST["$code-rate"]}</td>
                                //             <td> {$_POST["$code-amount"]}/-</td>
                                //         </tr>";
                                //     }else{
                                //         $emptyCount++;
                                //     }
                                // }
                                // for ($i=0; $i < $emptyCount; $i++) { 
                                //     echo "<tr class='product-tr'>
                                //         <td></td>
                                //         <td></td>
                                //         <!-- <td></td> -->
                                //         <td></td>
                                //         <td></td>
                                //         <td></td>
                                //     </tr>";
                                // }
                            ?> 
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
                                        <strong> <?=(isset($subtotal)) ? $subtotal : 0; ?>/-</strong>
                                    </p>
                                    <p>
                                        <strong>  <?=(isset($cgst)) ? $cgst : 0; ?>/-</strong>
                                    </p>
                                    <p>
                                        <strong>  <?=(isset($sgst)) ? $sgst : 0; ?>/-</strong>
                                    </p>
                                    <p>
                                        <strong><?=(isset($ammount)) ? $ammount : 0; ?>/-</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="5" class="text-right">
                                    <h2><strong>Total: </strong></h2>

                                <td class="text-left text-danger">
                                    <h2><strong> <?=(isset($ammount)) ? $ammount : 0; ?>/-</strong></h2>
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
    <button class="btn btn-primary" id="InkPrint">Print & Save</a>
    <button class="btn btn-primary ml-5" id="btnCancel" style="margin-left:10px">Cancel</a>
</body>


</html>

<script>
    $(function() {
        $("#btnCancel").click(function() {            
            window.location.href = "activity.php";
        });
    });
</script>