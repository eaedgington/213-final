<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gallery Storage</title>
  </head>
  <body>
    <div class="bg">
      <h1>Procedure</h1>
      <table>
        <tr>
          <th>Gallery ID</th>
          <th>Gallery Name</th>
          <th>Gallery Location</th>
        </tr>
      </table>
    </div>

    <?php
      $host="localhost";
      $username="root";
      $password="";
      $databasename="art_gallery";

      $connect= mysql_connect($host, $username, $password, $databasename);
      echo "Creating Stored Procedure..."

      if ($result = mysqli_query($connect, "CALL display1()")){
        while($row = $results->fetch_assoc()){
          echo "<tr><td>" .$row["g_id"]. "</td><td>" .$row["g_name"]. "</td><td>" .$row["location"]. "</td></tr>";
        }
        echo "</table>";
      }
      else{
        echo "0 results";
      }
     ?>
  </body>
</html>
