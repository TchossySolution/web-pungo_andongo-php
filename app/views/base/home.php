<?php $this->layout('_theme') ?>

<link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . BASE_STYLES . "/homeStyles.css")?>">

<main class="homeContainer">
  <!-- swiper section starts  -->
  <section class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <section class="slide" id="slide">
          <div class="imgBackground"
            style="background-image: url(<?=urlProject(FOLDER_BASE . BASE_IMG . "/banner1.png")?>)">
            <div>
              <div class="slideInfo" data-anime="scale">
                <h1 id="h1home">Preparamos Serviços Proficionais</h1>
                <p id="p1home">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Aliquam ipsum nostrum laborum iusto molestiae nulla corporis
                </p>
                <button id="btn1home" class="btnHome">Saber mais</button>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="swiper-slide">
        <section class="slide" id="slide">
          <div class="imgBackground"
            style="background-image: url(<?=urlProject(FOLDER_BASE . BASE_IMG . "/banner2.jpg")?>)">
            <div>
              <div class="slideInfo" data-anime="scale">
                <h1 id="h1home">Preparamos Serviços Proficionais</h1>
                <p id="p1home">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Aliquam ipsum nostrum laborum iusto molestiae nulla corporis
                </p>
                <button id="btn1home" class="btnHome">Saber mais</button>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="swiper-slide">
        <section class="slide" id="slide">
          <div class="imgBackground"
            style="background-image: url(<?=urlProject(FOLDER_BASE . BASE_IMG . "/banner3.jpg")?>)">
            <div>
              <div class="slideInfo" data-anime="scale">
                <h1 id="h1home">Preparamos Serviços Proficionais</h1>
                <p id="p1home">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Aliquam ipsum nostrum laborum iusto molestiae nulla corporis
                </p>
                <button id="btn1home" class="btnHome">Saber mais</button>
              </div>
            </div>
          </div>
        </section>
      </div>
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
      <h1> <span>Escolha</span> dos editores </h1>

      <div class="choosesContainer">
        <div class="choose">
          <div class='containerImage'>
            <img src="<?=urlProject(FOLDER_BASE . BASE_IMG . "/img450x300.webp")?>" alt="">
          </div>

          <div class="textContainer">
            <p>Lembrar! Maus hábitos que causam um grande impacto no seu estilo de vida</p>
            <span>13 de janeiro de 2022</span>
          </div>
        </div>

        <div class="choose">
          <div class='containerImage'>
            <img src="<?=urlProject(FOLDER_BASE . BASE_IMG . "/img450x300.webp")?>" alt="">
          </div>

          <div class="textContainer">
            <p>Lembrar! Maus hábitos que causam um grande impacto no seu estilo de vida</p>
            <span>13 de janeiro de 2022</span>
          </div>
        </div>

        <div class="choose">
          <div class='containerImage'>
            <img src="<?=urlProject(FOLDER_BASE . BASE_IMG . "/img450x300.webp")?>" alt="">
          </div>

          <div class="textContainer">
            <p>Lembrar! Maus hábitos que causam um grande impacto no seu estilo de vida</p>
            <span>13 de janeiro de 2022</span>
          </div>
        </div>

        <div class="choose">
          <div class='containerImage'>
            <img src="<?=urlProject(FOLDER_BASE . BASE_IMG . "/img450x300.webp")?>" alt="">
          </div>

          <div class="textContainer">
            <p>Lembrar! Maus hábitos que causam um grande impacto no seu estilo de vida</p>
            <span>13 de janeiro de 2022</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="publicity">
    <div class="container">
      <div class='containerImage'>
        <img src="<?=urlProject(FOLDER_BASE . BASE_IMG . "/pub1.webp")?>" alt="">
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

          <div class="notice">
            <div class="imageContainer">
              <img
                src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
                alt="">
            </div>

            <div class="noticeContent">
              <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

              <div class="noticeInfo">
                <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                <p><i class="fa-regular fa-comment-dots"></i> 3</p>
              </div>

              <p>Para entender o novo smartwatch e outros dispositivos profissionais de foco recente, devemos olhar para
                o Vale do Silício e o…</p>
            </div>
          </div>

          <div class="notice">
            <div class="imageContainer">
              <img
                src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
                alt="">
            </div>

            <div class="noticeContent">
              <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

              <div class="noticeInfo">
                <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                <p><i class="fa-regular fa-comment-dots"></i> 3</p>
              </div>

              <p>Para entender o novo smartwatch e outros dispositivos profissionais de foco recente, devemos olhar para
                o Vale do Silício e o…</p>
            </div>
          </div>

          <div class="notice">
            <div class="imageContainer">
              <img
                src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
                alt="">
            </div>

            <div class="noticeContent">
              <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

              <div class="noticeInfo">
                <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                <p><i class="fa-regular fa-comment-dots"></i> 3</p>
              </div>

              <p>Para entender o novo smartwatch e outros dispositivos profissionais de foco recente, devemos olhar para
                o Vale do Silício e o…</p>
            </div>
          </div>

          <div class="notice">
            <div class="imageContainer">
              <img
                src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
                alt="">
            </div>

            <div class="noticeContent">
              <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

              <div class="noticeInfo">
                <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                <p><i class="fa-regular fa-comment-dots"></i> 3</p>
              </div>

              <p>Para entender o novo smartwatch e outros dispositivos profissionais de foco recente, devemos olhar para
                o Vale do Silício e o…</p>
            </div>
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

          <!-- 
          <div class="categoryTItleSectionContainer">
            <h1>Nós somos sociais</h1>
          </div> -->

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

        <div class="emphases">
          <div class="imageContainer">
            <img
              src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
              alt="">
          </div>

          <div class="noticeContent">
            <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

            <div class="noticeInfo">
              <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
              <p><i class="fa-regular fa-comment-dots"></i> 3</p>
            </div>

          </div>
        </div>

        <div class="otherEmphases">
          <div class="notice">
            <div class="imageContainer">
              <img
                src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
                alt="">
            </div>

            <div class="noticeContent">
              <h1>Linha dd de produtos Bose na feira: showroom aberto agora em Dubai</h1>

              <div class="noticeInfo">
                <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                <p><i class="fa-regular fa-comment-dots"></i> 3</p>
              </div>

            </div>
          </div>

          <div class="notice">
            <div class="imageContainer">
              <img
                src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
                alt="">
            </div>

            <div class="noticeContent">
              <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

              <div class="noticeInfo">
                <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                <p><i class="fa-regular fa-comment-dots"></i> 3</p>
              </div>

            </div>
          </div>

          <div class="notice">
            <div class="imageContainer">
              <img
                src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
                alt="">
            </div>

            <div class="noticeContent">
              <h1>Linha de produtos Bose na feira: showroom aberto agora em Dubai</h1>

              <div class="noticeInfo">
                <p>Por <strong>Rafael Pilartes</strong> - <span>14 de Janeiro de 2022</span></p>
                <p><i class="fa-regular fa-comment-dots"></i> 3</p>
              </div>

            </div>
          </div>

          <div class="notice">
            <div class="imageContainer">
              <img
                src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
                alt="">
            </div>

            <div class="noticeContent">
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
  </section>

  <section class="mostNotices">
    <div class="container">
      <div class="mostNoticesAllContainer">

        <div class="mostNoticesContainer">
          <div class="titleSectionContainer">
            <h1>Mais <span>Noticias</span> </h1>
          </div>

          <div class="contentMostNotice">
            <div class="notice">
              <div class="imageContainer">
                <img
                  src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
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

          <div class="publicityLittle">
            <div class='containerImage'>
              <img
                src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/728X90-banner-02.jpg?>"
                alt="">
            </div>
          </div>


          <div class="contentMostNotice">
            <div class="notice">
              <div class="imageContainer">
                <img
                  src="https://smartmag.theme-sphere.com/good-news/wp-content/uploads/sites/6/2021/01/Depositphotos_138978856_xl-2015-1024x684.jpg"
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
        <img src="<?=urlProject(FOLDER_BASE . BASE_IMG . "/pub1.webp")?>" alt="">
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</main>

<script type="text/javascript" src="<?= urlProject(FOLDER_BASE . BASE_JS . "/homeScripts.js") ?>">
</script>