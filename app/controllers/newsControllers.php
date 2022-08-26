<?php

include_once('../db/config.php');

if (isset($_POST['add_category'])) {

  echo 'add_category';

  $title_news = $_POST['title_news'];
  $resume_news = $_POST['resume_news'];
  $author_id = $_POST['author_id'];
  $category_id = $_POST['category_id'];
  $description_news = $_POST['descripton_news'];
  $epigraph_news = $_POST['epigraph_news'];
  $image_news = $_POST['image_news'];
  $description_image_news = $_POST['description_image_news'];
  $photography_news = $_POST['photography_news'];
  $reading_time_news = $_POST['reading_time_news'];
  $date_create = date('d-m-Y');
  $date_update =  date('d-m-Y');

  $sql = $pdo->prepare("INSERT INTO news values(null,?,?,?,?,?,?,?,?,?,?,?,?)");

  if ($sql->execute(array(
    $title_news,
    $resume_news,
    $author_id,
    $category_id,
    $description_news,
    $epigraph_news,
    $image_news,
    $description_image_news,
    $photography_news,
    $reading_time_news,
    $date_create,
    $date_update
  ))) {
    header('Location: http://localhost/web-pungo-andongo-php/dashboard/news');
  };
};