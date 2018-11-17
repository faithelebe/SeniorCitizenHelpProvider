<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "bit216";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {