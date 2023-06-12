<!DOCTYPE html>
<html lang="en">

<head>
    <?php
require_once("navbar.php");
require_once("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

?>
    <title>Add Client</title>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
require_once("config.php");
$mobile_no = '';
if($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET["mob"])){
  
    $mobile_no = trim($_GET["mob"]) ;
    
   
  } 
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Validate fullName
    if (empty($_POST["fullName"])) {
        $fullNameError = "Please enter your full name.";
    } else {
        $fullName = test_input($_POST["fullName"]);
        // Check that fullName only contains letters and spaces
        if (!preg_match("/^[a-zA-Z ]*$/",$fullName)) {
            $fullNameError = "Name can only contain letters and spaces.";
        }
    }

  

    // Validate mobileNumber
    if (empty($_POST["mobileNumber"])) {
        $mobileNumberError = "Please enter your mobile number.";
    } else {
        $mobileNumber = test_input($_POST["mobileNumber"]);
        $emmail = test_input($_POST["email"]);
        $type = test_input($_POST["type"]);
        $address = test_input($_POST["address"]);
        $remarks = test_input($_POST["remarks"]);

        // Check that mobileNumber is a valid format (e.g. 10 digits)
        if (!preg_match("/^[0-9]{10}$/",$mobileNumber)) {
            $mobileNumberError = "Mobile number must be 10 digits.";
        }
    }

   
if ( empty($fullNameError) && empty($mobileNumberError) ) {
  
    // Insert new record into usermain table
    $sql = "INSERT INTO `clientmain`( `name`, `mob`, `email`, `type`, `address`, `remarks`) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $fullName, $mobileNumber,  $emmail ,$type , $address , $remarks);
    mysqli_stmt_execute($stmt);
    // Check if the record was successfully inserted
   
        echo '<script type="text/javascript">
        location.replace("addmem.php");
      </script>';
    } else {
      echo "Error inserting record: " . mysqli_error($link);
    }
    
    
  }
  

?>
<body>

    <!-- <div id="layoutSidenav_content"> -->
    <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Client</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">User Manegment</li>
          <li class="breadcrumb-item active">Add New Client</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        <section class="section">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card mb-5">
                                <div class="card-body">
                                    <h5 class="card-title">Add New Client Form</h5>

                                    <!-- Registration Form -->
                                    <form class="row g-3" form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" class="form-control" id="fullName" name="fullName"
                placeholder="Full Name" maxlength="30"  required>
            <label for="fullName">Full Name</label>
            <!-- <div id="fullName-error" class="text-danger"><?php echo isset($fullNameError) ? $fullNameError : ""; ?></div>  -->

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber"
                placeholder="Mobile Number" maxlength="10" value="<?php echo $mobile_no; ?>"  required onchange="checkmob()">
            <label for="mobileNumber">Mobile Number</label>
            <div id="mobileNumberError" class="text-danger"><?php echo isset($mobileNumberError) ? $fullNameError : ""; ?></div> 

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Email" maxlength="30" >
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
            <textarea class="form-control" id="address" name="address"
                placeholder="Address" maxlength="100" required></textarea>
            <label for="address">Address</label>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-floating">
            <textarea class="form-control" id="remarks" name="remarks"
                placeholder="Remarks" maxlength="100"></textarea>
            <label for="remarks">Remarks</label>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
    </main>

    <!-- End #main -->


    <div style="position:fixed;bottom:0;width:100%;">
      <?php 
require_once ("footer.php");
?>
</div>


  
<script src="assets/ajax_js/check_cas.js"></script>



</body>

</html>