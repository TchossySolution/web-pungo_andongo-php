<?php $this->layout('_theme') ?>

<?php

//conexao da base de dados//
require 'src/db/config.php';

$categoryName = $categoryData['category_name'];
$categoryId = '0';


$allCategory = $pdo->prepare("SELECT * FROM categories WHERE name_category = ?");
$allCategory->execute(array($categoryName));

foreach ($allCategory as $category) :
  $categoryId = $category['id'];
endforeach;

$allNews = $pdo->prepare("SELECT * FROM news WHERE category_id = ?");
$allNews->execute(array($categoryId));

?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . BASE_STYLES . "/categoryStyled.css") ?>">

<main class="categoryContainer">
  <div class="container">

    <div class="indicateContainer">
      <a href=""> Home </a>
      <span> » </span>
      <a href=""> Notícias </a>
      <span> » </span>
      <a href=""> Categoria </a>
      <span> » </span>
      <a href=""> <?= $categoryName ?> </a>
      <span> » </span>
      <a href=""> página <span>1</span> </a>
    </div>

    <div class="searchForContainer">
      <p>
        Pesquisou pela categoria:
      </p>
      <strong>
        <?= $categoryName ?>
      </strong>
    </div>

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
          ?>
          <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">
            <div class="notice">
              <div class="imageContainer">
                <img src="<?= $data['image_news'] ?>" alt="">
              </div>

              <div class="noticeContent">
                <h1><?= $data['title_news'] ?></h1>

                <div class="noticeInfo">
                  <p>Por <strong><?= $author_name ?></strong> - <span><?= $data['date_create'] ?></span></p>
                  <p><i class="fa-regular fa-comment-dots"></i> 3</p>
                </div>

                <p><?= $data['resume_news'] ?></p>
              </div>
            </div>
          </a>
          <?php endforeach ?>

        </div>

      </div>

      <div class="rightContainer">
        <div class="otherNotices">
          <div class="imageContainer">
            <img
              src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/pexels-nilay-ramoliya-3964833-1-1024x683.jpg"
              alt="">
          </div>

          <div class="categoryTItleSectionContainer">
            <h1>Não perca</h1>
          </div>

          <div class="noticeInEmphasis">
            <div class="notice">
              <div class="imageContainer">
                <img
                  src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/pexels-nilay-ramoliya-3964833-1-1024x683.jpg"
                  alt="">
              </div>

              <div class="noticeContent">
                <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

                <div class="noticeInfo">
                  <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                  <p><i class="fa-regular fa-comment-dots"></i> 3</p>
                </div>

                <p>Para entender o novo smartwatch e outros dispositivos profissionais de foco recente, devemos
                  olhar
                  para
                  o Vale do Silício e o…</p>
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="noticeResume">
            <div class="notice">
              <div class="imageContainer">
                <img
                  src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/pexels-nilay-ramoliya-3964833-1-1024x683.jpg"
                  alt="">
              </div>

              <div class="noticeContent">
                <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

                <div class="noticeInfo">
                  <p>14 de Janeiro de 2022</p>
                </div>

              </div>
            </div>
            <br>
            <div class="notice">
              <div class="imageContainer">
                <img
                  src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/pexels-nilay-ramoliya-3964833-1-1024x683.jpg"
                  alt="">
              </div>

              <div class="noticeContent">
                <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

                <div class="noticeInfo">
                  <p>14 de Janeiro de 2022</p>
                </div>

              </div>
            </div>
            <br>
            <div class="notice">
              <div class="imageContainer">
                <img
                  src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/pexels-nilay-ramoliya-3964833-1-1024x683.jpg"
                  alt="">
              </div>

              <div class="noticeContent">
                <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

                <div class="noticeInfo">
                  <p>14 de Janeiro de 2022</p>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</main>