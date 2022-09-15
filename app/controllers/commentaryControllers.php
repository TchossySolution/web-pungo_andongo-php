<?php

include_once('../db/config.php');

if (isset($_POST['send_comments'])) {

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

  $user_id = $_POST['user_id'];
  $news_id = $_POST['news_id'];
  $comment = $_POST['comment'];
  $is_approved = $_POST['is_approved'];
  $date_create = $completeDate;
  $date_update =  $completeDate;

  // echo $user_id . '<br>';
  // echo $news_id . '<br>';
  // echo $comment . '<br>';
  // echo $is_approved;

  if (empty(trim($user_id))) {
    echo "<script>
              alert('Por favor faça o login para que possa comentar!');
              window.location.href='http://jornalpungoandongo.ao/news/detailsNews/$news_id';
            </script>";
    exit();
  }
  if (empty(trim($news_id))) {
    echo "<script>
              alert('Não foi possível identificar está noticia!');
              window.location.href='http://jornalpungoandongo.ao/news/1';
            </script>";
    exit();
  }
  if (empty(trim($comment))) {
    echo "<script>
              alert('Por favor preencha o campo da mensagem!');
              window.location.href='http://jornalpungoandongo.ao/news/detailsNews/$news_id';
            </script>";
    exit();
  }

  $sql = $pdo->prepare("INSERT INTO comments values(null,?,?,?,?,?,?)");

  if ($sql->execute(array($user_id, $news_id, $comment, $is_approved, $date_create, $date_update))) {
    echo "<script>
              window.location.href='http://jornalpungoandongo.ao/news/detailsNews/$news_id';
            </script>";
  } else {
    header('Location: http://jornalpungoandongo.ao/ops/nn');
  };
};

if (isset($_POST['delete_comments'])) {
  echo 'delete_comments';

  $id = $_POST['id'];

  $sql = $pdo->prepare("DELETE FROM comments WHERE id=?");

  if ($sql->execute(array($id))) {
    echo "<script>
              window.location.href='http://jornalpungoandongo.ao/news/detailsNews/$news_id';
            </script>";
  } else {
    echo "<script>
              window.location.href='http://jornalpungoandongo.ao/dashboard/ops/nn';
            </script>";
  };
};