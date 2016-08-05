<html>
  <?php
    include('../styling.php');
    // Parse the query string
    $queryArray = explode('=', $_SERVER['QUERY_STRING']);
    $qstring = $queryArray[1];
  ?>
  <body>
    <?php
      // conditional for different query strings
      if ($qstring == 'client') {
        echo "<form action='./create.php' method='POST'>
          <input name='client-name' type='text' placeholder='enter client name' />
          <input type='submit' />
          </form>";
      }
      else if ($qstring == 'section') {
        echo "<form action='./create.php' method='POST'>
          <input name='section-name' type='text' placeholder='enter section name' />
          <input name='client-id' type='text' placeholder='belongs to client #' />
          <input type='submit' />
        </form>";
      }
      else if ($qstring == 'link') {
        echo "<form action='./create.php' method='POST'>
          <input name='link-name' type='text' placeholder='enter link name' />
          <input name='section-id' type='text' placeholder='belongs to section #' />
          <input type='submit' />
        </form>";
      }
    ?>
  </body>
</html>