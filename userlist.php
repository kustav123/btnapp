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
$sql = "SELECT * FROM clientmain";
?>
    <title>Client Database </title>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/

  ======================================================== -->
 


  <!-- Template Main CSS File -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</head>

<body>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Client Database</h1>
  <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">User Manegment</li>
          <li class="breadcrumb-item active">Client Database</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Database</h5>
          <p> ..... </p>
          
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col">GST</th>
                <th scope="col">Address</th>
                <th scope="col">Remarks</th>
                <th scope="col">Action</th>


              </tr>
            </thead>
            <tbody>
          
        <?php
             if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['mob'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['gstno'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['remarks'] . "</td>";
      

                echo "<td>";
                    echo '<a href="listbill.php?mob='. $row['mob'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fas fa-file-invoice fa-spin" style="color: #0a4cbd;"></span></a>';
                    echo '&nbsp<a href="update_cas.php?uid='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil fa-beat"></span></a>';
                    echo '&nbsp<a href="ajax.php?DND=Yes&id='. $row['id'] .' " title="Start DND" data-toggle="tooltip"><span class="fa fa-ban fa-beat" style="color: #ea1506;"></span></a>';

                    
                echo "</td>";
            echo "</tr>";
        }
    }
 }
        ?>
         </tbody>

          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<div style="position:fixed;bottom:0;width:100%;">
      <?php 
require_once ("footer.php");
?>
</div>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>