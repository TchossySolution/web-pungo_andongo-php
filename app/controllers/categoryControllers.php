<?php

include_once('../db/config.php');

if (isset($_POST['add_category'])) {

  echo 'add_category';

  $name_category = $_POST['name_category'];
  $date_create = date('d-m-Y');
  $date_update =  date('d-m-Y');

  $sql = $pdo->prepare("INSERT INTO categories values(null,?,?,?)");

  if ($sql->execute(array($name_category, $date_create, $date_update))) {
    header('Location: http://localhost/web-pungo-andongo-php/dashboard/categories');
  };
};