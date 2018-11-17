<?php
require "./database.php";  //connect to the database
$q = "SELECT * FROM servicetable;";//retrieve all records from  servicetable
$result = $conn->query($q);//execute and store the result of sql query in variable $result
if($result){  //$result should be an object if successful