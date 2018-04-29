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
		// Sanitize user input here

		// Check if unique here


		$sql =  "INSERT INTO user (sose,username,password,firstname,lastname,dateofbirth, email,telephone,address,postcode,gender,country)
							VALUES ('$_POST[sose]','$_POST[username]','$_POST[password]','$_POST[firstname]','$_POST[lastname]','$_POST[dob]',
								'$_POST[email]','$_POST[telephone]','$_POST[address]','$_POST[postcode]','$_POST[gender]','$_POST[country]')";
    		// use exec() because no results are returned
    		$connect->exec($sql);
	}
	catch(PDOException $e){
		echo "Database Error: " . $e->getMessage();
	}

	$connect = null;

	header('Location: index.php');
?>
