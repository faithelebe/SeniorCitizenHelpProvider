<?php
  include "./database.php";
  $userName = $_POST['userName'];
  $passWord = $_POST['passWord'];
  $fullName = $_POST['fullName'];
  $phoneNumber = $_POST['phoneNumber'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $birthDay = $_POST['birthDay'];
   $serviceCode = $_POST['serviceCode'];
   $type = $_POST['type'];
   if ($type == "senior"){
      //   then create a record in the senior table
   	$sql = "INSERT INTO senior (userName, passWord, fullName, phoneNumber, gender, address, birthDay) 
   	VALUES ('{$userName}', '{$passWord}', '{$fullName}', '{$phoneNumber}', '{$gender}', '{$address}','
   	{$birthDay}')";

 
  }else{
     // create a record for Service provider

      $sql = "INSERT INTO serviceprovider (userName, passWord, fullName, phoneNumber, gender, 
      address, birthDay, serviceCode) VALUES ('{$userName}', '{$passWord}', '{$fullName}', '{$
      phoneNumber}', '{$gender}', '{$address}','{$birthDay}', '{$serviceCode}')";
      
 }
 if ($conn->query($sql) === TRUE) {
 	 echo "<script>
   alert('Sign up successfull');
   window.location.href='http://localhost/bit216/newLogin.php';
   </script>";

   } else {
    if(substr($conn->error, 0,15) == "Duplicate entry"){
      echo "<script>
      alert('User name already exists');
      window.location.href='http://localhost/bit216/newSignUp.php';
       </script>";