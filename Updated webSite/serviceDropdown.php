<?php
require "./database.php";  //connect to the database
$q = "SELECT * FROM servicetable;";//retrieve all records from  servicetable
$result = $conn->query($q);