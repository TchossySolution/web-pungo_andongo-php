<?php $this->layout('_theme') ?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_DASHBOARD . "/src/styles/newsStyles.css") ?>">

<section>

  <h1>Noticia</h1>

  <form method="post" enctype="multipart/form-data" action="<?= urlProject(CONTROLLERS . "/newsControllers.php") ?>">
    <input type="text" name="title_news" placeholder="Digite o titulo da Noticia" require>
    <br>

    <input type="text" name="resume_news" placeholder="Digite o resumo da Noticia" require>
    <br>

    <input type="number" name="author_id" placeholder="Digite o id do autor" require>
    <br>

    <input type="number" name="category_id" placeholder="Digite o id da categoria" require>
    <br>

    <input type="text" name="description_news" placeholder="Digite a descrição  da Noticia" require>
    <br>

    <input type="text" name="epigraph_news" placeholder="Digite epigrafe da Noticia" require>
    <br>

    <input type="text" name="author_epigraph_news" placeholder="Digite nome do author da epigrafe" require>
    <br>

    <input type="file" name="image_news" placeholder="Selecione a imagem da Noticia" require>
    <br>

    <input type="text" name="description_image_news" placeholder="Digite a descrição a imagem" require>
    <br>

    <input type="text" name="photography_news" placeholder="Digite o nome do fotografo" require>
    <br>

    <input type="text" name="reading_time_news" placeholder="Digite o tempo de leitura" require>
    <br>


    <div>
      <button name="create_news">
        Criar Noticia
      </button>
    </div>
  </form>

</section>