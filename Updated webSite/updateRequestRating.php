
<?php
  include "./database.php";


  $id = $_POST['secretID'];
  $note = $_POST['noteUpdate'];
  $updatedStatus = $_POST['com'];

  $rating =$_POST['rating'];
  $ccomment =$_POST['ratingComment'];


$sql = "UPDATE sentrequest SET Note = '{$note}' , status = '{$updatedStatus}', rating = '{$rating}', ratingComment = '{$ccomment}' WHERE id = '{$id}'";


$conn->query($sql);
echo "<script>
   alert('Updated Successfully!');
   window.location.href='http://localhost/bit216/newManageRequest.php';
</script>";
  $conn->close();


  ?>
