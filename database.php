<?php
  $server = "localhost";
  $username = "eaedgington";
  $password = "";
  $dbname = "eaedgington_artgallery";

  try{
    $db = new PDO(
      "mysql:host=$server;dbname=$dbname",
      $username,
      $password
    );
    echo "it worked!";
  }

  catch( PDOException $e ){
    echo $e->getMessage();
    die();
  }
?>
