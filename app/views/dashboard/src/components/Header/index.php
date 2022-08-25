  <link rel="stylesheet" href="<?=urlProject(FOLDER_DASHBOARD . "/src/components/Header/styles.css")?>">

  <header id="header">
    <div class="headerPrimary">
      <div>
      </div>

      <div class="logoHeaderContainer">
        <a href="<?=urlProject()?>">
          <h1> <?= SITE ?> Dashboard</h1>
        </a>
      </div>

      <div>
      </div>
    </div>

    <div class="headerSecondary">
      <div class="dateContainer">
        <p> Terça-feira, 23 de Janeiro de 2022</p>
      </div>

      <nav class="navContainer">
        <ul>
          <li>
            <a href="<?=urlDashProject()?>">Geral</a>
          </li>
          <li>
            <a href="<?=urlDashProject("news")?>">Noticias</a>
          </li>
          <li>
            <a href="<?=urlDashProject("categories")?>">Categorias</a>
          </li>
          <li>
            <a href="<?=urlDashProject("authors")?>">Autores</a>
          </li>
          <li>
            <a href="<?=urlDashProject("messages")?>">Mensagens</a>
          </li>
          <li>
            <a href="<?=urlDashProject("newsLetters")?>">Newsletter</a>
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