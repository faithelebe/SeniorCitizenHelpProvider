<?php
require "./database.php";  //connect to the database
$q = "SELECT * FROM servicetable;";//retrieve all records from  servicetable
$result = $conn->query($q);//execute and store the result of sql query in variable $result
if($result){  //$result should be an object if successful
	$rows  = $result->fetch_all(MYSQLI_ASSOC);
	print('<select id = "codes" name="serviceCode">');
	foreach($rows as $r){  //$r is a single row
		print("<option value=\"{$r['servicecode']}\">{$r['servicename']}</option>");
		}
  print('</select>');