<!DOCTYPE html>

<head>
    <title>Users / Activity </title>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <?php
require_once("navbar.php");
?>
</head>

<body>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">

                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#desktop-pc">Desktop PC</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-edit">Software Install</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-settings">Software Install</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active desktop-pc" id="desktop-pc">
                                    <!-- <form action="/btnapp/php/pcbill.php" method=post> -->
                                    <form action="in.php" method=post>
                                        <div class="card col-xl-12 m-auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Desktop PC</h5>
                                                <div class="row mb-3">
                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="customer-mob" name="customer-mob"
                                                                placeholder="customer-mob" input class="form-control">
                                                            <label for="customer-mob">Mobile</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="customer-name" name="customer-name"
                                                                placeholder="customer-name" class="form-control"
                                                                readonly>
                                                            <label for="customer-name">Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="customer-type" name="customer-type"
                                                                placeholder="customer-type" class="form-control"
                                                                readonly>
                                                            <label for="customer-type">Type</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="customer-add" name="customer-add"
                                                                placeholder="customer-add" class="form-control"
                                                                readonly>
                                                            <label for="customer-add">Address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">


                                                        <?php  
                                                            include "config.php";
                                                            $value2='';
                                                            //Query to fetch last inserted invoice number
                                                            $query = "SELECT `year`, num FROM btnapp.invoice where type = 'T';";
                                                            $stmt = $link->query($query);
                                                            if(mysqli_num_rows($stmt) > 0) {
                                                                if ($row = mysqli_fetch_assoc($stmt)) {
                                                                    $value2 = $row['num'];
                                                                    $year = $row['year'];
                                                                    $value2 = $value2 + 1;//Incrementing numeric part
                                                                    $value2 = "BTN/". $year . sprintf('%03s', $value2);//concatenating incremented value
                                                                    $value = $value2; 
                                                                }
                                                            } 
                                                            
                                                            // echo $value;//
                                                        ?>

                                                            <input type="text" id="bill-no" name="bill-no"
                                                                data-type="bill-no" placeholder="Bill No" input
                                                                class="form-control" value=<?php echo $value; ?> readonly>
                                                            <label for="bill-no">Bill No.</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="ref-bill-no" name="ref-bill-no"
                                                                placeholder="Ref Bill No" input class="form-control">
                                                            <label for="CPU-model">Ref. Bill no</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="date" id="bill-date" name="bill-date"
                                                                data-type="bill-date" placeholder="Bill No" input
                                                                class="form-control">
                                                            <label for="bill-date">Date</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <!-- Joining pro Form -->


                                                <?php
                                                 $ids = array();

                                                $result = mysqli_query($link, "SELECT * FROM prod");
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $ids[] = array('id' => $row['id'], 'code' => $row['code']);
                                                 ?>

                                                <div class="row mb-1">
                                                    <label for="motherboard" class="col-xl-1 col-form-label"><?php echo $row['name']; ?>
                                                        :</label>
                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="<?php echo $row['code']; ?>-make" name="<?php echo $row['code']; ?>-make"
                                                                data-type="<?php echo $row['code']; ?>" placeholder="<?php echo $row['code']; ?>-make" input
                                                                class="form-control">
                                                            <label for="<?php echo $row['code']; ?>-make">Brand Name</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="<?php echo $row['code']; ?>-model" name="<?php echo $row['code']; ?>-model"
                                                                placeholder="<?php echo $row['code']; ?>-model" input class="form-control">
                                                            <label for="<?php echo $row['code']; ?>-model">Model</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="<?php echo $row['code']; ?>-serial" name="<?php echo $row['code']; ?>-serial"
                                                                placeholder="<?php echo $row['code']; ?>-serial" input class="form-control">
                                                            <label for="<?php echo $row['code']; ?>-serial">Serial Number</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="<?php echo $row['code']; ?>-qty" name="<?php echo $row['code']; ?>-qty"
                                                                placeholder="<?php echo $row['code']; ?>-qty" input class="form-control"  oninput="calculateAmount('<?php echo $row['code']; ?>')">
                                                            <label for="<?php echo $row['code']; ?>-qty">Qty</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="<?php echo $row['code']; ?>-hsn" name="<?php echo $row['code']; ?>-hsn" placeholder="<?php echo $row['code']; ?>-hsn" input class="form-control">
                                                            <label for="<?php echo $row['code']; ?>-hsn">HSN/SAC</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <select id="<?php echo $row['code']; ?>-warranty-exp" name="<?php echo $row['code']; ?>-warranty-exp"
                                                                placeholder="<?php echo $row['code']; ?>-warranty-exp" input
                                                                class="form-control">
                                                                <option value="6">6 Months</option>
                                                                <option value="12">1 Year</option>
                                                                <option value="24">2 Years</option>
                                                                <option value="36">3 Years</option>
                                                                <option value="60" selected>5 Years</option>
                                                            </select>
                                                            <label for="<?php echo $row['code']; ?>-warranty-exp">Warranty Expiry
                                                                Date</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="<?php echo $row['code']; ?>-rate" name="<?php echo $row['code']; ?>-rate"
                                                                placeholder="<?php echo $row['code']; ?>-rate" input class="form-control"  oninput="calculateAmount('<?php echo $row['code']; ?>')">
                                                            <label for="<?php echo $row['code']; ?>-rate">Rate</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="<?php echo $row['code']; ?>-amount" name="<?php echo $row['code']; ?>-amount"
                                                                placeholder="<?php echo $row['code']; ?>-amount" input class="form-control">
                                                            <label for="<?php echo $row['code']; ?>-amount">Amount</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>

                                            <input type="hidden" name="list" value="<?php echo htmlentities(json_encode($ids)); ?>">
                                            <input type="hidden" name="castid" class="form-control" id="castid" >

                                            <div class="row mb-1">
                                                    <label for="service" class="col-xl-4 col-form-label">Service Charges For Pc Assemble And Installtion
                                                        :</label>
                                                    
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="service-qty" name="service-qty"
                                                                placeholder="service-qty" input class="form-control" oninput="calculateAmount('service')">
                                                            <label for="service-qty">Qty</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="service-hsn"
                                                                name="service-hsn"
                                                                placeholder="service-hsn" input
                                                                class="form-control">
                                                            <label for="service-hsn">HSN/SAC</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <select id="service-warranty-exp"
                                                                name="service-warranty-exp"
                                                                placeholder="service-warranty-exp" input
                                                                class="form-control">
                                                                <option value="6">6 Months</option>
                                                                <option value="12">1 Year</option>
                                                                <option value="24">2 Years</option>
                                                                <option value="36">3 Years</option>
                                                                <option value="60">5 Years</option></select>
                                                            <label for="service-warranty-exp">Warranty Expiry
                                                                Date</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="service-rate" name="service-rate"
                                                                placeholder="service-rate" input class="form-control" oninput="calculateAmount('service')">
                                                            <label for="service-rate">Rate</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-1">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="service-amount" name="service-amount"
                                                                placeholder="service-amount" input class="form-control">
                                                            <label for="service-amount">Amount</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <hr>

                                                <div class="row mb-3 justify-content-center">
                                                <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="subtotal" name="subtotal"
                                                                placeholder="subtotal" input class="form-control">
                                                            <label for="subtotal">Sub Total</label>
                                                        </div>
                                                    </div>
                                                <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="cgst" name="cgst"
                                                                placeholder="CGST" input class="form-control">
                                                            <label for="cgst">CGST</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="sgst" name="sgst"
                                                                placeholder="SGST" input class="form-control">
                                                            <label for="cgst">SGST</label>
                                                        </div>
                                                    </div>

                                                <div class="col-xl-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="total-amount" name="total-amount"
                                                                placeholder="Total Amount" input class="form-control">
                                                            <label for="CPU-model">Total Bill Amount</label>
                                                        </div>
                                                    </div>

                                                    </div>

                                                <div class="col-md-3 align-items-center">
                                                    <input type="submit" class="btn btn-primary" value="Submit"
                                                        id="submit-btn">
                                                    <a href="activity.php" class="btn btn-secondary ml-2">Cancel</a>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    Profile Edit Form
                                    <form>
                                        <div class="card col-md-12 m-auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Software Installation</h5>
                                                <div class="row mb-3">
                                                    <div class="col-md-3">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="customer-mob" name="customer-mob"
                                                                placeholder="customer-mob" input class="form-control">
                                                            <label for="customer-mob">Mobile</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="customer-name" name="customer-name"
                                                                placeholder="customer-name" class="form-control"
                                                                readonly>
                                                            <label for="customer-name">Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="customer-type" name="customer-type"
                                                                placeholder="customer-type" class="form-control"
                                                                readonly>
                                                            <label for="customer-type">Type</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="customer-add" name="customer-add"
                                                                placeholder="customer-add" class="form-control"
                                                                readonly>
                                                            <label for="customer-add">Address</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Joining pro Form -->

                                                <div class="row mb-1">
                                                    <label for="motherboard" class="col-sm-2 col-form-label">Software
                                                        Name
                                                        :</label>
                                                    <div class="col-md-3">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="text" id="soft-name" name="soft-name"
                                                                placeholder="Software Name" data-type="smps" input
                                                                class="form-control">
                                                            <label for="soft-name">Name</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <select id="soft-type" name="soft-type"
                                                                placeholder="soft-type" input class="form-control">
                                                                <option selected disabled>Select Type</option>
                                                                <option>Licence</option>
                                                                <option>Renew</option>
                                                                <option>Support</option>
                                                                <option>AMC</option>
                                                            </select>
                                                            <label for="soft-type">Software Type</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="date" id="hsn"
                                                                name="hsn" placeholder="Installation Date"
                                                                input class="form-control">
                                                            <label for="hsn">Installation
                                                                Date</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-floating mb-2 mb-md-0">

                                                            <input type="date" id="expiry-date" name="expiry-date"
                                                                placeholder="Expiry Date" input class="form-control">
                                                            <label for="expiry-date">Expiry Date</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-settings">

                                    <!-- Settings Form -->
                                    <form>

                                    </form>

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="currentPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Current
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>


    <?php 
                   require_once ("footer.php");
                ?>
    <script src="assets/ajax_js/fetch_make.js"></script>
    <script src="assets/ajax_js/fetch_cas.js"></script>
    <script src="assets/js/calculateamount.js"></script>


</body>

</html>
<button type="button" id="open-addmem-model" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered" style="display: none;"></button>

<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3" action="add-member-logic.php" id="addmem-form">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" maxlength="30"  required>
                    <label for="fullName">Full Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Mobile Number" minlength="10" maxlength="10" value="" required onkeyup="checkmob()">
                    <label for="mobileNumber">Mobile Number</label>
                    <div id="mobileNumberError" class="text-danger"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="30" >
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <select class="form-select" id="type" name="type" aria-label="Type" required>
                        <option value="Home">Home</option>
                        <option value="Commercial">Commercial</option>
                    </select>
                    <label for="type">Type</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <textarea class="form-control" id="address" name="address" placeholder="Address" maxlength="100" required></textarea>
                    <label for="address">Address</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" maxlength="100"></textarea>
                    <label for="remarks">Remarks</label>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" id="submit-addmem-form" class="btn btn-primary">Submit</button>
                <button type="reset" id="reset-addmem-form" class="btn btn-secondary">Reset</button>
                <button type="button" id="close-addmem-model" class="btn btn-secondary" data-bs-dismiss="modal"  style="display: none;">Close</button>
            </div>
        </form>
        </div>
      </div>
    </div>
</div><!-- End Vertically centered Modal-->

<script>
  function checkmob() {
    var mobileNumber = document.getElementById("mobileNumber").value;

    var query = "SELECT COUNT(*) AS count FROM clientmain WHERE mob = '" + mobileNumber + "'";
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Parse the query result and show an error message if the kevaID already exists
        var result = JSON.parse(xhr.responseText);
        var count = result.count;
        if (count > 0) {
          document.getElementById("mobileNumberError").innerHTML = "This Client  is already Added.";
          $("#submit-addmem-form").prop('disabled', true)
        } else {
          document.getElementById("mobileNumberError").innerHTML = "";
          $("#submit-addmem-form").prop('disabled', false)
        }
      }
    };
    xhr.open("GET", "ajax/query.php?q=" + encodeURIComponent(query));
    xhr.send();
  }

    $(function() {
        $("#addmem-form").submit(function(e) {
            e.preventDefault();
            var actionurl = e.currentTarget.action;
            
            $.ajax({
                url: actionurl,
                type: 'post',
                dataType: 'application/json',
                data: $("#addmem-form").serialize(),
                success: function(data) {},
                error: function(data){
                    data = JSON.parse(data.responseText);
                    if(!data.error){
                        alert(data.msg);

                        document.getElementById("customer-name").value = data.customer.name;
                        document.getElementById("customer-mob").value = data.customer.mobile;
                        document.getElementById("customer-type").value = data.customer.type;
                        document.getElementById("customer-add").value = data.customer.add;
                        document.getElementById("castid").value = data.customer.id;

                        document.getElementById("close-addmem-model").click();
                        document.getElementById("reset-addmem-form").click();
                    }else{
                        alert(data.msg);
                    }
                }
            });
        });
    });
</script>