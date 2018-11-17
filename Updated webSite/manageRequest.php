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
           background: -webkit-linear-gradient(to right, #8f94fb, #4e54c8);  /* Chrome 10-25, Safari 5.1-6 */
           background: linear-gradient(to right, #8f94fb, #4e54c8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }
         /* Full-width inputs */
         input[type=text], input[type=password] {
         width: 50%;
         padding: 12px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         box-sizing: border-box;
         align-content: center;
         }
         /* Set a style for all buttons */
         button {
         background-color: black;
         color: white;
         padding: 8px 12px;
         margin: 8px 0;
         border: none;
         cursor: pointer;

         }
         /* Add a hover effect for buttons */
         button:hover {
         opacity: 0.8;
         }
         /* Extra style for the cancel button (red) */
         .cancelbtn {
         width: auto;
         padding: 10px 18px;
         background-color: #f44336;
         }
         /* Center the avatar image inside this container */
         .imgcontainer {
         text-align: center;
         margin: 24px 0 12px 0;
         }
         /* Avatar image */
         img.avatar {
         width: 10%;
         border-radius: 20%;
         }
         /* Add padding to containers */
         .container {
         margin-top: 13px;
         margin-bottom: 13px; margin-left: 13px; margin-right: px;
         text-align: center;
         background-color: #5A8A87;
         width: 60%;
         font-size: 200%;
         color: white;

         }
         .pendingServices{
         margin:13px;
         padding: 5px;
         }
         /* The "Forgot password" text */
         span.psw {
         float: right;
         padding-top: 16px;
         }
         /* Change styles for span and cancel button on extra small screens */
         @media screen and (max-width: 50px) {
         span.psw {
         display: block;
         float: none;
         }
         .cancelbtn {
         width: 50%;
         }
         }
      </style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       </head>
      <body>
         <!-- Links (sit on top) -->
         <div class="w3-top">
            <div class="w3-row w3-padding w3-black">
               <div class="w3-col s3">