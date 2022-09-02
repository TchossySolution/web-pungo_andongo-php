<?php $this->layout('_theme') ?>

<?php

$status = 1;

//conexao da base de dados//
require 'src/db/config.php';

$allNews = $pdo->prepare("SELECT * FROM news ");
$allNews->execute();

// Publicidades
$publiciteis_1_3 = $pdo->prepare("SELECT * FROM publicity ORDER BY id DESC limit 0, 3 ");
$publiciteis_1_3->execute();
$publiciteis_4_6 = $pdo->prepare("SELECT * FROM publicity ORDER BY id DESC limit 4, 3 ");
$publiciteis_4_6->execute();

// Publicidades
$publicity_news = $pdo->prepare("SELECT * FROM news where publicity_news='sim' ORDER BY id DESC limit 0, 3 ");
$publicity_news->execute();

// Escolhas dos editores
$choose_editors = $pdo->prepare("SELECT * FROM news where choose_editors_news='sim' ORDER BY id DESC limit 0, 4 ");
$choose_editors->execute();

// Ultimas Noticias
$lastNews = $pdo->prepare("SELECT * FROM news ORDER BY id DESC limit 0, 4  ");
$lastNews->execute();

// Noticias em destaque
$emphasis_news1 = $pdo->prepare("SELECT * FROM news where emphasis_news='sim' ORDER BY id DESC limit 1, 1 ");
$emphasis_news1->execute();
$emphasis_newsList = $pdo->prepare("SELECT * FROM news where emphasis_news='sim' ORDER BY id DESC limit 2, 6 ");
$emphasis_newsList->execute();

// Mais noticias sessão 1
$moreNews1 = $pdo->prepare("SELECT * FROM news ORDER BY id DESC limit 6, 1 ");
$moreNews1->execute();
$moreNewsList1 = $pdo->prepare("SELECT * FROM news ORDER BY id DESC limit 7, 4 ");
$moreNewsList1->execute();

// Mais noticias sessão 2
$moreNews2 = $pdo->prepare("SELECT * FROM news ORDER BY id DESC limit 11, 1 ");
$moreNews2->execute();
$moreNewsList2 = $pdo->prepare("SELECT * FROM news ORDER BY id DESC limit 12, 4 ");
$moreNewsList2->execute();

// Noticias Relevantes
$relevant_news = $pdo->prepare("SELECT * FROM news where relevant_news='sim' ORDER BY id DESC limit 0, 4 ");
$relevant_news->execute();

// Mais noticias sessão 1
$rightNews1 = $pdo->prepare("SELECT * FROM news WHERE category_id = '4' ORDER BY id DESC limit 0, 1 ");
$rightNews1->execute();
$rightNewsList1 = $pdo->prepare("SELECT * FROM news WHERE category_id = '4' ORDER BY id DESC limit 1, 4 ");
$rightNewsList1->execute();

// Mais noticias sessão 2
$rightNewsList2 = $pdo->prepare("SELECT * FROM news WHERE category_id = '3' ORDER BY id DESC limit 0, 3 ");
$rightNewsList2->execute();

// Mais noticias sessão 3
$rightNews3 = $pdo->prepare("SELECT * FROM news WHERE category_id = '6' ORDER BY id DESC limit 0, 1 ");
$rightNews3->execute();
$rightNewsList3 = $pdo->prepare("SELECT * FROM news WHERE category_id = '6' ORDER BY id DESC limit 1, 4 ");
$rightNewsList3->execute();
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
              <span> <i class="fa-solid fa-calendar-days"></i> <?= $data['date_create'] ?></span>
            </div>
          </div>
        </a>
        <?php endforeach ?>
      </div>
    </div>
  </section>


  <section class="publicitySwiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <?php foreach ($publiciteis_1_3 as $data) : ?>
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
    <!-- If we need pagination -->
    <div class="swiper-pagination-publicitySwiper"></div>

    <!-- If we need navigation buttons -->
    <!-- <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div> -->

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
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
                  <p><i class="fa-solid fa-user"></i> <strong><?= $author_name ?></strong> - <span><i
                        class="fa-solid fa-calendar-days"></i> <?= $data['date_create'] ?></span></p>
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
            <h1>Discussões política</h1>
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
                  <p><i class="fa-regular fa-comment-dots"></i> 3</p>
                </div>

                <p><?= $data['resume_news'] ?></p>
              </div>
            </div>
            <?php endforeach ?>
          </div>

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
            <?php endforeach ?>

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
                <p><i class="fa-solid fa-user"></i> <strong> <?= $author_name ?> </strong> - <span> <i
                      class="fa-solid fa-calendar-days"></i> <?= $data['date_create'] ?> </span></p>
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
                  <p><i class="fa-solid fa-user"></i> <strong><?= $author_name ?></strong> - <span><i
                        class="fa-solid fa-calendar-days"></i> <?= $data['date_create'] ?></span></p>
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
                    <p><i class="fa-solid fa-user"></i> <strong><?= $author_name ?></strong> - <span><i
                          class="fa-solid fa-calendar-days"></i> <?= $data['date_create'] ?></span></p>
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
                    <h1><?= $data['title_news'] ?></h1>

                    <div class="noticeInfo">
                      <p><?= $data['resume_news'] ?></p>
                    </div>
                    <div class="noticeInfo">
                      <p><i class="fa-solid fa-calendar-days"></i> <?= $data['date_create'] ?></p>
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
                    <p><i class="fa-solid fa-user"></i> <strong><?= $author_name ?></strong> - <span><i
                          class="fa-solid fa-calendar-days"></i> <?= $data['date_create'] ?></span></p>
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
                      <p><i class="fa-solid fa-calendar-days"></i> <?= $data['date_create'] ?></p>
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
            <h1>Economia </h1>
          </div>

          <div class="noticeInEmphasis">
            <?php
            foreach ($rightNewsList2 as $data) :
              $author_id = $data['author_id'];
              $author_name;

              $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
              $get_author->execute();

              foreach ($get_author as $author) :
                $author_name = $author['name_author'];
              endforeach;

            ?>
            <div class="notice">
              <div class="imageContainer">
                <img src="<?= $data['image_news'] ?>" alt="">
              </div>

              <div class="noticeContent">
                <strong> <?= $data['id'] ?> </strong>

                <div class="noticeContent_left">
                  <h1><?= $data['title_news'] ?></h1>

                  <div class="noticeInfo">
                    <p><i class="fa-solid fa-user"></i> <strong><?= $author_name ?></strong> -
                      <span><?= $data['date_create'] ?></span>
                    </p>
                    <p><i class="fa-regular fa-comment-dots"></i> 3</p>
                  </div>
                </div>

              </div>
            </div>
            <?php endforeach ?>

          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="publicitySwiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <?php foreach ($publiciteis_4_6 as $data) : ?>
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
    <!-- If we need pagination -->
    <div class="swiper-pagination-publicitySwiper"></div>

    <!-- If we need navigation buttons -->
    <!-- <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div> -->

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
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
                    <p><i class="fa-solid fa-user"></i> <strong><?= $author_name ?></strong> - <span><i
                          class="fa-solid fa-calendar-days"></i> <?= $data['date_create'] ?></span></p>
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
            <?php
            foreach ($rightNews3 as $data) :
              $author_id = $data['author_id'];
              $author_name;

              $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
              $get_author->execute();

              foreach ($get_author as $author) :
                $author_name = $author['name_author'];
              endforeach;

            ?>
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
                  <p><i class="fa-regular fa-comment-dots"></i> 3</p>
                </div>

                <p><?= $data['resume_news'] ?></p>
              </div>
            </div>
            <?php endforeach ?>
          </div>

          <div class="noticeResume">
            <?php
            foreach ($rightNewsList3 as $data) :
              $author_id = $data['author_id'];
              $author_name;

              $get_author = $pdo->prepare("SELECT * FROM author where id=$author_id");
              $get_author->execute();

              foreach ($get_author as $author) :
                $author_name = $author['name_author'];
              endforeach;

            ?>
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
            <?php endforeach ?>
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

</script>