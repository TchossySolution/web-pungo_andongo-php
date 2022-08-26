<?php

include_once('../db/config.php');

if (isset($_POST['add_authors'])) {

  echo 'add_authors';

  $name_author = $_POST['name_author'];
  $title_author = $_POST['title_author'];
  $description_author = $_POST['description_author'];
  $date_create = date('d-m-Y');
  $date_update =  date('d-m-Y');

  $sql = $pdo->prepare("INSERT INTO author values(null,?,?,?,?,?)");

  if ($sql->execute(array($name_author, $title_author, $description_author, $date_create, $date_update))) {
    header('Location: http://localhost/web-pungo-andongo-php/dashboard/authors');
  } else {
    header('Location: http://localhost/web-pungo-andongo-php/dashboard/');
  };
};