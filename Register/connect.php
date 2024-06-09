<?php

  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];     
  $email = $_POST['email'];
  $scholorships = $_POST['scholorships'];
  $password = $_POST['password'];
  $Phone = $_POST['Phone'];
  $Location = $_POST['Location'];
  $gender = $_POST['gender'];


  //Database connection
  $conn = new mysqli('localhost' , 'root' ,'' ,'test');
  if($conn->connect_error) {
    die('connection Failed : '.$conn->connect-error);

  } else {
     $stmt = $conn->prepare("insert into scholorships( FirstName,lastName,email,scholorships,password,Phone,Location,gender)
      values(?,?,?,?,?,?,?,?)");
      $stmt->bind_param("sssssiss" ,$FirstName,$LastName,$email,$scholorships,$password,$Phone,$Location,$gender);
      $stmt->execute();
      echo "regitration Successfully...";
      $stmt->close();
      $conn->close();

  }
?>