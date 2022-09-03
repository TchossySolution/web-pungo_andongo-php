<?php $this->layout('_theme') ?>

<?php

//conexao da base de dados//
require 'src/db/config.php';

$allMessages = $pdo->prepare("SELECT * FROM messages");
$allMessages->execute();

?>

<link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . "/src/styles/newsStyles.css") ?>">

<div>
  <h2>Mensagens</h2>


  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Criar categoria
  </button>

  <br>
  <br>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data</th>
        <th>Ação</th>
      </tr>
    </thead>
    <?php
    foreach ($allMessages as $data) :
    ?>
    <tr>
      <td><?= $data['id']; ?></td>
      <td><?= $data['name_category']; ?></td>
      <td style="min-width: 200px ;"><?= $data['date_create']; ?></td>
      <td style="min-width: 200px ;">
        <button type="button" class="btn btn-secondary">Editar</button>
        <button type="button" class="btn btn-danger">Apagar</button>
      </td>
    </tr>
    <?php endforeach ?>
  </table>



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nova categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <form method="post" action="<?= urlProject(CONTROLLERS . "/categoryControllers.php") ?>">

            <div>
              <input type="text" class="form-control" name="name_category" placeholder="Digite o nome da categoria"
                require>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary" name="create_category">Criar Autor</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</div>