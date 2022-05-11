<?php
$host="localhost";
$username="eaedgington";
$password="";
$databasename="eaedgington_artgallery";

  if (isset($_POST['g_id']) && isset($_POST['g_name']) && isset($_POST['location'])):
      $g_id = $_POST['g_id'];
      $g_name = $_POST['g_name'];
      $location = $_POST['location'];

      $connect= mysql_connect($host, $username, $password, $databasename);

  if($link->connect_error)
    die('connection error: '.$link->connect_error);

  $message = "INSERT INTO gallery(g_id, g_name, location) Values('".$g_id."', '".$g_name."', '".$location."')";

  $result = $link->query($message);

 ?>
