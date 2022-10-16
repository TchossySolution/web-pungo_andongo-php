<?php

include_once('../db/config.php');

if (isset($_POST['create_newsPaper'])) {

  echo 'Criar Publicidade <br>';

  $size_max_cover = 2097152; //2MB
  $accept_cover  = array("jpg", "png", "jpeg");
  $extension_cover  = pathinfo($_FILES['cover_newsPaper']['name'], PATHINFO_EXTENSION);

  $size_max_pdf = 10097152; //2MB
  $accept_pdf  = array("pdf");
  $extension_pdf  = pathinfo($_FILES['link_newsPaper']['name'], PATHINFO_EXTENSION);

  $data = date('D');
  $mes = date('M');
  $dia = date('d');
  $ano = date('Y');

  $semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terça-Feira',
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

  if ($_FILES['cover_newsPaper']['size'] >= $size_max_cover) {
    echo "<script>
            alert('A capa do jornal excedeu o tamanho máximo de 2MB!');
            window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
          </script>";
    exit();
  } else {
    if (in_array($extension_cover, $accept_cover)) {
      // echo "Permitido";
      $folderNewsPaper = "../_newspaper/covers/";

      if (!is_dir($folderNewsPaper)) {
        mkdir($folderNewsPaper, 755, true);
      }

      // Nome temporário do arquivo
      $tmpNewsPaper = $_FILES['cover_newsPaper']['tmp_name'];
      // Novo nome do arquivo
      $newNameCover = "cover_newsPaper-" . date('d-m-Y') . '-' . date('H') . 'h-' . uniqid() . ".$extension_cover";

      if (move_uploaded_file($tmpNewsPaper, $folderNewsPaper . $newNameCover)) {
        echo "Upload realizado com sucesso! <br>";

        // UPLOAD PDF
        if ($_FILES['link_newsPaper']['size'] >= $size_max_pdf) {
          echo "<script>
                  alert('O jornal em PDF excedeu o tamanho máximo de 2MB!');
                  window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
                </script>";

          exit();
        } else {
          if (in_array($extension_pdf, $accept_pdf)) {
            // echo "Permitido";
            $folderLinkNewsPaper = "../_newspaper/pdf/";

            if (!is_dir($folderLinkNewsPaper)) {
              mkdir($folderLinkNewsPaper, 755, true);
            }

            // Nome temporário do arquivo
            $tmpLinkNewsPaper = $_FILES['link_newsPaper']['tmp_name'];
            // Novo nome do arquivo
            $newNameLinkNewsPaper = "img_news-" . date('d-m-Y') . '-' . date('H') . 'h-' . uniqid() . ".$extension_pdf";

            if (move_uploaded_file($tmpLinkNewsPaper, $folderLinkNewsPaper . $newNameLinkNewsPaper)) {
              echo "Upload realizado com sucesso!";
            } else {
              echo "<script>
                      alert('Erro: ao realizar Upload...!');
                      window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
                    </script>";
              exit();
            }
          } else {
            echo "<script>
                    alert('Erro: Extensão ($extension_pdf) não permitido');
                    window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
                  </script>";
            exit();
          }
        }
      } else {
        echo "<script>
                alert('Erro: ao realizar Upload...!');
                window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
              </script>";
        exit();
      }
    } else {
      echo "<script>
              alert('Erro: Extensão ($extension_cover) não permitido');
              window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
            </script>";
      exit();
    }
  }


  echo "<br> <br> <br>";

  $name_newsPaper = $_POST['name_newsPaper'];
  $description_newsPaper = $_POST['description_newsPaper'];
  $cover_newsPaper =  'https://localhost/web-pungo-andongo-php/app/_newspaper/covers/' . $newNameCover;
  $link_newsPaper =  'https://localhost/web-pungo-andongo-php/app/_newspaper/pdf/' . $newNameLinkNewsPaper;
  $date_newsPaper =   $_POST['date_newsPaper'];
  $date_create = $completeDate;

  $sql = $pdo->prepare("INSERT INTO newspaper values(null,?,?,?,?,?,?)");

  if ($sql->execute(array(
    $name_newsPaper,
    $description_newsPaper,
    $cover_newsPaper,
    $link_newsPaper,
    $date_newsPaper,
    $date_create
  ))) {
    echo "<script>
              alert('Jornal publicado com sucesso!');
              window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
            </script>";
  } else {
    echo "<script>
              alert('Falha ao criar o jornal! ');
              window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
            </script>";
  };
};

if (isset($_POST['delete_newsPaper'])) {

  $id = $_POST['id'];

  $sql = $pdo->prepare("DELETE FROM newspaper WHERE id=?");

  if ($sql->execute(array($id))) {
    echo "<script>
            window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
          </script>";
  } else {
    echo "<script>
            window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
          </script>";
  };
};

if (isset($_POST['update_newsPaper'])) {
  echo 'Atualizar Publicidade <br>';


  $size_max_cover = 2097152; //2MB
  $accept_cover  = array("jpg", "png", "jpeg");
  $extension_cover  = pathinfo($_FILES['cover_newsPaper']['name'], PATHINFO_EXTENSION);

  $size_max_pdf = 10097152; //2MB
  $accept_pdf  = array("pdf");
  $extension_pdf  = pathinfo($_FILES['link_newsPaper']['name'], PATHINFO_EXTENSION);

  $data = date('D');
  $mes = date('M');
  $dia = date('d');
  $ano = date('Y');

  $semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terça-Feira',
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

  $suplente_link = $_POST['suplente_link'];
  $suplente_cover = $_POST['suplente_cover'];

  $link_old_error_news = $_FILES['link_newsPaper']["error"];
  $cover_old_error_news = $_FILES['cover_newsPaper']["error"];

  $name_newsPaper = $_POST['name_newsPaper'];
  $description_newsPaper = $_POST['description_newsPaper'];
  $cover_newsPaper =  '';
  $link_newsPaper =  '';
  $date_newsPaper = $_POST['date_newsPaper'];
  $date_create = $completeDate;

  $id = $_POST['id'];

  // echo 'Sup link -> ' . $suplente_link;
  // echo '<br> Sup cover -> ' . $suplente_cover;
  // echo '<br> link_old_error_news -> ' . $link_old_error_news;
  // echo '<br> cover_old_error_news -> ' . $cover_old_error_news;
  // echo '<br> id -> ' . $id;

  if ($cover_old_error_news > 0) {
    $cover_newsPaper = $suplente_cover;
  } else {
    if ($_FILES['cover_newsPaper']['size'] >= $size_max_cover) {
      echo "<script>
            alert('A capa do jornal excedeu o tamanho máximo de 2MB!');
            window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
          </script>";
      exit();
    } else {
      if (in_array($extension_cover, $accept_cover)) {
        // echo "Permitido";
        $folderNewsPaper = "../_newspaper/covers/";

        if (!is_dir($folderNewsPaper)) {
          mkdir($folderNewsPaper, 755, true);
        }

        // Nome temporário do arquivo
        $tmpNewsPaper = $_FILES['cover_newsPaper']['tmp_name'];
        // Novo nome do arquivo
        $newNameCover = "cover_newsPaper-" . date('d-m-Y') . '-' . date('H') . 'h-' . uniqid() . ".$extension_cover";

        if (move_uploaded_file($tmpNewsPaper, $folderNewsPaper . $newNameCover)) {
          $cover_newsPaper =  'https://localhost/web-pungo-andongo-php/app/_newspaper/covers/' . $newNameCover;

          echo "Upload realizado com sucesso! <br>";
        } else {
          echo "<script>
                alert('Erro: ao realizar Upload...!');
                window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
              </script>";
          exit();
        }
      } else {
        echo "<script>
              alert('Erro: Extensão ($extension_cover) não permitido');
              window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
            </script>";
        exit();
      }
    }
  }

  // UPLOAD PDF
  if ($link_old_error_news > 0) {
    $link_newsPaper = $suplente_link;
  } else {
    if ($_FILES['link_newsPaper']['size'] >= $size_max_pdf) {
      echo "<script>
            alert('O jornal em PDF excedeu o tamanho máximo de 2MB!');
            window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
          </script>";

      exit();
    } else {
      if (in_array($extension_pdf, $accept_pdf)) {
        // echo "Permitido";
        $folderLinkNewsPaper = "../_newspaper/pdf/";

        if (!is_dir($folderLinkNewsPaper)) {
          mkdir($folderLinkNewsPaper, 755, true);
        }

        // Nome temporário do arquivo
        $tmpLinkNewsPaper = $_FILES['link_newsPaper']['tmp_name'];
        // Novo nome do arquivo
        $newNameLinkNewsPaper = "img_news-" . date('d-m-Y') . '-' . date('H') . 'h-' . uniqid() . ".$extension_pdf";

        if (move_uploaded_file($tmpLinkNewsPaper, $folderLinkNewsPaper . $newNameLinkNewsPaper)) {
          $link_newsPaper =  'https://localhost/web-pungo-andongo-php/app/_newspaper/pdf/' . $newNameLinkNewsPaper;

          echo "Upload realizado com sucesso!";
        } else {
          echo "<script>
                    alert('Erro: ao realizar Upload...!');
                    window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
                  </script>";
          exit();
        }
      } else {
        echo "<script>
                  alert('Erro: Extensão ($extension_pdf) não permitido');
                  window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
                </script>";
        exit();
      }
    }
  }

  $sql = $pdo->prepare("UPDATE newspaper SET name_newsPaper=?, description_newsPaper=?,  cover_newsPaper=?, link_newsPaper=?, date_newsPaper=? WHERE id=?");

  if ($sql->execute(array($name_newsPaper, $description_newsPaper, $cover_newsPaper, $link_newsPaper, $date_newsPaper, $id))) {
    echo "<script>
            alert('Jornal atualizado com sucesso!');
            window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
          </script>";
  } else {
    echo "<script>
            alert('Erro ao atualizar a noticia!');
            window.location.href='https://jornalpungoandongo.ao/dashboard/newspaper';
          </script>";
  };
};