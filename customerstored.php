<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Storage</title>
  </head>
  <body>
    <div class="bg">
      <h1>Procedure</h1>
      <table>
        <hr>
        <tr>
          <th>Customer ID</th>
          <br>
          <th>Gallery ID</th>
          <br>
          <th>First Name</th>
          <th>Last Name</th>
          <br>
          <th>Date of Birth</th>
          <br>
          <th>Address</th>
          <br>
          <th>Phone</th>
        </tr>
      </table>
    </div>

    <?php
      $host="localhost";
      $username="root";
      $password="";
      $databasename="art_gallery";

      $connect= mysql_connect($host, $username, $password, $databasename);
      $sql = "SELECT * from CUSTOMER";
      mysqli_query($connect,$sql);


      if ($result = mysqli_query($connect, "$sql")){
        while($row = $results->fetch_assoc()){
          echo "<tr><td>" .$row["cust_id"]. "</td><td>" .$row["g_id"]. "</td><td>" .$row["f_name"]. "</td><td>" .$row["l_name"]. "</td><td>" .$row["dob"]. "</td><td>" .$row["address"]. "</td><td>" .$row["phone"]. "</td></tr>";
        }
        echo "</table>";
      }
      else{
        echo "0 results";
      }
     ?>
  </body>
</html>
