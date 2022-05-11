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
      // $host="localhost";
      // $username="root";
      // $password="";
      // $databasename="eaedgington_artgallery";

      $connect= mysqli_connect("localhost", "eaedgington", "", "eaedgington_artgallery");
      if($connect->connect_error){
        die("Connection Failed: " .$connect->connect_error);
      }
      $sql = "SELECT * from customer";
      mysqli_query($connect,$sql);

      if ($result = mysqli_query($connect, "$sql")){
        while($row = $results->fetch_assoc()){
          echo
          "<tr><td>"
              .$row["cust_id"].
          "</td><td>"
              .$row["g_id"].
          "</td><td>"
              .$row["f_name"].
          "</td><td>"
              .$row["l_name"].
          "</td><td>"
              .$row["dob"].
          "</td><td>"
              .$row["address"].
          "</td><td>"
              .$row["phone"]. 
          "</td></tr>";
        }
        echo "</table>";
      }
      else{
        echo "0 results";
      }
      $con->close();
     ?>
  </body>
</html>
