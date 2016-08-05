<?php
  // import connect.php
  include('connect.php');
  
  // get server requests
  $method = $_SERVER['REQUEST_METHOD'];
  $request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
  
  // DELETE Route using query strings and http methods
  // Parse the query string
  $queryArray = explode('=', $_SERVER['QUERY_STRING']);
  $qstring = $queryArray[0];
  $id = $queryArray[1];
  
  // reusable delete function
  function delete($dbconnection, $q) {
    if(mysqli_query($dbconnection, $q)){
      echo "deleted";
    } else {
      echo "Error deleting record: " . mysqli_error($dbconnection);
    }
  }
  // client delete
  if ($qstring == 'clientid') {
    $query = "DELETE FROM client WHERE id='$id'";
    delete($dbconnection, $query);
  }
  // section delete
  else if ($qstring == 'sectionid') {
    $query = "DELETE FROM section WHERE id='$id'";
    delete($dbconnection, $query);
  }
  // link delete
  else if ($qstring == 'linkid') {
    $query = "DELETE FROM link WHERE id='$id'";
    delete($dbconnection, $query);
  }
  
  // close the MySQL connection
  mysqli_close($dbconnection);
  // redirect to view
  header('Location: ../index.php');
  die();
?>
  