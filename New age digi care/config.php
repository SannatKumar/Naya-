
<?php

    //Database credentials
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
?>
