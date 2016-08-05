<?php
  // import connect.php
  include('connect.php');
  
  // get server requests
  $method = $_SERVER['REQUEST_METHOD'];
  
  // redirect function
  function redirect() {
    mysqli_close($dbconnection);
    header("Location: ../index.php");
    die();
  }
  
  // conditional to go into different updates
  if ($_POST['client-name']) {
    $clientName = $_POST['client-name'];
    $id = $_POST['id'];
    $query = "UPDATE client SET name='$clientName' WHERE id='$id'";
    $result = mysqli_query($dbconnection, $query);
    if ($result) {
      redirect();
    } 
    else {
      echo "Error updating record: " . mysqli_error($dbconnection);
    }
  } 
  else if ($_POST['section-name'] && $_POST['client-id']) {
    $sectionName = $_POST['section-name'];
    $clientID = $_POST['client-id'];
    $id = $_POST['id'];
    $query = "UPDATE section SET name='$sectionName', client_id='$clientID' WHERE id='$id'";
    $result = mysqli_query($dbconnection, $query);
    if ($result) {
      redirect();
    } 
    else {
      echo "Error updating record: " . mysqli_error($dbconnection);
    }
  } 
  else if ($_POST['link-name'] && $_POST['section-id']) {
    $linkName = $_POST['link-name'];
    $sectionID = $_POST['section-id'];
    $id = $_POST['id'];
    $query = "UPDATE link SET name='$linkName', section_id='$sectionID' WHERE id='$id'";
    $result = mysqli_query($dbconnection, $query);
    if ($result) {
      redirect();
    } 
    else {
      echo "Error updating record: " . mysqli_error($dbconnection);
    }
  }
?>

