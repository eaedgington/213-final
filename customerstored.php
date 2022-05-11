<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Storage</title>
  </head>
  <body>
    <?php require("database.php"); ?>
    <h1>Customer Database</h1>
    <div class="bg">
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
      <?php
        $sql =
          "SELECT f_name, l_name, address, dob
          from customer
          JOIN artwork
          using (art_id)
          ORDER BY cust_id DESC";
        $statement = $db->prepare($sql);
        $statement->execute();
        $custs = $statement->fetchAll();
        foreach( $custs as $cust )
       ?>

       <!-- cust_id,g_id,art_id,f_name,l_name,address,dob -->
      <div class="customer-body">
        <tr>
          <td>
            <?php echo $cust['f_name']; ?>
          </td>
          <td>
            <?php echo $cust['l_name']; ?>
          </td>
          <td>
            <?php echo $cust['address']; ?>
          </td>
          <td>
            <?php echo $cust['dob']; ?>
          </td>
          <td>
          <?php echo $cust['art_id']; ?>
      </div>
      <?php endforeach; ?>

    </div>
  </body>
</html>
