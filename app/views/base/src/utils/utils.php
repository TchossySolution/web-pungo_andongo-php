<?php


function getAuthorName($data)
{
  include_once('../utils/utils.php');
  $author_id = $data['author_id'];
  $author_name = "";

  $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
  $get_author->execute();

  foreach ($get_author as $author) :
    $author_name = $author['name_author'];
  endforeach;

  return $author_name;
}