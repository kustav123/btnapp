<?php
  include_once("../config.php");

  if (isset($_GET['name']) && isset($_GET['type'])) {
    $searchTerm = $_GET['name'];
    $type = $_GET['type'];
    
    // Build the SQL query to search for matching brands in the "brandmain" table
    $sql = "SELECT name FROM brandmain WHERE name LIKE '%$searchTerm%' AND type='$type'";
    $result = mysqli_query($link, $sql);
    if (!$result) {
      die('Error querying database: ' . mysqli_error($conn));
    }
    
    // Build an array of matching brand names
    $brands = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $brands[] = $row;
    }
    
    // Send the array of matching brand names as a JSON response
    header('Content-Type: application/json');
    echo json_encode($brands);
  }
  
  if(isset($_GET['mob'])){
    $q = $_GET['mob'];
    if(isset($q) || !empty($q)) {
        $query = "SELECT * FROM clientmain WHERE mob = '$q'";
        
        $result = mysqli_query($link, $query);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $data = array("name" => $row["name"] , "id" => $row["id"] , "type" => $row["type"] , "add" => $row["address"]) ;
             
            }
          } else {
            $data = array("name" => "No Data");

          }
          
          $link->close();
          
          // return the data as a JSON object
          header('Content-Type: application/json');
          echo json_encode($data);
}
}
?>
