<?php
$host="localhost";
$username="root";
$password="";
$databasename="art_gallery";

  if (isset($_POST['G_ID']) && isset($_POST['G_NAME']) && isset($_POST['LOCATION'])):
      $g_id = $_POST['G_ID'];
      $g_name = $_POST['G_NAME'];
      $location = $_POST['LOCATION'];

      $connect= mysql_connect($host, $username, $password, $databasename);

  if($link->connect_error)
    die('connection error: '.$link->connect_error);

  $message = "INSERT INTO gallery(g_id, g_name, location) Values('".$g_id."', '".$g_name."', '".$location."')";

  $result = $link->query($message);

 ?>
