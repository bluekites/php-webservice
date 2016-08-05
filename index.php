<html lang="en">
  <meta charset="UTF-8">
  <title>Fusion of Ideas</title>
  <?php include('./styling.php')?>
  <body>
    <div class="container">
    <h1>Fusion of Ideas API</h1>
    <hr class="alt1">
    <?php
        // import connect.php
        include('./php/connect.php');
        
        // get server requests
        $method = $_SERVER['REQUEST_METHOD'];
        $request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
    
        // store query into a variable
        $client_query = "SELECT * FROM client";
        // connect to the database and make the query
        $client_result = mysqli_query($dbconnection, $client_query);
        // check to see if result has been returned
        echo "<h3>Client List</h3>";
        echo "<a href='./php/new.php?type=client' class='button blue'>New Client Post</a><br/>";
        if (mysqli_num_rows($client_result) > 0) {
          //output data table
          echo "<table class='tight'><tr><th>ID</th><th>Name</th><th>Update</th><th>Delete</th>";
          while ($row = mysqli_fetch_assoc($client_result)) {
            $clientid = $row['id'];
            echo "<tr><td>" . $clientid . "</td><td>" . $row["name"]  . "</td><td><a href='./php/edit.php?clientid=$clientid'>Update</a></td><td><a href='./php/delete.php?clientid=$clientid'>Delete</a></td></tr>";
          }
          echo "</table>";
        } else {
          echo "No results found.";
        }
        
        $section_query = "SELECT * FROM section";
        $section_result = mysqli_query($dbconnection, $section_query);
        echo "<h3>Section List</h3>";
        echo "<a href='.php/new.php?type=section' class='button blue'>New Section Post</a><br/>";
        if (mysqli_num_rows($section_result) > 0) {
          echo "<table class='tight'><tr><th>ID</th><th>Section Name</th><th>Belongs to Client</th><th>Update</th><th>Delete</th>";
          while($row = mysqli_fetch_assoc($section_result)) {
            $sectionid = $row['id'];
            echo "<tr><td>" . $sectionid . "</td><td>" . $row['name'] . "</td><td>" . $row['client_id'] . "</td><td><a href='./php/edit.php?sectionid=$sectionid'>Update</a></td><td><a href='./php/delete.php?sectionid=$sectionid'>Delete</a></td></tr>";
          }
          echo "</table>";
        } else {
          echo "No results found. <br/>";
        }
        
        $link_query = "SELECT * FROM link";
        $link_result = mysqli_query($dbconnection, $link_query);
        echo "<h3>Link List</h3>";
        echo "<a href='./php/new.php?type=link' class='button blue'>New Link Post</a><br/>";
        if (mysqli_num_rows($link_result) > 0) {
          echo "<table class='tight'><tr><th>ID</th><th>Link Name</th><th>Belongs to Section</th><th>Update</th><th>Delete</th>";
          while($row = mysqli_fetch_assoc($link_result)) {
            $linkid = $row['id'];
            echo "<tr><td>" . $linkid . "</td><td>" . $row['name'] . "</td><td>" . $row['section_id'] . "</td><td><a href='./php/edit.php?linkid=$linkid'>Update</a></td><td><a href='./php/delete.php?linkid=$linkid'>Delete</a></td>";
          }
          echo "</table>";
        } else {
          echo "No results found. <br/>";
        }
  
        
        // close the MySQL connection
        mysqli_close($dbconnection);
      ?>
      <hr class="alt1">
      </div>
  </body>
</html>