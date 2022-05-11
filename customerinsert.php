<?php
$host="localhost";
$username="root";
$password="";
$databasename="art_gallery";

  if (isset($_POST['cust_id']) && isset($_POST['g_id']) && isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['dob']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['art_id']) ):
      $cust_id = $_POST['cust_id'];
      $g_id = $_POST['g_id'];
      $f_name = $_POST['f_name'];
      $l_name = $_POST['l_name'];
      $dob = $_POST['dob'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
      $art_id = $_POST['art_id'];

      $connect= mysql_connect($host, $username, $password, $databasename);

  if($link->connect_error)
    die('connection error: '.$link->connect_error);

  $message = "INSERT INTO customer(cust_id, g_id, art_id, f_name, l_name, dob, address, phone) VALUES ('".$cust_id."', '".$g_id."', '".$art_id."', '".$f_name."', '".$l_name."', '".$dob."', '".$address."', '".$phone."')";

  $result = $link->query($message);

 ?>
