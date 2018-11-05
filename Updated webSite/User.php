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