<?php

	require_once 'config.php';
	//$records = $connect->query('SELECT * FROM user WHERE userid=1'); // to get specific data from database, such as search function
	$records = $connect->query('SELECT * FROM user'); /* connect is the database handle and records is query handle
echo var_dump($records); This is use to print dump value of variable especially use for debugging*/
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <style>
            table {
              border-rowlapse: rowlapse;
            }

            td, th {
              border: 1px solid black;
              padding: 1rem;
              text-align: center;
            }
        </style>
    </head>

    <body>
        <div>
            <a href="index.php">Homepage</a>
            <h2>Registered users</h2>



                    <table>
                      <thead>
                        <tr>
                          <th>SSN</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>DOB</th>
													<th>SSN</th>
													<th>Email</th>
													<th>Phone</th>
													<th>DOB</th>
													<th>SSN</th>
													<th>Name</th>
													<th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        while ($row =$records->fetch())
                        {
                            $sose = $row['sose'];
                            $username = $row['username'];
                            $firstname= $row['firstname'];
                            $lastname = $row['lastname'];
                            $dateofbirth = $row['dateofbirth'];
                            $email = $row['email'];
                            $telephone = $row['telephone'];
                            $address = $row['address'];
                            $postcode = $row['postcode'];
                            $gender = $row['gender'];
                            $country = $row['country'];
                            echo '<tr>
                                      <td>'.$sose.'</td>
                                      <td>'.$username.'</td>
                                      <td>'.$firstname.'</td>
                                      <td>'.$lastname.'</td>
																			<td>'.$dateofbirth.'</td>
																			<td>'.$email.'</td>
																			<td>'.$telephone.'</td>
																			<td>'.$address.'</td>
																			<td>'.$postcode.'</td>
																			<td>'.$gender.'</td>
																			<td>'.$country.'</td>
                                    </tr>
                            ';
                        }
												?>
												</tbody>
                                </table>

        </div>
    </body>
</html>
