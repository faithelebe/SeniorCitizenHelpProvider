<?php
include "./database.php";
$code = $_POST['serviceCode'];
 $date = $_POST['date'];
  $note = $_POST['note'];
  $status = "pending";
  $sql = "INSERT INTO sentrequest (Code, Date, Note, status) VALUES ('{$code}', '{$date}', '{$note}', 
  '{$status}')";
  $conn->query($sql);
  header('Location: http://localhost/bit216/newSubmitRequest.php');