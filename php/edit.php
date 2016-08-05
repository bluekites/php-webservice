<html>
  <?php
    include('../styling.php');
    // Parse the query string
    $queryArray = explode('=', $_SERVER['QUERY_STRING']);
    $qstring = $queryArray[0];
    $id = $queryArray[1];
  ?>
  <body>
    <?php
      if ($qstring == 'clientid') {
        echo "<form action='./update.php' method='POST'>
          <input name='client-name' type='text' placeholder='enter client name' />
          <input name='id' type='hidden' value=$id />
          <input type='submit' />
        </form>";
      }
      else if ($qstring == 'sectionid') {
         echo "<form action='./update.php' method='POST'>
          <input name='section-name' type='text' placeholder='enter section name' />
          <input name='client-id' type='text' placeholder='belongs to client #'' />
          <input name='id' type='hidden' value=$id />
          <input type='submit' />
        </form>";
      }
      else if ($qstring == 'linkid') {
        echo "<form action='./update.php' method='POST'>
          <input name='link-name' type='text' placeholder='enter link name' />
          <input name='section-id' type='text' placeholder='belongs to section #' />
          <input name='id' type='hidden' value=$id />
          <input type='submit' />
        </form>";
      }
    ?>
  </body>
</html>