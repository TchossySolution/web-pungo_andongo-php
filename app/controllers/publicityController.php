<?php

include_once('../db/config.php');

if (isset($_POST['create_publicity'])) {

  echo 'add_publicity';

  $size_max = 2097152; //2MB
  $accept  = array("jpg", "png", "jpeg");
  $extension  = pathinfo($_FILES['image_publicity']['name'], PATHINFO_EXTENSION);

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

  $completeDate =  $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";

  // $dateNew = date('d-m-Y H:i:s');
  // $dateNewComplete = "../_imageDB/date-$dateNew/";

  if ($_FILES['image_publicity']['size'] >= $size_max) {
    echo "Arquivo excedeu o tamanho máximo de 2MB";
  } else {
    if (in_array($extension, $accept)) {
      // echo "Permitido";
      $folder = "../_imagesDb/publicity/";

      if (!is_dir($folder)) {
        mkdir($folder, 755, true);
      }

      // Nome temporário do arquivo
      $tmp = $_FILES['image_publicity']['tmp_name'];
      // Novo nome do arquivo
      $newName = "img_news-" . date('d-m-Y') . '-' . date('H') . 'h-' . uniqid() . ".$extension";

      if (move_uploaded_file($tmp, $folder . $newName)) {
        echo "Upload realizado com sucesso!";
      } else {
        echo "Erro: ao realizar Upload...";
      }
    } else {
      echo "Erro: Extensão ($extension) não permitido";
    }
  }

  $image_publicity =  'http://localhost/web-pungo-andongo-php/app/_imagesDb/publicity/' . $newName;
  $link_publicity = $_POST['link_publicity'];
  $date_create = $completeDate;
  $date_expire =   $_POST['date_expire'];

  $sql = $pdo->prepare("INSERT INTO publicity values(null,?,?,?,?)");

  if ($sql->execute(array(
    $image_publicity,
    $link_publicity,
    $date_create,
    $date_expire
  ))) {
    header('Location: http://jornalpungoandongo.ao/publicity');
  } else {
    header('Location: http://jornalpungoandongo.ao/');
  };
};

if (isset($_POST['delete_news'])) {
};

if (isset($_POST['update_news'])) {
};