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
$mobile_no = trim($_GET["mob"]) ;
$sql = "SELECT * FROM invoicemain WHERE castmob = '$mobile_no'";
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
  <h1>Client Bill</h1>
  <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item">User Manegment</li>
    <li class="breadcrumb-item active"><a href="userlist.php">Client Database</a></li>
          <li class="breadcrumb-item active">Client Bill</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Invoice</h5>
          <p> ..... </p>
          
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Bill No</th>
                <th scope="col">Subtotal</th>
                <th scope="col">CGST</th>
                <th scope="col">SGST</th>
                <th scope="col">Total</th>


              </tr>
            </thead>
            <tbody>
          
        <?php
             if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['billno'] . "</td>";
                echo "<td>" . $row['subtotal'] . "</td>";
                echo "<td>" . $row['cgst'] . "</td>";
                echo "<td>" . $row['sgst'] . "</td>";
                echo "<td>" . $row['total'] . "</td>";
      

                echo "<td>";
                    echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye fa-beat"></span></a>';
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

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
<div class="copyright">
  &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
</div>
<div class="credits">
  <!-- All the links in the footer should remain intact. -->
  <!-- You can delete the links only if you purchased the pro version. -->
  <!-- Licensing information: https://bootstrapmade.com/license/ -->
  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</footer><!-- End Footer -->

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