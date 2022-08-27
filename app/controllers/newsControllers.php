<?php

include_once('../db/config.php');

if (isset($_POST['create_news'])) {

  echo 'add_news';

  $size_max = 2097152; //2MB
  $accept  = array("jpg", "png", "jpeg");
  $extension  = pathinfo($_FILES['image_news']['name'], PATHINFO_EXTENSION);

  // $dateNew = date('d-m-Y H:i:s');
  // $dateNewComplete = "../_imageDB/date-$dateNew/";

  if ($_FILES['image_news']['size'] >= $size_max) {
    echo "Arquivo excedeu o tamanho máximo de 2MB";
  } else {
    if (in_array($extension, $accept)) {
      // echo "Permitido";
      $folder = "../_imagesDb/";

      if (!is_dir($folder)) {
        mkdir($folder, 755, true);
      }

      // Nome temporário do arquivo
      $tmp = $_FILES['image_news']['tmp_name'];
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


  $title_news = $_POST['title_news'];
  $resume_news = $_POST['resume_news'];
  $author_id = $_POST['author_id'];
  $category_id = $_POST['category_id'];
  $description_news = $_POST['description_news'];
  $epigraph_news = $_POST['epigraph_news'];
  $author_epigraph_news = $_POST['author_epigraph_news'];
  $image_news =  'http://localhost/web-pungo-andongo-php/app/_imagesDb/' . $newName;
  $description_image_news = $_POST['description_image_news'];
  $photography_news = $_POST['photography_news'];
  $reading_time_news = $_POST['reading_time_news'];
  $publicity_news   = $_POST['publicity_news'];
  $choose_editors_news   = $_POST['choose_editors_news'];
  $emphasis_news   = $_POST['emphasis_news'];
  $relevant_news = $_POST['relevant_news'];
  $date_create = date('d-m-Y');
  $date_update =  date('d-m-Y');

  $sql = $pdo->prepare("INSERT INTO news values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

  if ($sql->execute(array(
    $title_news,
    $resume_news,
    $author_id,
    $category_id,
    $description_news,
    $epigraph_news,
    $author_epigraph_news,
    $image_news,
    $description_image_news,
    $photography_news,
    $reading_time_news,
    $publicity_news,
    $choose_editors_news,
    $emphasis_news,
    $relevant_news,
    $date_create,
    $date_update
  ))) {
    header('Location: http://localhost/web-pungo-andongo-php/dashboard/news');
  } else {
    header('Location: http://localhost/web-pungo-andongo-php/dashboard/');
  };
};

if (isset($_POST['delete_news'])) {
};

if (isset($_POST['update_news'])) {
};