<?php $this->layout('_theme') ?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_DASHBOARD . "/src/styles/publicityStyles.css") ?>">

<section>

  <h1>Publicidades</h1>

  <form method="post" enctype="multipart/form-data"
    action="<?= urlProject(CONTROLLERS . "/publicityController.php") ?>">
    <input type="file" name="image_publicity" placeholder="Selecione a imagem da publicidade" require>
    <br>

    <input type="text" name="link_publicity" placeholder="Coloque o link da publicidade / ou um # " require>
    <br>

    <input type="date" name="date_expire" placeholder="Data de expiração da publicidade" require>
    <br>

    <div>
      <button name="create_publicity">
        Criar Publicidade
      </button>
    </div>
  </form>

</section>