<?php $this->layout('_theme') ?>

<?php

//conexao da base de dados//
require 'src/db/config.php';
session_start();

$actual_pag = $newspaperPage['page'];

$pag = (!empty($actual_pag)) ? $actual_pag : 1;

// Setar quantidade de items por pagina
$qnt_result_page = 10;

// Calcular inicio da visualização
$start = ($qnt_result_page * $pag) - $qnt_result_page;

$allNewspaper = $pdo->prepare("SELECT * FROM newspaper ORDER BY id DESC LIMIT $start, $qnt_result_page");
$allNewspaper->execute();

$publiciteis_1 = $pdo->prepare("SELECT * FROM publicity WHERE publicity_local = ? ORDER BY id DESC limit 0, 4 ");
$publiciteis_1->execute(array('Pag. noticias -> 1ª Pub grossa'));


// Publicidades
$publiciteis_square = $pdo->prepare("SELECT * FROM publicity WHERE publicity_local = ? ORDER BY id DESC limit 0, 6 ");
$publiciteis_square->execute(array('Pag. noticias -> Pub quadrada'));

// Mais noticias sessão 1
$rightNews1 = $pdo->prepare("SELECT * FROM news WHERE category_id = ? ORDER BY id DESC limit 0, 1 ");
$rightNews1->execute(array(rand(1, 13)));
$rightNewsList1 = $pdo->prepare("SELECT * FROM news WHERE category_id = ? ORDER BY id DESC limit 1, 4 ");
$rightNewsList1->execute(array(rand(1, 13)));
?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . BASE_STYLES . "/newspaperStyled.css") ?>">

<main class="newsContainer">
  <div class="container">
    <section class="publicitySwiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach ($publiciteis_1 as $data) : ?>
        <div class="swiper-slide">
          <section class="slide" id="slide">
            <section class="publicity">
              <div class="container">
                <div class='containerImage'>
                  <img src=" <?= $data['image_publicity'] ?>" alt="">
                </div>
              </div>
            </section>
          </section>
        </div>
        <?php endforeach ?>
      </div>
    </section>

    <div class="indicateContainer">
      <a href=""> Home </a>
      <span> » </span>
      <a href=""> Jornal </a>
      <span> » </span>
      <a href=""> página <span> <?= $pag ?> </span> </a>
    </div>

    <div class="searchForContainer">
      <p>
        Edições do Jornal Pungo Andongo
      </p>
    </div>

    <div class="containerAllContent">
      <div class="containerLeft">
        <div class="allNotices">

          <?php foreach ($allNewspaper as $data) : ?>
          <a href="<?= $data['link_newsPaper'] ?>">
            <div class="notice">

              <div class="imageContainer">
                <img src="<?= $data['cover_newsPaper'] ?>" alt="">
              </div>

              <div class="noticeContent">
                <h1>
                  <?= $data['name_newsPaper'] ?>
                </h1>

                <div class="noticeInfo">
                  <p><span><i class="fa-solid fa-calendar-days"></i>
                      <?= $data['date_create'] ?></span></p>
                </div>

                <div>
                  <button class="readMore">
                    Ler o jornal
                    <i class="fa-solid fa-right-long"></i>
                  </button>
                </div>
              </div>
            </div>
          </a>

          <?php endforeach ?>
        </div>

        <?php

        // Numero de items
        $result_pg = $pdo->prepare("SELECT COUNT(*) as num_result FROM newspaper ");
        $result_pg->execute();
        $row_pag = $result_pg->fetchColumn();

        // Quantidade paginas
        $qnt_pag = ceil($row_pag / $qnt_result_page);

        // Limitar links antes e depois
        $max_link = 3;

        // echo $qnt_pag;
        ?>

        <div style="padding-top: 2rem;">
          <a href='<?= urlProject("newspaper/1") ?>' style="color: #000; padding: 8px 10px; border: solid 1px #ddd;  ">
            Primeira </a>

          <?php
          for ($pag_after = $pag - $max_link; $pag_after <= $pag - 1; $pag_after++) {

            if ($pag_after >= 1) {
          ?>
          <a href='<?= urlProject('newspaper/' . $pag_after) ?>'
            style='color: #000; padding: 8px 10px; border: solid 1px #ddd; '> <?= $pag_after ?> </a>
          <?php }
          } ?>

          <a style="color: #fff; padding: 8px 10px; background-color: #ca1d1f; "> <?= $pag ?>
          </a>

          <?php
          for ($pag_before = $pag + 1; $pag_before <= $pag + $max_link; $pag_before++) {

            if ($pag_before <= $qnt_pag) {
          ?>
          <a href='<?= urlProject('newspaper/' . $pag_before) ?>'
            style='color: #000; padding: 8px 10px; border: solid 1px #ddd; '> <?= $pag_before ?> </a>
          <?php }
          } ?>

          <a href='<?= urlProject("newspaper/" . $qnt_pag) ?>'
            style="color: #000; padding: 8px 10px; border: solid 1px #ddd;  "> Ultima </a>

        </div>

      </div>

    </div>

  </div>
</main>