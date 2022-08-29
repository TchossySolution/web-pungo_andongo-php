<link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . "/src/components/Header/style.css") ?>">

<header id="header">
  <div class="headerPrimary">
    <div class="socialMediaContainer">
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

    <div class="logoHeaderContainer">
      <a href="<?= urlProject() ?>">
        <h1> <?= SITE ?></h1>
      </a>
    </div>

    <div class="loginContainer">
      <button class="buttonLogin">
        Inscreva-se
      </button>
      <button class="buttonRegister">
        <i class="fa-regular fa-circle-user"></i>
        Conectar-se
      </button>
    </div>
  </div>

  <div class="headerSecondary">
    <div class="dateContainer">
      <p>
        <?php
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

        echo $completeDate;
        ?>
      </p>
    </div>

    <nav class="navContainer">
      <ul>
        <li>
          <a href="<?= urlProject() ?>">Casa</a>
        </li>
        <li>
          <a href="<?= urlProject("news/1") ?>">Noticias</a>
        </li>
        <li>
          <a href="<?= urlProject("news/search/category/Política/1") ?>">Política</a>
        </li>
        <li>
          <a href="<?= urlProject("news/search/category/Desporto/1") ?>">Desporto</a>
        </li>
        <li>
          <a href="<?= urlProject("news/search/category/Cultura/1") ?>">Cultura</a>
        </li>
        <li>
          <a href="<?= urlProject("news/search/category/Atualidade/1") ?>">Atualidade</a>
        </li>
        <li>
          <a href="<?= urlProject("news/search/category/Mundo/1") ?>">Mundo</a>
        </li>
        <li>
          <a href="<?= urlProject("news/search/category/Tecnologia/1") ?>">Tecnologia</a>
        </li>
        <li>
          <a href="<?= urlProject("news/search/author/author_name/pagina") ?>">Autores</a>
        </li>
        <li>
          <a href="<?= urlProject("contacts") ?>">Contacto</a>
        </li>
      </ul>
    </nav>

    <div class="searchAndDarkContainer">
      <button>
        <i class="fa-solid fa-sun"></i>
      </button>
      <button>
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </div>
  </div>
</header>