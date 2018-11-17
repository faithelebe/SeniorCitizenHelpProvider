<?php
  include "./database.php";
  session_start();
  $userName = $_POST['userName'];
  $passWord = $_POST['passWord'];
  $type = $_POST['userType'];

 $sql = "SELECT * from serviceprovider WHERE userName = '{$userName}';";

//Run sql query
if (!$result = $conn->query($sql)) {
     echo "<script>
          alert('Oh no. It failed');
          window.location.href='http://localhost/bit216/newLogin.php';
          </script>";
    exit;
}

if($result->num_rows == 0){  //user name is not found
   $sql = "SELECT * from senior WHERE userName = '{$userName}';";
  //Run sql query
  if (!$result = $conn->query($sql)) {
      echo "<script>
          alert('Oh no. It failed');
          window.location.href='http://localhost/bit216/newLogin.php';
          </script>";
      exit;
  }
}

if($result->num_rows == 0){
  echo "<script>
          alert('User name not found');
          window.location.href='http://localhost/bit216/newLogin.php';
          </script>";
}else{
  $userRecord = $result->fetch_assoc();

  if($passWord == $userRecord['passWord']){  //password correct
    if($type =="provider"){
      $_SESSION['user_name'] = $userRecord['userName'];
        echo "<script>
          window.location.href='http://localhost/bit216/providerHome.php';
          </script>";
        }
    else{
        $_SESSION['user_name'] = $userRecord['userName'];
      echo "<script>
        window.location.href='http://localhost/bit216/seniorHome.php';
        </script>";
    }
  }else{
       echo "<script>
          alert('Username/password incorrect');
          window.location.href='http://localhost/bit216/newLogin.php';
          </script>";
  }
}

//header('Location: http://localhost/bit216/newLogin.html');


  $conn->close();


  ?>
