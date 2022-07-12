<?php
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $messege = $_POST['messege'];

    if (!empty($fname) || !empty($email) || !empty($messege)) {
    	// code...
    	$host = "localhost";
    	$dbUsername = "root";
    	$dbPassword = "";
    	$dbname = "empezar";

    	//create connection
    	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    	if(mysqli_connect_error()){
    		die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
    	} else {
    		$SELECT = "SELECT email From register Where email = ? Limit 1";
    		$INSERT = "INSERT Into register (fname, email, messege) values(?, ?, ? )";

    		//prepare Statement

    		$stmt = $conn->prepare($SELECT);
    		$stmt->bind_param("s", $email);
    		$stmt->execute();
    		$stmt->bind_result($email);
    		$stmt->store_result();   	
    		$rnum = $stmt->num_rows;

    		if ($rnum==0) {
    			// code...
    			$stmt->close();

    			$stmt = $conn->prepare($INSERT);
    			$stmt->bind_param("sss", $fname, $email, $messege); 
    			$stmt->execute();
    			echo "New Record inserted";
    		} else {
    			echo "Someone already registed using this email";
    		}
    		$stmt->close();
    		$conn->close();
    	}
    } else {
    	echo "All fields are empty";
    	die();
    }

?>