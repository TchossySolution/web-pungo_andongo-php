<?php $this->layout('_theme') ?>

<?php

$status = 1;

//conexao da base de dados//
require 'src/db/config.php';

$allNews = $pdo->prepare("SELECT * FROM news ");
$allNews->execute();

// Publicidades
$publicity_news = $pdo->prepare("SELECT * FROM news where publicity_news='sim' limit 0, 3 ");
$publicity_news->execute();

// Escolhas dos editores
$choose_editors = $pdo->prepare("SELECT * FROM news where choose_editors_news='sim' limit 0, 4 ");
$choose_editors->execute();

// Ultimas Noticias
$lastNews = $pdo->prepare("SELECT * FROM news limit 0, 4  ");
$lastNews->execute();

// Noticias em destaque
$emphasis_news1 = $pdo->prepare("SELECT * FROM news where emphasis_news='sim' limit 1, 1 ");
$emphasis_news1->execute();
$emphasis_newsList = $pdo->prepare("SELECT * FROM news where emphasis_news='sim' limit 2, 6 ");
$emphasis_newsList->execute();

// Mais noticias sessão 1
$moreNews1 = $pdo->prepare("SELECT * FROM news limit 6, 1 ");
$moreNews1->execute();
$moreNewsList1 = $pdo->prepare("SELECT * FROM news limit 5, 4 ");
$moreNewsList1->execute();

// Mais noticias sessão 2
$moreNews2 = $pdo->prepare("SELECT * FROM news limit 9, 1 ");
$moreNews2->execute();
$moreNewsList2 = $pdo->prepare("SELECT * FROM news limit 11, 4 ");
$moreNewsList2->execute();

// Noticias Relevantes
$relevant_news = $pdo->prepare("SELECT * FROM news where 	relevant_news='sim' limit 0, 4 ");
$relevant_news->execute();
?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . BASE_STYLES . "/homeStyles.css") ?>">


<main class="homeContainer">
  <!-- swiper section starts  -->
  <section class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <?php foreach ($publicity_news as $data) : ?>
      <div class="swiper-slide">
        <section class="slide" id="slide">
          <div class="imgBackground" style="background-image: url(<?= $data['image_news'] ?>)">
            <div>
              <div class="slideInfo" data-anime="scale">
                <h1 id="h1home"><?= $data['title_news'] ?></h1>
                <p id="p1home">
                  <?= $data['resume_news'] ?>
                </p>
                <button id="btn1home" class="btnHome">
                  <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">Saber mais</a>
                </button>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php endforeach ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <!-- <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div> -->

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </section>

  <section class="choosesEditors">
    <div class="container">
      <h1> <span style="color: red;">Escolha</span> dos editores </h1>

      <div class="choosesContainer">
        <?php
        $author_id = $data['author_id'];
        $author_name;

        $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
        $get_author->execute();

        foreach ($get_author as $author) :
          $author_name = $author['name_author'];
        endforeach;

        foreach ($choose_editors as $data) :
        ?>
        <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">
          <div class="choose">
            <div class='containerImage'>
              <img src="<?= $data['image_news'] ?>" alt="">
            </div>

            <div class="textContainer">
              <p><?= $data['title_news'] ?></p>
              <span><?= $data['date_create'] ?></span>
            </div>
          </div>
        </a>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <section class="publicity">
    <div class="container">
      <div class='containerImage'>
        <img src="<?= urlProject("/app/_imagesDb/banner.jpg") ?>" alt="">
      </div>
    </div>
  </section>

  <section class="lastNotices">
    <div class="container">
      <div class="lastNoticesAllContainer">

        <div class="lastNoticesContainer">
          <div class="titleSectionContainer">
            <h1>Ultimas <span>Noticias</span> </h1>
          </div>
          <?php
          foreach ($lastNews as $data) :
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

        <div class="otherNotices">
          <div class="categoryTItleSectionContainer">
            <h1>Convivendo com o Covid</h1>
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

                <p>Para entender o novo smartwatch e outros dispositivos profissionais de foco recente, devemos olhar
                  para
                  o Vale do Silício e o…</p>
              </div>
            </div>
          </div>

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
  </section>

  <section class="emphasesNotice">
    <div class="container">
      <div class="titleSectionContainer">
        <h1> <span>Em Destaque</span> </h1>
      </div>

      <div class="emphasesNoticeAllContainer">
        <?php
        $author_id = $data['author_id'];
        $author_name;

        $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
        $get_author->execute();

        foreach ($get_author as $author) :
          $author_name = $author['name_author'];
        endforeach;

        foreach ($emphasis_news1 as $data) :

        ?>
        <div class="emphases">
          <div class="imageContainer">
            <img src=" <?= $data['image_news'] ?> " alt="">
          </div>

          <div class="noticeContent">
            <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">
              <h1> <?= $data['title_news'] ?> </h1>

              <div class="noticeInfo">
                <p>Por <strong> <?= $author_name ?> </strong> - <span> <?= $data['date_create'] ?> </span></p>
                <p><i class="fa-regular fa-comment-dots"></i> 3</p>
              </div>
            </a>
          </div>
        </div>
        <?php endforeach ?>

        <div class="otherEmphases">
          <?php
          $author_id = $data['author_id'];
          $author_name;

          $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
          $get_author->execute();

          foreach ($get_author as $author) :
            $author_name = $author['name_author'];
          endforeach;

          foreach ($emphasis_newsList as $data) :

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

              </div>
            </div>
          </a>
          <?php endforeach ?>
        </div>

      </div>
    </div>
  </section>

  <section class="moreNotices">
    <div class="container">
      <div class="moreNoticesAllContainer">

        <div class="moreNoticesContainer">
          <div class="titleSectionContainer">
            <h1>Mais <span>Noticias</span> </h1>
          </div>

          <div class="contentMoreNotice">
            <?php
            $author_id = $data['author_id'];
            $author_name;

            $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
            $get_author->execute();

            foreach ($get_author as $author) :
              $author_name = $author['name_author'];
            endforeach;

            foreach ($moreNews1 as $data) :
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

            <div class="noticeResume">
              <?php
              $author_id = $data['author_id'];
              $author_name;

              $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
              $get_author->execute();

              foreach ($get_author as $author) :
                $author_name = $author['name_author'];
              endforeach;

              foreach ($moreNewsList1 as $data) :
              ?>
              <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">
                <div class="notice">
                  <div class="imageContainer">
                    <img src="<?= $data['image_news'] ?>" alt="">
                  </div>
                  <div class="noticeContent">
                    <h1><?= $author_name ?></h1>

                    <div class="noticeInfo">
                      <p><?= $data['resume_news'] ?></p>
                    </div>
                    <div class="noticeInfo">
                      <p><?= $data['date_create'] ?></p>
                    </div>


                  </div>
                </div>
              </a>
              <?php endforeach ?>

            </div>
          </div>

          <div class="publicityLittle">
            <div class='containerImage'>
              <img src="https://www.unitel.st/img/slide/bs1896x617px-BigNet.jpg" alt="">
            </div>
          </div>


          <div class="contentMoreNotice">
            <?php
            $author_id = $data['author_id'];
            $author_name;

            $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
            $get_author->execute();

            foreach ($get_author as $author) :
              $author_name = $author['name_author'];
            endforeach;

            foreach ($moreNews2 as $data) :
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

            <div class="noticeResume">
              <?php
              $author_id = $data['author_id'];
              $author_name;

              $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
              $get_author->execute();

              foreach ($get_author as $author) :
                $author_name = $author['name_author'];
              endforeach;
              foreach ($moreNewsList2 as $data) :

              ?>
              <a href="<?= urlProject(BASE_DETAILSNEWS . "/" . $data['id']) ?>">
                <div class="notice">
                  <div class="imageContainer">
                    <img src="<?= $data['image_news'] ?>" alt="">
                  </div>

                  <div class="noticeContent">
                    <h1><?= $data['title_news'] ?></h1>

                    <div class="noticeInfo">
                      <p><?= $data['resume_news'] ?></p>
                    </div>

                    <div class="noticeInfo">
                      <p><?= $data['date_create'] ?></p>
                    </div>

                  </div>
                </div>
              </a>
              <?php endforeach ?>

            </div>
          </div>
        </div>

        <div class="otherNotices">
          <div class="categoryTItleSectionContainer">
            <h1>Viagem</h1>
          </div>

          <div class="noticeInEmphasis">
            <div class="notice">
              <div class="imageContainer">
                <img
                  src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/shutterstock_229597000-1024x683.jpg"
                  alt="">
              </div>

              <div class="noticeContent">
                <strong> 1 </strong>

                <div class="noticeContent_left">
                  <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

                  <div class="noticeInfo">
                    <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                    <p><i class="fa-regular fa-comment-dots"></i> 3</p>
                  </div>
                </div>

              </div>
            </div>

            <div class="notice">
              <div class="imageContainer">
                <img
                  src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/pexels-nilay-ramoliya-3964833-1-1024x683.jpg"
                  alt="">
              </div>

              <div class="noticeContent">
                <strong> 2 </strong>

                <div class="noticeContent_left">
                  <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

                  <div class="noticeInfo">
                    <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                    <p><i class="fa-regular fa-comment-dots"></i> 3</p>
                  </div>
                </div>

              </div>
            </div>

            <div class="notice">
              <div class="imageContainer">
                <img
                  src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/pexels-marcus-aurelius-4063532-1-1024x1536.jpg"
                  alt="">
              </div>

              <div class="noticeContent">
                <strong> 3 </strong>

                <div class="noticeContent_left">
                  <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

                  <div class="noticeInfo">
                    <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                    <p><i class="fa-regular fa-comment-dots"></i> 3</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="publicity">
    <div class="container">
      <div class='containerImage'>
        <img src="https://grupoexecutive.files.wordpress.com/2010/01/gpl_beber_outdoor.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="noticesRelevant">
    <div class="container">
      <div class="noticesRelevantAllContainer">

        <div class="noticesRelevantContainer">
          <div class="titleSectionContainer">
            <h1>Noticias <span>Relevantes</span> </h1>
          </div>

          <div class="allNotices">
            <?php
            $author_id = $data['author_id'];
            $author_name;

            $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
            $get_author->execute();

            foreach ($get_author as $author) :
              $author_name = $author['name_author'];
            endforeach;

            foreach ($relevant_news as $data) :

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

                  <p> <?= $data['resume_news'] ?></p>
                </div>
              </div>
            </a>
            <?php endforeach ?>
          </div>

        </div>

        <div class="otherNotices">
          <div class="categoryTItleSectionContainer">
            <h1>Convivendo com o Covid</h1>
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

                <p>Para entender o novo smartwatch e outros dispositivos profissionais de foco recente, devemos olhar
                  para
                  o Vale do Silício e o…</p>
              </div>
            </div>
          </div>

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

          <div class="subscribe">
            <h1>Assine as atualizações</h1>

            <p>
              Receba as últimas notícias e mais atualizas do Pungo Andongo.
            </p>

            <div class="inputContainer">
              <input type="text" placeholder="Seu endereço de email">
              <button>Se inscrever</button>
            </div>

            <div class="checkContainer">
              <p>
                <input type="checkbox" name="" id="">
                Ao se inscrever, você concorda com nossos termos e nosso acordo de <a href="http://" target="_blank"
                  rel="noopener noreferrer">
                  Política de Privacidade .
                </a>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<script type="text/javascript" src="<?= urlProject(FOLDER_BASE . BASE_JS . "/homeScripts.js") ?>">
</script>