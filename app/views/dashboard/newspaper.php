<?php $this->layout('_theme') ?>

<?php

//conexao da base de dados//
require 'src/db/config.php';

$allNewsPaper = $pdo->prepare("SELECT * FROM newsPaper");
$allNewsPaper->execute();

?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_DASHBOARD . "/src/styles/newsPaperStyles.css") ?>">

<section>

  <h1>Jornal</h1>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Publicar Jornal
  </button>

  <br>
  <br>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Descrição</th>
        <th>Data</th>
        <th>Ação</th>
      </tr>
    </thead>
    <?php
    foreach ($allNewsPaper as $data) :
    ?>
    <form method="post" enctype="multipart/form-data"
      action="<?= urlProject(CONTROLLERS . "/newsPaperController.php") ?>">
      <tr>
        <td><?= $data['id']; ?></td>
        <td><?= $data['description_newsPaper']; ?></td>
        <td style="min-width: 200px ;"><?= $data['date_create']; ?></td>
        <td style="min-width: 200px ;">
          <button type="button" class="btn btn-secondary" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModal<?= $data['id']; ?>">Editar</button>
          <button type="submit" class="btn btn-danger" name="delete_newsPaper">Apagar</button>
        </td>
      </tr>

      <input value="<?= $data['id']; ?>" name="id" hidden>
      <input value="<?= $data['link_newsPaper']; ?>" name="suplente_link" hidden>
      <input value="<?= $data['cover_newsPaper']; ?>" name="suplente_cover" hidden>


      <div class="modal fade" id="exampleModal<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Jornal <?= $data['id']; ?> </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

              <img src="<?= $data['cover_newsPaper']; ?>" class="img-fluid" alt="Responsive image">
              <br>
              <br>

              <p>Selecione o jornal em pdf</p>
              <input type="file" class="form-control" value="<?= $data['link_newsPaper']; ?>" name="link_newsPaper"
                placeholder="Selecione a imagem da jornal" require>
              <br>

              <p>Selecione a capa do jornal</p>
              <input type="file" class="form-control" value="<?= $data['cover_newsPaper']; ?>" name="cover_newsPaper"
                placeholder="Selecione a capa do jornal" require>
              <br>

              <input type="text" class="form-control" value="<?= $data['name_newsPaper']; ?>" name="name_newsPaper"
                placeholder="Titulo do jornal" require>
              <br>

              <textarea type="text" value="<?= $data['description_newsPaper']; ?>" class="form-control"
                name="description_newsPaper" placeholder="Descrição do jornal " require><?= $data['description_newsPaper']; ?>
                </textarea>
              <br>

              <input type="date" class="form-control" value="<?= $data['date_newsPaper']; ?>" name="date_newsPaper"
                placeholder="Data do jornal" require>
              <br>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" name="update_newsPaper">Atualizar Publicidade</button>
              </div>

            </div>
          </div>
        </div>
      </div>

    </form>
    <?php endforeach ?>
  </table>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Novo Jornal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <form method="post" enctype="multipart/form-data"
            action="<?= urlProject(CONTROLLERS . "/newsPaperController.php") ?>">

            <p>Selecione o jornal em pdf</p>
            <input type="file" class="form-control" name="link_newsPaper" placeholder="Selecione a imagem da jornal"
              require>
            <br>

            <p>Selecione a capa do jornal</p>
            <input type="file" class="form-control" name="cover_newsPaper" placeholder="Selecione a capa do jornal"
              require>
            <br>

            <input type="text" class="form-control" name="name_newsPaper" placeholder="Titulo do jornal" require>
            <br>

            <textarea type="text" class="form-control" name="description_newsPaper" placeholder="Descrição do jornal "
              require></textarea>
            <br>

            <input type="date" class="form-control" name="date_newsPaper" placeholder="Data do jornal" require>
            <br>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary" name="create_newsPaper">Publicar Jornal</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</section>