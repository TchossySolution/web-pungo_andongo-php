  <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . "/src/components/Header/style.css")?>">

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
        <a href="<?=urlProject()?>">
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
        <p> Terça-feira, 23 de Janeiro de 2022</p>
      </div>

      <nav class="navContainer">
        <ul>
          <li>
            <a href="<?=urlProject()?>">Casa</a>
          </li>
          <li>
            <a href="">Sobre</a>
          </li>
          <li>
            <a href="">Política</a>
          </li>
          <li>
            <a href="">Desporto</a>
          </li>
          <li>
            <a href="">Cultura</a>
          </li>
          <li>
            <a href="">Atualidade</a>
          </li>
          <li>
            <a href="">Tecnologia</a>
          </li>
          <li>
            <a href="">Contacto</a>
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