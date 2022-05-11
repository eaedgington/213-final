<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search the Gallery</title>
  </head>
  <body>
    <div class="bg">
      <h1>Search from the Art Gallery</h1>

      <form action="gallerysearch.php" method="GET">
        <table>
          <tr>
            <td><input type="text" name="searching" value="<?php echo isset($_GET['s']) ? $_GET['searching'] : ''; ?>" placeholder="Enter your search"/></td>
            <td><input type="submit" name="" value="Search">SEARCH</button></td>
          </tr>
        </table>
      </form>
    </div>


<?php
$host="localhost";
$username="eaedgington";
$password="";
$databasename="eaedgington_artgallery";

  // checking to see if the keywords were provided in the search
  if (isset($_GET['searching']) && $_GET['searching'] != ''){

    //save the keywords for the url
    $searching = trim($_GET['searching']);

    //create a base query and words string
    $query_string = "SELECT * FROM art_gallery WHERE ";
    $display_words .="";

    //seperate each of the keywords
    $keywords = explode(' ', $searching);
    foreach($keywords as $word){
      $query_string .= " keywords LIKE '%".$word."%' OR ";
      $display_words .= $word." ";
    }
    $query_string = substr($query_string, 0, strlen($query_string) - 3);

    //connect to the database
    $connect= mysql_connect($host, $username, $password, $databasename);

    $query = mysqli_query($connect, $query_string);
    $result_count = mysqli_num_rows($query);

    //check to see if any results were returned
    if($result_count > 0){
      //display search results count to user
      echo '<div><b>'.$result_count.'</b> results found</div>';
      echo 'Your search for <i>' .$display_words.'</i><hr /><br />';

      echo '<table class="search">';

      //display all search results to the user
      while($row = mysqli_fetch_assoc($query)){

        echo '<tr>
                <td>'.$row['artwork']'</td>
              </tr>
              <tr>
                <td>'.$row['artist']'</td>
              </tr>
              <tr>
                <td>'.$row['gallery']'</td>
              </tr>
              <tr>
                <td>'.$row['customer']'</td>
        </tr>';
      }
      echo '</table>';
    }
    else
      echo 'No results found for your seach. Try something else.';
  }
  else
    echo '';
 ?>

  </body>
</html>
