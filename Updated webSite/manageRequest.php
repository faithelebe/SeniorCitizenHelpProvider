<?php
session_start();
$usernameSenior = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/
	bootstrap.min.css" integrity="
	sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="
	anonymous">
	 </head>
	 <title>Manage Request</title>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
	 <!--Bootstrap-->
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="SignUp.css" rel="stylesheet">
	   <script src="show1.js"></script>
	    <script src="show2.js"></script>
	    <body>
      <!--Include JQuery: necessary for Bootstrap plugins-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!--Include bootstrap library as needed-->
      <script src="js/bootstrap.min.js"></script>
      <style>
         body, html {
         	height: 100%;
         font-family: "Inconsolata", sans-serif;
         font-size: 100%;
         font-color: white;
         }
         .bgimg {
         background-position: center;
         background-size: cover;
         background-image: url("https://www.luxuryww.com/wp-content/uploads/2018/04/181746-saiba-como-escolher-a-melhor-viagem-para-criancas-e-idosos.jpg");
         min-height: 100%;
         opacity:0.6;
         }
         }
         .menu {
         display: none;
         }
         /* Bordered form */
         .requestDiv{
           height:380px;
           padding: 20px;
           padding-left:6%;
           border: 1px solid;
           margin: 0 auto;
           width: 30%;
           background: #4e54c8;  /* fallback for old browsers */