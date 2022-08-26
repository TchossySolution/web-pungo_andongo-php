<?php $this->layout('_theme') ?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_DASHBOARD . "/src/styles/categoriesStyle.css") ?>">

<section>

  <h1>Categorias</h1>

  <form method="post" action="<?= urlProject(CONTROLLERS . "/categoryControllers.php") ?>">
    <div>
      <input type="text" name="name_category" placeholder="Digite o nome da categoria" require>
    </div>

    <div>
      <button name="add_category">
        Criar categoria
      </button>
    </div>
  </form>

</section>