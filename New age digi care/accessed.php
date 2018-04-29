
<?php
	session_start();

	require_once 'config.php';
	$flag = 'INVALID';
	$qhandle = $connect->query('SELECT username FROM user');
	$fusername = $_POST['username'];
	while($row = $qhandle->fetch())
	{
			$dusername = $row[username];
			if($fusername==$dusername)
			{
				$flag = 'VALID';
			}
	}
	$pkovalue = $_GET['process'];// GET le url paramter bata value linchha//

	switch ($pkovalue)
	{
		case "login":
				if($flag=='VALID' && $_POST['password']== 'pass')
				{
					$_SESSION['username'] = $fusername;
					header("Location:dashboard.php");
				}

				else
				{
          header("Location:index.php");
				}

				break;

		case "logout":
				header("Location:index.php");

				break;

		default:
				echo(" Lost");

				break;
	}


?>
