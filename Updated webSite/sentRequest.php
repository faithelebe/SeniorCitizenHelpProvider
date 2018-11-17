
<?php
  include "./database.php";


$usernameSenior = $_POST['secretName'];

  $code = $_POST['serviceCode'];
  $date = $_POST['date'];
   $note = $_POST['note'];
$status = "pending";



$sql = "INSERT INTO sentrequest (Code, Date, Note, status, userName) VALUES ('{$code}', '{$date}', '{$note}', '{$status}', '{$usernameSenior}')";


$conn->query($sql);
header('Location: http://localhost/bit216/newSubmitRequest.php');

  $conn->close();


  ?>
