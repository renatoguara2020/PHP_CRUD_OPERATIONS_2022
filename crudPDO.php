<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$firstname = "RENATO ALVES SOARES";
$lastname = "SOARES";
$email = "renatoguara2020@gmail.com";

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'INSERT INTO usuarios (id, firstname, lastname, email)VALUES (:firstname, :lastname, :email)';
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";

  
  while($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) { 
       echo "First Name". $row["firstname"] . "<br>";
       echo "Last Name". $row["lastname"] . "<br>";
       echo "Email". $row["email"] . "<br>";
  }


?>