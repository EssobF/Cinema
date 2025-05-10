<?php

$db_server="franck.zabou.xyz";
$user="franck";
$pass="ARETIRER6PEMcbfBb0uDsOEtybTH";
$db_name="Cinema";


try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>

?>