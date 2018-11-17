
<?php
  include "./database.php";

  $provider = $_POST['secretProvider'];
  $id = $_POST['secretID'];
  $note = $_POST['noteUpdate'];
  $status = "accepted";


$q ="SELECT (Date is not null) as canWork from sentrequest as st where st.provider = \"{$provider}}\" AND Date not in (SELECT Date FROM sentrequest where id='{$id}')";

$r = $conn->query($q);

$z = "SELECT * FROM sentrequest where status='accepted'";
$za = $conn->query($z);

if($za){
  $sql2 = "UPDATE sentrequest SET Note = '{$note}' , status = '{$status}', provider = '{$provider}' WHERE id = '{$id}'";
  $conn->query($sql);
  header('Location: http://localhost/bit216/acceptServiceRequest.php');
}

if($r){
  if(count($r->fetch_all()) == 0 ){
    $sql = "UPDATE sentrequest SET Note = '{$note}' , status = '{$status}', provider = '{$provider}' WHERE id = '{$id}'";
    $conn->query($sql);
  }
  header('Location: http://localhost/bit216/acceptServiceRequest.php');

}else{
  print("Failed, ".$conn->error);
}
  $conn->close();


  ?>
