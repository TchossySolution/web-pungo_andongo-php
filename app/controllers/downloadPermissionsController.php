<?php

// date_default_timezone_set('Africa/Casablanca');

include_once('../db/config.php');

if (isset($_POST['add_downloadPermissions'])) {

  $email_permissions = $_POST['email_permissions'];
  $type_permissions = $_POST['type_permissions'];
  $time_permissions = $_POST['time_permissions'];

  $dateExpired = date('Y-m-d');

  $dateExpired = date('Y-m-d', strtotime($dateExpired . ' + ' . $time_permissions . $type_permissions));

  $dateNow = date('Y-m-d');
  $dateNow = strtotime($dateNow);
  $dateNow = date('Y-m-d', $dateNow);

  // echo $dateExpired;
  // echo '<br>';
  // echo $dateNow;
  // echo '<br>';
  // echo $type_permissions;
  // echo '<br>';
  // echo $time_permissions;

  // echo '<br>';
  // var_dump($dateExpired > $dateNow);
  // echo '<br>';

  if ($dateExpired > $dateNow) {
    echo 'Ainda está no prazo';
  } else {
    echo 'Já passou está no prazo';
  }
};