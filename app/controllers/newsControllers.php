<?php

include_once('../db/config.php');

if (isset($_POST['create_news'])) {

  // echo "Alguma coisa <br>";
  echo "<a href='https://jornalpungoandongo.ao/dashboard/news'> Voltar </a>";

  $size_max = 2097152; //2MB
  $accept  = array("jpg", "png", "jpeg");
  $extension  = pathinfo($_FILES['image_news']['name'], PATHINFO_EXTENSION);

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

  $newName = "";

  $title_news = $_POST['title_news'];
  $resume_news = $_POST['resume_news'];
  $author_id =  $_POST['author_id'];
  $category_id =  $_POST['category_id'];
  $description_news = $_POST['description_news'];
  $epigraph_news = $_POST['epigraph_news'];
  $author_epigraph_news = $_POST['author_epigraph_news'];
  $image_news =  "";
  $description_image_news = $_POST['description_image_news'];
  $photography_news = $_POST['photography_news'];
  $reading_time_news = $_POST['reading_time_news'];
  $publicity_news   = $_POST['publicity_news'];
  $choose_editors_news   = $_POST['choose_editors_news'];
  $emphasis_news   = $_POST['emphasis_news'];
  $relevant_news = $_POST['relevant_news'];
  $views_news =  0;
  $date_create = $completeDate;
  $date_update =  $completeDate;

  if (empty(trim($title_news)) && empty(trim($description_news))) {
    $password_err = "O titulo e a descrição da noticia são campos obrigatórios.";
    echo "<script>
            alert('O titulo e a descrição da noticia são campos obrigatórios!');
            window.location.href='https://jornalpungoandongo.ao/dashboard/news';
          </script>";
    exit();
  }


  if ($_FILES['image_news']['size'] >= $size_max) {
    echo "<script>
            alert('A imagem excedeu o tamanho máximo de 2MB!');
            window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
          </script>";
    exit();
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
        $image_news = 'https://jornalpungoandongo.ao/app/_imagesDb/' . $newName;
        // echo "Upload realizado com sucesso!";
      } else {
        echo "<script>
                alert('Erro: ao realizar Upload...');
                window.location.href='https://jornalpungoandongo.ao/dashboard/news';
              </script>";
        exit();
      }
    } else {
      echo "<script>
              alert('Erro: Extensão ($extension) não permitido!');
              window.location.href='https://jornalpungoandongo.ao/dashboard/news';
            </script>";
      exit();
    }
  }

  $sql = $pdo->prepare("INSERT INTO news values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

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
    $views_news,
    $date_create,
    $date_update
  ))) {
    echo "<script>
            window.location.href='https://jornalpungoandongo.ao/dashboard/news';
          </script>";
  } else {
    echo "<script>
            window.location.href='https://jornalpungoandongo.ao/ops/nn';
          </script>";
  };
};

if (isset($_POST['delete_news'])) {

  // echo "Alguma coisa <br>";
  echo "<a href='https://jornalpungoandongo.ao/dashboard/news'> Voltar </a>";

  $id = $_POST['id'];

  $sql = $pdo->prepare("DELETE FROM news WHERE id=?");

  if ($sql->execute(array($id))) {
    echo "<script>
            window.location.href='https://jornalpungoandongo.ao/dashboard/news';
          </script>";
  } else {
    header('Location: Location: https://jornalpungoandongo.ao/dashboard/ops/nn');
  };
};

if (isset($_POST['update_news'])) {

  // echo "Alguma coisa <br>";
  echo "<a href='https://jornalpungoandongo.ao/dashboard/news'> Voltar </a>";

  $size_max = 2097152; //2MB
  $accept  = array("jpg", "png", "jpeg");
  $extension  = pathinfo($_FILES['image_news']['name'], PATHINFO_EXTENSION);

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


  $suplente_img = $_POST['suplente_img'];
  $newName = "";
  $image_old_error_news = $_FILES['image_news']["error"];

  $title_news = $_POST['title_news'];
  $resume_news = $_POST['resume_news'];
  $author_id =  filter_input(INPUT_POST, 'author_id');
  $image_news = "";
  $category_id =  filter_input(INPUT_POST, 'category_id');
  $description_news = $_POST['description_news'];
  $epigraph_news = $_POST['epigraph_news'];
  $author_epigraph_news = $_POST['author_epigraph_news'];
  $description_image_news = $_POST['description_image_news'];
  $photography_news = $_POST['photography_news'];
  $reading_time_news = $_POST['reading_time_news'];
  $publicity_news   = $_POST['publicity_news'];
  $choose_editors_news   = $_POST['choose_editors_news'];
  $emphasis_news   = $_POST['emphasis_news'];
  $relevant_news = $_POST['relevant_news'];
  $date_update =  $completeDate;
  $id = $_POST['id'];

  if (empty(trim($title_news)) or empty(trim($description_news))) {
    $password_err = "O titulo e a descrição da noticia são campos obrigatórios.";
    echo "<script>
            alert('O titulo e a descrição da noticia são campos obrigatórios!');
            window.location.href='https://jornalpungoandongo.ao/dashboard/news';
          </script>";
    exit();
  }

  if ($image_old_error_news > 0) {
    $image_news = $suplente_img;
  } else {

    if ($_FILES['image_news']['size'] >= $size_max) {
      echo "<script>
              alert('Arquivo excedeu o tamanho máximo de 2MB ');
              window.location.href='https://jornalpungoandongo.ao/dashboard/news';
            </script>";
      exit();
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
          $image_news = 'https://jornalpungoandongo.ao/app/_imagesDb/' . $newName;

          echo "Upload realizado com sucesso!";
        } else {
          echo "<script>
                  alert('Erro: ao realizar Upload... ');
                  window.location.href='https://jornalpungoandongo.ao/dashboard/news';
                </script>";

          exit();
        }
      } else {
        echo "Erro: Extensão ($extension) não permitido<br>";
        echo "<a href='https://jornalpungoandongo.ao/dashboard/news'> Voltar </a>";

        exit();
      }
    }
  }

  $sql = $pdo->prepare("UPDATE news SET title_news=?, resume_news=?, author_id=?, category_id=?, description_news=?, epigraph_news=?, author_epigraph_news=?, image_news=?, description_image_news=?, photography_news=?, reading_time_news=?, publicity_news=?, choose_editors_news=?, emphasis_news=?, relevant_news=?, date_update=? WHERE id=?");

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
    $date_update,
    $id
  ))) {
    echo "<script>
              alert('Noticia atualizada com sucesso!');
              window.location.href='https://jornalpungoandongo.ao/dashboard/news';
            </script>";
  } else {
    header('Location: Location: https://jornalpungoandongo.ao/ops/nn');
  };
};