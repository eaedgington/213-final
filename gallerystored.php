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
      // $host="localhost";
      // $username="root";
      // $password="";
      // $databasename="eaedgington_artgallery";

      $connect= mysqli_connect("localhost", "root", "", "eaedgington_artgallery");
      if($connect->connect_error){
        die("Connection Failed: " .$connect->connect_error);
      }
      $sql = "SELECT * from gallery";
      mysqli_query($connect,$sql);
      if ($result = mysqli_query($connect, $sql)){
        while($row = $results->fetch_assoc()){
          echo
          "<tr><td>"
              .$row["g_id"].
          "</td><td>"
              .$row["g_name"]. 
          "</td><td>"
              .$row["location"].
          "</td></tr>";
        }
        echo "</table>";
      }
      else{
        echo "0 results";
      }
      $connect->close();
     ?>
  </body>
</html>
