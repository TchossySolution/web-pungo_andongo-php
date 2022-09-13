<?php $this->layout('_theme') ?>

<?php
session_start();

if ((isset($_SESSION['isAdm']) == "adm")) {
  header('Location: http://jornalpungoandongo.ao/dashboard/news');
}
?>

<div class="removeHeader"></div>

<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <img width="90" height="90" src="<?= urlProject(FOLDER_BASE . "/src/assets/icons/JPA_favicon.jpg") ?>"
              class="rounded mx-60 d-block" alt="">
            <div class="d-flex justify-content-center py-4">
              <h2 class="d-none d-lg-block text-danger" style="text-decoration: none;">Pungo a Ndongo admin</h2>
            </div><!-- End Logo -->

            <div class="card mb-3">
              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4 ">Faça login na sua conta</h5>
                  <p class="text-center small">Digite seu nome de usuário e senha para entrar</p>
                </div>

                <form class="row g-3 needs-validation" novalidate method="post"
                  action="<?= urlProject(CONTROLLERS . "/loginControllers.php") ?>">

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" name="adm_email" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Por favor insira seu nome de usuário.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Senha</label>
                    <input type="password" name="adm_password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Por favor, insira sua senha!</div>
                  </div>

                  <input style="display: none;" type="txt" name="isAdm" value="adm">

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Lembre de mim</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-danger w-100" type="submit" name="login_Adm">Conectar-se</button>
                  </div>

                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              Projetado por <a href="https://tchossysolution.com/">Tchossy Solutions</a>
            </div>

          </div>
        </div>
      </div>

    </section>


    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div style="display: none;" class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <h2 class="d-none d-lg-block text-danger" style="text-decoration: none;">Pungo a Ndongo admin</h2>
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">
              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4 ">Registrar uma nova conta</h5>
                  <p class="text-center small">Crie seu nome de usuário, email e senha para entrar</p>
                </div>

                <form class="row g-3 needs-validation" novalidate method="post" action="">

                  <div class="col-12">
                    <label for="yourUserName" class="form-label">Nome do usuário</label>
                    <input type="text" name="adm_name" class="form-control" id="yourUserName" required>
                    <div class="invalid-feedback">Por favor insira seu nome de usuário!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourUserEmail" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" name="adm_email" class="form-control" id="yourUserEmail" required>
                      <div class="invalid-feedback">Por favor insira seu email.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Senha</label>
                    <input type="password" name="adm_password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Por favor, insira sua senha!</div>
                  </div>

                  <input style="display: none;" type="txt" name="isAdm" value="adm">

                  <div class="col-12">
                    <button class="btn btn-danger w-100" type="submit" name="">Registrar-se</button>
                  </div>

                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              Projetado por <a href="https://tchossysolution.com/">Tchossy Solutions</a>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main>

<?php $this->start('removeHeader'); ?>

<?php $this->end(); ?>