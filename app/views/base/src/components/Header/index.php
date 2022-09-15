  <link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . "/src/components/Header/styles.css") ?>">

  <div id="id01" class="modal">
    <form class="modal-content animate" enctype="multipart/form-data" method="post"
      action="<?= urlProject(CONTROLLERS . "/loginUserControllers.php") ?>">
      <div class="imgcontainer">
        <h1>Registrar-se</h1>
        <br>
        <p>
          Parece que você é novo aqui! Junte-se nos, uma das miares rede de noticias, em poucos minutos! Inscreva-se com
          seus dados para começar.
        </p>

        <span onclick="document.getElementById('id01').style.display='none'" class="close"
          title="Close Modal">&times;</span>
      </div>

      <div class="modalLoginContainer">

        <input type="file" class="form-control" name="user_photo_profile" placeholder="Selecione a sua foto de perfil"
          require>
        <br>
        <br>

        <label for="user_email"><b>E-mail</b></label><br>
        <input type="text" placeholder="Digite o seu e-mail" name="user_email" required>
        <br>
        <br>

        <label for="user_name"><b>Nome de Usuário</b></label><br>
        <input type="text" placeholder="Digite o seu nome de usuário" name="user_name" required>
        <br>
        <br>

        <label for="user_password"><b>Palavra-passe</b></label><br>
        <input type="password" placeholder="Digite a sua palavra passe" name="user_password" required>
        <br>
        <br>

        <input style="display: none;" type="txt" name="isUser" value="isUser">
        <button type="submit" name="create_user">Registrar</button>

      </div>

      <div class="modalLoginContainer">
        <button type="button" onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn">Cancelar</button>
      </div>
    </form>
  </div>

  <div id="id02" class="modal2">
    <form class="modal-content animate" style="min-height: 32rem;" method="post"
      action="<?= urlProject(CONTROLLERS . "/loginUserControllers.php") ?>">
      <div class="imgcontainer">
        <h1>Login</h1>
        <br>
        <p>
          Estamos felizes em vê-lo novamente! Tenha acesso as noticias mais atualizada e Recomendações.
        </p>

        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>
      </div>

      <div class="modalLoginContainer">

        <label for="user_email"><b>E-mail</b></label><br>
        <input type="text" placeholder="Digite o seu e-mail" name="user_email" required>
        <br>
        <br>

        <label for="user_password"><b>Palavra-passe</b></label><br>
        <input type="password" placeholder="Digite a sua palavra passe" name="user_password" required>
        <br>
        <br>

        <input style="display: none;" type="txt" name="isUser" value="isUser">
        <button type="submit" name="login_user">Conectar</button>

      </div>

      <div class="modalLoginContainer">
        <button type="button" onclick="document.getElementById('id02').style.display='none'"
          class="cancelbtn">Cancelar</button>
      </div>
    </form>
  </div>


  <header id="header">
    <div class="headerPrimary">
      <div class="socialMediaContainer">
        <button class="buttonSocialMedia">
          <i class="fa-brands fa-facebook-f"></i>
        </button>

        <button class="buttonSocialMedia">
          <a href="https://www.instagram.com/jornalpungoandongo/">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </button>

        <button class="buttonSocialMedia">
          <i class="fa-brands fa-twitter"></i>
        </button>
      </div>

      <div class="logoHeaderContainer">
        <a href="<?= urlProject() ?>">
          <h1 style="font-style: italic;"><span>P</span>ungo <span>A</span>ndongo</h1>
        </a>
      </div>

      <?php if ((isset($_SESSION['isUser']) == "isUser")) { ?>
      <form class="row g-3 needs-validation" novalidate method="post"
        action="<?= urlProject(CONTROLLERS . "/loginUserControllers.php") ?>">
        <button type="submit" name="logOut_user" class="log_out_user">
          Sair <i class="fa-solid fa-arrow-right-from-arc"></i>
        </button>
      </form>
      <?php } else { ?>
      <div class="loginContainer">
        <button class="buttonRegister" onclick="document.getElementById('id01').style.display='flex'">
          <i class="fa-regular fa-circle-user"></i>
          Inscreva-se
        </button>
        <button class="buttonLogin" onclick="document.getElementById('id02').style.display='flex'">
          Conectar-se
        </button>
      </div>
      <?php } ?>
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
            <a href="<?= urlProject() ?>">Destaques</a>
          </li>
          <li>
            <a href="<?= urlProject("news/1") ?>">Noticias</a>
          </li>
          <li>
            <a href="<?= urlProject("news/search/category/Política/1") ?>">Política</a>
          </li>
          <li>
            <a href="<?= urlProject("news/search/category/Sociedade/1") ?>">Sociedade</a>
          </li>
          <li>
            <a href="<?= urlProject("news/search/category/Economia/1") ?>">Economia</a>
          </li>
          <li>
            <a href="<?= urlProject("news/search/category/Saúde/1") ?>">Saúde</a>
          </li>
          <li>
            <a href="<?= urlProject("news/search/category/Ciência/1") ?>">Ciência</a>
          </li>
          <li>
            <a href="<?= urlProject("news/search/category/Cultura/1") ?>">Cultura</a>
          </li>
          <li>
            <a href="<?= urlProject("news/search/category/Desporto/1") ?>">Desporto</a>
          </li>
          <li>
            <a href="<?= urlProject("news/search/category/Mundo/1") ?>">Mundo</a>
          </li>
          <!-- <li>
              <a href="<?= urlProject("news/search/category/Lazer/1") ?>">Lazer</a>
            </li> -->
          <li>
            <a href="<?= urlProject("contacts") ?>">Contacto</a>
          </li>
        </ul>
      </nav>

      <div class="searchAndDarkContainer">
        <button style="opacity: 0;">
          <i class="fa-solid fa-sun"></i>
        </button>
        <button class="iconMenu" id="menu-btn">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </div>
  </header>

  <script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
  </script>