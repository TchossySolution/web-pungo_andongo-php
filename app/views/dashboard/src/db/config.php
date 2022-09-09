<?php

$mode = 'local';

if ($mode == 'local') {
  $dbHost = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "pungo_andongo";
}
if ($mode == 'producao') {
  $dbHost = "localhost";
  $dbUsername = "jornangr_adm_tchossy";
  $dbPassword = "adm_tchossy123";
  $dbName = "jornangr_pungo_andongo";
}
try {
  $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Conectado com sucesso!";
} catch (PDOException $erro) {
  echo "Falha ao se conectar com o banco da dados" . $erro->getMessage()();
}