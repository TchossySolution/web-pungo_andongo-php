<?php $this->layout('_theme') ?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_DASHBOARD . "/src/styles/authorsStyle.css") ?>">

<section>

  <h1>Autor</h1>

  <form method="post" action="<?= urlProject(CONTROLLERS . "/authorsControllers.php") ?>">

    <div>
      <input type="text" name="name_author" placeholder="Digite o nome do Autor" require>
      <br>
      <input type="text" name="title_author" placeholder="Digite o titulo do autor" require>
      <br>
      <input type="text" name="description_author" placeholder="Digite a descrição do Autor" require>
    </div>

    <div>
      <button name="add_authors">
        Criar Autor
      </button>
    </div>
  </form>

</section>