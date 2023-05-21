<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
require_once("config.php");

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
	   

	   	$query = "SELECT id FROM clientmain WHERE mob = '{$mobileNumber}' limit 1";        
        $result = mysqli_query($link, $query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $id = $row["id"];
            }
        }
	    echo json_encode([
		    	'error' => false,
		    	'msg' => "Successfully Inserted",
		    	'customer' => [
		    		'name' => $fullName,
		    		'mobile' => $mobileNumber,
		    		'type' => $type,
					'add' => $address,
					'id' => $id
		    	]
			]
		);
    } else {
    	echo json_encode([
	    	'error' => true,
	    	'msg' => "Error inserting record: " . mysqli_error($link)
			]
		);
    }
}
?>