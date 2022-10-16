<?php $this->layout('_theme') ?>

<?php

//conexao da base de dados//
require 'src/db/config.php';
session_start();

$actual_pag = $authorData['page'];

$pag = (!empty($actual_pag)) ? $actual_pag : 1;

// Setar quantidade de items por pagina
$qnt_result_page = 10;

// Calcular inicio da visualização
$start = ($qnt_result_page * $pag) - $qnt_result_page;

$authorName = $authorData['author_name'];
$authorId = '0';
$titleAuthor = ' ';
$descriptionAuthor = ' ';


$allAuthor = $pdo->prepare("SELECT * FROM author WHERE name_author = ?");
$allAuthor->execute(array($authorName));

// Publicidades
$publiciteis_square = $pdo->prepare("SELECT * FROM publicity WHERE publicity_local = ? ORDER BY id DESC limit 0, 6 ");
$publiciteis_square->execute(array('Pag. autor -> Pub quadrada'));

// Mais noticias sessão 1
$rightNews1 = $pdo->prepare("SELECT * FROM news WHERE category_id = ? ORDER BY id DESC limit 0, 4 ");
$rightNews1->execute(array(rand(1, 13)));
$rightNewsList1 = $pdo->prepare("SELECT * FROM news WHERE category_id = ? ORDER BY id DESC limit 1, 4 ");
$rightNewsList1->execute(array(rand(1, 13)));

$allAuthor = $pdo->prepare("SELECT * FROM author WHERE name_author = ?");
$allAuthor->execute(array($authorName));

foreach ($allAuthor as $author) :
  $authorId = $author['id'];
  $titleAuthor = $author['title_author'];
  $descriptionAuthor = $author['description_author'];
endforeach;

$allNews = $pdo->prepare("SELECT * FROM news WHERE author_id = ? ORDER BY id DESC LIMIT $start, $qnt_result_page");
$allNews->execute(array($authorId));

?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . BASE_STYLES . "/authorStyled.css") ?>">

<main class="authorContainer">
  <div class="container">

    <div class="indicateContainer">
      <a href=""> Home </a>
      <span> » </span>
      <a href=""> Notícias </a>
      <span> » </span>
      <a href=""> Autor </a>
      <span> » </span>
      <a href=""> <?= $authorName ?> </a>
      <span> » </span>
      <a href=""> página <span>1</span> </a>
    </div>

    <div class="searchForContainer">
      <p>
        Publicações do autor:
      </p>
      <strong>
        <?= $authorName ?>
      </strong>
    </div>
  </div>

  <div class="authorInfoContainer">
    <img src="<?= URL_BASE . FOLDER_BASE . BASE_IMG . "/author_bg.jpg" ?>" alt="">
    <div class="shadow"></div>
    <div class="container">
      <div class="authorContainerLeft">
        <div class="imageContainer">
          <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="">
        </div>

        <div class="infoAuthor">
          <h1><?= $authorName ?> </h1>
          <h3><?= $titleAuthor ?></h3>
          <p>
            <?= $descriptionAuthor ?>
          </p>
        </div>
      </div>

      <div class="authorContainerRight">
        <button class="buttonSocialMedia">
          <i class="fa-brands fa-facebook-f"></i>
        </button>

        <button class="buttonSocialMedia">
          <i class="fa-brands fa-instagram"></i>
        </button>

        <button class="buttonSocialMedia">
          <i class="fa-brands fa-twitter"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="containerAllContent">
      <div class="containerLeft">
        <div class="allNotices">
          <?php foreach ($allNews as $data) :
            $author_id = $data['author_id'];
            $author_name;

            $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
            $get_author->execute();

            foreach ($get_author as $author) :
              $author_name = $author['name_author'];
            endforeach;

            $categoryName = '';
            $categoryId = $data['category_id'];

            $allCategory = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
            $allCategory->execute(array($categoryId));

            foreach ($allCategory as $category) :
              $categoryName = $category['name_category'];
            endforeach;

          ?>
          <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">
            <div class="notice">

              <div class="imageContainer">
                <img src="<?= $data['image_news'] ?>" alt="">
              </div>

              <div class="noticeContent">
                <div>
                  <button class="categoryNews">
                    <?= $categoryName ?>
                  </button>
                </div>

                <h1>
                  <?= $data['title_news'] ?>
                </h1>

                <p>
                  <?= $data['resume_news'] ?>
                </p>

                <div class="noticeInfo">
                  <p>Por <strong> <?= $author_name ?></strong> - <span><i class="fa-solid fa-calendar-days"></i>
                      <?= $data['date_create'] ?></span></p>
                  <p><i class="fa-regular fa-comment-dots"></i> 3</p>
                </div>

                <div>
                  <button class="readMore">
                    Leia mais sobre a noticia
                    <i class="fa-solid fa-right-long"></i>
                  </button>
                </div>
              </div>
            </div>
          </a>
          <?php endforeach ?>

          <?php

          // Numero de items
          $result_pg = $pdo->prepare("SELECT COUNT(*) as num_result FROM news WHERE author_id = ? ");

          $result_pg->execute(array($authorId));
          $row_pag = $result_pg->fetchColumn();

          // Quantidade paginas
          $qnt_pag = ceil($row_pag / $qnt_result_page);

          // Limitar links antes e depois
          $max_link = 3;

          // echo $qnt_pag;
          ?>

          <div style="padding-top: 2rem;">
            <a href='<?= urlProject('news/search/author/' . $authorName . "/1") ?>'
              style="color: #000; padding: 8px 10px; border: solid 1px #ddd;  ">
              Primeira </a>

            <?php
            for ($pag_after = $pag - $max_link; $pag_after <= $pag - 1; $pag_after++) {

              if ($pag_after >= 1) {
            ?>
            <a href='<?= urlProject('news/search/author/' . $authorName . '/' . $pag_after) ?>'
              style='color: #000; padding: 8px 10px; border: solid 1px #ddd; '> <?= $pag_after ?> </a>
            <?php }
            } ?>

            <a style="color: #fff; padding: 8px 10px; background-color: #ca1d1f; "> <?= $pag ?>
            </a>

            <?php
            for ($pag_before = $pag + 1; $pag_before <= $pag + $max_link; $pag_before++) {

              if ($pag_before <= $qnt_pag) {
            ?>
            <a href='<?= urlProject('news/search/author/' . $authorName . '/' . $pag_before) ?>'
              style='color: #000; padding: 8px 10px; border: solid 1px #ddd; '> <?= $pag_before ?> </a>
            <?php }
            } ?>

            <a href='<?= urlProject('news/search/author/' . $authorName . "/" . $qnt_pag) ?>'
              style="color: #000; padding: 8px 10px; border: solid 1px #ddd;  "> Ultima </a>

          </div>

        </div>

      </div>

      <div class="rightContainer">
        <div class="otherNotices">
          <section class="mySwiper swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <?php foreach ($publiciteis_square as $data) : ?>
              <div class="swiper-slide">
                <section class="slide" id="slide">
                  <section class="publicity">
                    <div class='containerImage'>
                      <img src=" <?= $data['image_publicity'] ?>" alt="">
                    </div>
                  </section>
                </section>
              </div>
              <?php endforeach ?>
            </div>

          </section>

          <br>
          <br>

          <div class="categoryTItleSectionContainer">
            <h1>Não perca</h1>
          </div>

          <div class="noticeInEmphasis">
            <?php
            foreach ($rightNews1 as $data) :
              $author_id = $data['author_id'];
              $author_name;

              $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
              $get_author->execute();

              foreach ($get_author as $author) :
                $author_name = $author['name_author'];
              endforeach;

            ?>
            <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">
              <div class="notice">

                <div class="imageContainer">
                  <img src="<?= $data['image_news'] ?>" alt="">
                </div>

                <div class="noticeContent">
                  <h1><?= $data['title_news'] ?></h1>

                  <div class="noticeInfo">
                    <p><i class="fa-solid fa-user"></i> <strong><?= $author_name ?></strong> -
                      <span><?= $data['date_create'] ?></span>
                    </p>

                  </div>

                  <p><?= $data['resume_news'] ?></p>
                </div>
              </div>
            </a>
            <br>
            <br>
            <?php endforeach ?>
          </div>

          <br>
          <br>

          <div class="noticeResume">
            <?php
            foreach ($rightNewsList1 as $data) :
              $author_id = $data['author_id'];
              $author_name;

              $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
              $get_author->execute();

              foreach ($get_author as $author) :
                $author_name = $author['name_author'];
              endforeach;

            ?>
            <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">
            </a>

            <div class="notice">
              <div class="imageContainer">
                <img src="<?= $data['image_news'] ?>" alt="">
              </div>

              <div class="noticeContent">
                <h1><?= $data['title_news'] ?></h1>

                <div class="noticeInfo">
                  <p><?= $data['date_create'] ?></p>
                </div>

              </div>
            </div>
            <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">
            </a>

            <?php endforeach ?>

          </div>

        </div>
      </div>
    </div>

  </div>
</main>