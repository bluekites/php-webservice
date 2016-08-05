<?php
  // define the database connection variables
  $server = "localhost";
  $username = "bluekites";
  $password = "";
  $db = "fusion_of_ideas";
  
  // connecting to the database
  $dbconnection = mysqli_connect($server, $username, $password, $db);
  mysqli_set_charset($dbconnection, 'utf8');
  
  // checking for database connection here in case of error
  if (!$dbconnection) {
    die("connection failed! " . mysqli_connect_error());
  } else {
    echo "Connected to the database! <br/>";
  }
?>