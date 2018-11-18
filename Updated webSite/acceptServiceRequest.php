<?php
session_start();
$usernameProvider = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   </head>
   <link href="CSS/Layout.css" rel="stylesheet" type="text/css" >
   <link href="CSS/Menu.css" rel="stylesheet" type="text/css" >
   <title>Accept Service Request</title>
   <!--Bootstrap-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="SignUp.css" rel="stylesheet">
   <script src="show1.js"></script>
   <script src="show2.js"></script>
   </head>
   <body>
      <DIV id="Holder">
      <div id="Header">
         <p>Senior Citizen Help Provider</p>
      </div>
      <div id="Navbar">
         <nav>
            <ul>
               <li>
                  <a href="providerHome.php">Home</a>
               </li>
               <li>
                  <a href="newManageRequest.php">Manage Request</a>
               </li>
               <li>
                  <a href="../bit216PHP/logout.php">Log Out</a>
               </li>
            </ul>
         </nav>
      </div>
      <div>
        <?php
                             require "./database.php";  //connect to the database

                             $q = "SELECT * FROM `sentrequest`as sr join `servicetable` as st on sr.Code = st.servicecode WHERE provider ='' || provider = '{$usernameProvider}';"; //retrieve all records from  servicetable
                             $result = $conn->query($q);  //execute and store the result of sql query in variable $result

                             if($result){  //$result should be an object if successful
                             $rows  = $result->fetch_all(MYSQLI_ASSOC);


                               foreach($rows as $r){  //$r is a single row
                                 print(" <div class=\"row item-card\" style='padding:20px; padding-left:40px;'>");
                                  print("<div class=\"col-sm-9 description\">");
                                  print("Service code: {$r['Code']}<br>");
                                  print("Request ID:{$r['id']}<br>");
                                  print("Date:{$r['Date']}<br>");
                                  print("<form id=\"submit-form\" action='/bit216PHP/acceptRequest.php' method='post'> ");
                                  print(" <input type=\"hidden\" name=\"secretProvider\" id=\"secretProvider\" value=\"{$usernameProvider}\" />");
                                  print(" <input type=\"hidden\" name=\"secretID\" id=\"secretID\" value=\"{$r['id']}\" />");
                                  print(" Status:{$r['status']}<br>");
                                  print(" Service Type: {$r['servicename']}<br>");
                                  print(" Notes: <textarea name='noteUpdate'>{$r['Note']}</textarea> ");
                                    if($r['status']== "pending"){
                                  print("<button type=\"submit\">Accept</button>");
                                }elseif($r['status']!= "pending"){
                                  print("<button type=\"submit\">Update</button>");
                                }
                                 print("</form>");
                                    print("<br>");
                                    if(  $r['rating'] == "1"){
                                      $rat = "Bad";
                                    }elseif(  $r['rating'] == "2"){
                                      $rat = "Not good";
                                    }elseif(  $r['rating'] == "3"){
                                      $rat = "Moderate";
                                    }elseif(  $r['rating'] == "4"){
                                      $rat = "Good";
                                    }elseif(  $r['rating'] == "5"){
                                      $rat = "Awesome";
                                    };
                                    if($r['status']== "completed"){
                                    print("Rating:<span style=\"font-weight:bold; color: blue\"> {$r['rating']} ($rat)</span>");

                                    print(" <br>Comment: <textarea name='ratingComment' style=\"font-weight:bold; color: blue\" disabled>{$r['ratingComment']}</textarea> ");
                                  }
                                       print("<br>");
                                          print("<br>");
                                 print("</div>");
                                 print("</div>");
                                    print("<br>");

                               }

                             }
                             $conn->close()

        ?>

            <div class="col-sm-3" style="height: 110px; overflow: hidden;">
            </div>

         </div>
         <DIV id="Footer"> 2018 &copy; Kuan Hong</DIV>
      </DIV>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Accept Service Request</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  RequiredDate <input type ="date" name="date" placeholder="date" /><br>
                  Notes <input type ="text" name="notes" placeholder="note" style="font-size:12px; padding: 5px; border-radius: 3px;border: 1px solid #ddd";"/><br>
                  Status <input type ="text" name="status" placeholder="status" style="font-size:12px ; padding: 5px; border-radius: 3px; border: 1px solid #ddd"; />
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Accept</button>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
</html>
