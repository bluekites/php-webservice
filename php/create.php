
<?php
  // import connect.php
  include('connect.php');
  
  // get server requests
  $method = $_SERVER['REQUEST_METHOD'];
  $request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
  
  // redirect function
  function redirect(){
    mysqli_close($dbconnection);
    header("Location: ../index.php");
    die();
  }
  
  //CREATE Route using query strings and http methods
  // store query into a variable
  if ($_POST['client-name']) {
    $client_name = $_POST['client-name'];
    $query = "INSERT INTO client(id, name) VALUES(NULL, '$client_name');";
    $result = mysqli_query($dbconnection, $query);
    if ($result) {
      redirect();
    } else {
      echo "Error creating record: " . mysqli_error($dbconnection);
    }
  }
  
  if ($_POST['client-id'] && $_POST['section-name']) {
    $client_id = $_POST['client-id'];
    $section_name = $_POST['section-name'];
    $query = "INSERT INTO section(id, client_id, name) VALUES(NULL, '$client_id', '$section_name');";
    $result = mysqli_query($dbconnection, $query);
    if ($result) {
      redirect();
    } else {
      echo "Error creating record: " . mysqli_error($dbconnection);
    }
  }
  
  if ($_POST['section-id'] && $_POST['link-name']) {
    $section_id = $_POST['section-id'];
    $link_name = $_POST['link-name'];
    $query = "INSERT INTO link(id, section_id, name) VALUES(NULL, '$section_id', '$link_name');";
    $result = mysqli_query($dbconnection, $query);
    if ($result) {
      redirect();
    } else {
      echo "Error creating record: " . mysqli_error($dbconnection);
    }
  }
  
  echo "New record created.";
?>

 