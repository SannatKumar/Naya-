<?php
    require_once 'include/config.php';
    $output = $pdo->query('SELECT sose,
       username, password,firstname, lastname, dateofbirth, email, telephone, address, postcode, gender, country FROM user');
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <style>
            table {
              border-collapse: collapse;
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
            <a href="index.html">Homepage</a>
            <h2>Registered users</h2>

            <?php
                echo '
                    <table>
                      <thead>
                        <tr>
                          <th>SSN</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>DOB</th>
                        </tr>
                    </thead>
                    <tbody>';

                        while ($col = $output->fetch())
                        {
                            $sose = $col['sose'];
                            $username = $col['username'];
                            $password = $col['password'];
                            $firstname= $col['firstname'];
                            $lastname = $col['lastname'];
                            $dateofbirth = $row['dateofbirth'];
                            $email = $col['email'];
                            $telephone = $col['telephone'];
                            $address = $col['address'];
                            $postcode = $col['postcode'];
                            $gender = $col['gender'];
                            $country = $col['country'];

                            echo '<tr>
                                      <td>'.$sose.'</td>
                                      <td>'.$name.'</td>
                                      <td>'.$email.'</td>
                                      <td>'.$dob.'</td>
                                    </tr>
                            ';
                        }

                        echo '</tbody>
                                </table>
                            ';
            ?>
        </div>
    </body>
</html>
