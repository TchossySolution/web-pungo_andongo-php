<?php

include_once('../db/config.php');

if (isset($_POST['create_author'])) {

  echo 'add_authors';

  $data = date('D');
  $mes = date('M');
  $dia = date('d');
  $ano = date('Y');

  $semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
  );

  $mes_extenso = array(
    'Jan' => 'Janeiro',
    'Feb' => 'Fevereiro',
    'Mar' => 'Marco',
    'Apr' => 'Abril',
    'May' => 'Maio',
    'Jun' => 'Junho',
    'Jul' => 'Julho',
    'Aug' => 'Agosto',
    'Nov' => 'Novembro',
    'Sep' => 'Setembro',
    'Oct' => 'Outubro',
    'Dec' => 'Dezembro'
  );

  $name_author = $_POST['name_author'];
  $title_author = $_POST['title_author'];
  $description_author = $_POST['description_author'];
  $date_create =   $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";;
  $date_update =    $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";;

  $sql = $pdo->prepare("INSERT INTO author values(null,?,?,?,?,?)");

  if ($sql->execute(array($name_author, $title_author, $description_author, $date_create, $date_update))) {
    header('Location: http://localhost/web-pungo-andongo-php/dashboard/authors');
  } else {
    header('Location: http://localhost/web-pungo-andongo-php/dashboard/');
  };
};

if (isset($_POST['delete_author'])) {
};

if (isset($_POST['update_author'])) {
};