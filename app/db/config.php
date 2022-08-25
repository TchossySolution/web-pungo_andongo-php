<?php
// CONFIGURAÇÕES GERAIS
  $dbHost = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "pungo_andongo";

  //  CONEXÃO
  $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword );

?>