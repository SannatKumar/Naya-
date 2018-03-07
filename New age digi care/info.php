<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "newAgeDigiDB";
	
	try {
    		$connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    		// set the PDO error mode to exception
    		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		echo "Connected successfully"; 
    	}
	catch(PDOException $e) {
    		echo "Connection failed: " . $e->getMessage();
    	}

	try {
		$sql = “INSERT INTO users(username, email) VALUES ('$_POST[username]', '$_POST[email]')”;
    		// use exec() because no results are returned
    		$conn->exec($sql);
    		echo "New record created successfully";
	}
	catch(PDOException $e){
		echo "Database Error: " . $e->getMessage();
	}
	
	$connect = null; 
?> 