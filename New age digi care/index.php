<!DOCTYPE html>
<html>
<head>
	<title>Proper Use of the class</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<h1><img id="logo" src=images/newAgeDigiCareLogo.png></h1>
	<body>
		<div class="topbar">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="health.html">HEALTH INFORMATION</a></li>
				<li><a href="benefits.html">BENEFITS</a></li>
				<li><a href="myaccount.html">MY ACCOUNT</a></li>
			</ul>
	</div>
	<div class="register">
			<?php
			/*if(isset($_GET['msg'])){
				echo $_GET['msg'];
			}*/
			?>
			<form class="" action="accessed.php?process=login" method="post"><!-- ?process variable is required to identify and work later-->

				<label for="username">Username:</label>
				<input type="text" name="username" value="">

				<label for="password">Password:</label>
				<input type="password" name="password" value="">

				<button type="submit" name="signin">Sign in</button>
			</form>
			<h2>or <a href="registerlink.html">Register</a></h2>
	</div>
	<div class="middlebar">
		<ul>
			<li><a href="appointments.html">Appointments</a></li>
			<li><a href="emergency.html">Emergency</a></li>
			<li><a href="reminder.html">Reminder</a></li>
			<li><a href="articles.html">ARTICLES AND TIPS</a></li>
		</ul>
	</div>
	<div class="footer">
		<ul>
			<li><a href="games.html">GAME</a></li>
			<li><a href="contacts.html">Contacts</a></li>

		</ul>
	</div>
</body>
</html>
