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

   

    <script type="text/javascript">
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
    </script>
</head>


<?php
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
?>


<body>
    <div id="main">
        <div id="bill_body">
            <div id="billHead">
                <div id="logoName">
                   <div id="logo">
                      <img src="./photo/logo.jpg" alt="">
                   </div>
                   <div id="brandname">
                       <h1>B.T.N TECHNO SOLUTION</h1>
                       <h5>Total IT And CCTV Solution</h5>
                   </div>
                </div>
                <div id="inDetail">
                    <div id="invoice">
                    <h5>TAX INVOICE</h5>
                    <p>DATE : <?=(isset($billdate)) ? $billdate  :''; ?></p>
                    <p>BILL NO # <?=(isset($btnbill)) ? $btnbill  :''; ?></p>
                    <p>REFERANCE BILL NO # <?=(isset($refbill)) ? $refbill  :''; ?></p>
                    </div>
                    </div>
            </div>
            <div id="headstrap">
                <p>Invoice</p>
            </div>
            <div id="address">
                <div id="customer">
                            <h5>CUSTOMER</h5>
                            <p><span>Name :</span><?=(isset($customer_name)) ? $customer_name  :''; ?></P>
                            <p><span>Address :</span><?=(isset($customer_add)) ? $customer_add  :''; ?></P>
                            <p><span>Mobile :</span><?=(isset($customer_mob)) ? $customer_mob  :''; ?></p>
                            <p><span>Email :</span><?=(isset($customer_email)) ? $customer_email  :''; ?></p>
                            <p><span>GSTIN :</span><?=(isset($customer_gst)) ? $customer_gst  :''; ?></p>
                </div>
                <div id="owner">
                            <h5>Address</h5>
                            <p>Changghurail, Maju, J.B. Pur</P>
                            <p>Howrah - 711410</P>
                            <p><span>Mobile :</span>+91 9830255838</p>
                            <p><span>Email :</span>info@btntechno.in</p>
                            <p><span>GSTIN :</span>19CCDPSO725H1ZJ</p>
                </div>
            </div>
            <div id="tablediv">
            <table>
                 <thead>
                        <tr>
                                <th class="col-md-6">Description</th>
                                <th>HSN/SAC</th>
                                <th>QTY</th>
                                <th>RATE</th>
                                <th>AMOUNT</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $list = json_decode($_POST['list']);
                                $emptyCount = 0;
                                foreach($list as $row) {                                    
                                    $pid = $row->id; 
                                    $code = $row->code;
                                    $pmake = $_POST["$code-make"];
                                    if (!empty($pmake)){
                                        echo "<tr class='product-tr'>
                                            <td>{$pmake} - {$_POST["$code-model"]} , SN. - {$_POST["$code-serial"]}</td> 
                                            <td>{$_POST["$code-hsn"]}</td>
                                            <td>{$_POST["$code-qty"]}</td>
                                            <td>{$_POST["$code-rate"]}</td>
                                            <td> {$_POST["$code-amount"]}/-</td>
                                        </tr>";
                                    }else{
                                        $emptyCount++;
                                    }
                                }
                                for ($i=0; $i < $emptyCount; $i++) { 
                                    echo "<tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>";
                                }
                            ?>
                            <tr>
                                <td colspan="1">
                                    <p><span>Our Bank Details:</span></p>
                                    <p><span>BANK OF INDIA</span></p>
                                    <p><span>A/C No.</span> 428220110000112(CA)</p>
                                    <p><span>IFS CODE:</span> BKID0004282</p>
                                    <p><span>Branch :</span> MAJU</p>
                                </td>

                                <td colspan="3" class="text-right">
                                    <p>
                                        <span>Subtotal Amount :</span>                                   
                                    <p>
                                        <span>CGST 9% :</span>
                                    </p>
                                    <p>
                                        <span>SGST 9% :</span>
                                    </p>
                                    <p>
                                        <span>Round Off :</span>
                                    </p>
                                </td>

                                <td>
                                    <p>
                                     <?=(isset($subtotal)) ? $subtotal : 0; ?>/-
                                    </p>
                                    <p>
                                    <?=(isset($cgst)) ? $cgst : 0; ?>/-
                                    </p>
                                    <p>
                                    <?=(isset($sgst)) ? $sgst : 0; ?>/-
                                    </p>
                                    <p>
                                    <?=(isset($ammount)) ? $ammount : 0; ?>/-
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4" class="text-right">
                                    <h2>Total:</h2>

                                <td class="text-left text-danger">
                                    <h2><?=(isset($ammount)) ? $ammount : 0; ?>/-</h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div id="foot">
            <div id="term">
                <div id="rule">
                    <table>
                        <thead>
                            <th>
                            * TERMS AND CONDITIONS
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                Product received in good condition.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                Warranty of all items are covered by the principles or by their <br>
                                authorised service centeres. We don't have any legal or financial <br>
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
                <div id="stmp">
                     <p>Stamp</p>
                </div>
            </div>
            <div id="thank">
                <div id="thanks">
                    <p>Thanks for shopping.!</p>
                </div>
                <div id="qr">
                    <div id="qr1">
                        <img src="./photo/frame.png" alt="">
                    </div>
                    <div id="qr2">
                        <img src="./photo/Atanu_Sasmol.png" alt="">
                    </div>
                </div>
            </div>
            </div>
        </div>
    
    </div>
    <div id="btndiv">
     <!-- <input type="button" onclick="printDiv('print-content')" value="print a div!"/> -->
    <button class="btn" id="InkPrint">Print & Save</a>
    <button class="btn" id="btnCancel" style="margin-left:10px">Cancel</a>
    </div>
    


</body>
<?php
    }else{
        echo "Unauthorised access";
    }
?>


<script>
    $(function() {
        $("#btnCancel").click(function() {            
            window.location.href = "activity.php";
        });
    });
</script>

</html>

