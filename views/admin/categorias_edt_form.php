<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/models/categoria.php";

try {
    $id = $_GET['id'];
    $categoria = new Categoria($id);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section class="d-flex justify-content-center m-3">
    <form action="/front_vitrine/controllers/categoria_edt_controller.php" method="post" enctype="multipart/form-data">
        <div class="d-flex justify-content-center">
            <img class="mb-4 w-25" src="/front_vitrine/imgs/vitrine_logo.png" alt="">
        </div>

        <h1 class="h3 mb-3 fw-normal">Editar Categoria</h1>

        <input type="hidden" name="id" value="<?= $categoria->id_categoria ?>">

        <div class="form-floating my-3">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Categoria" value="<?= $categoria->nome_categoria ?>">
            <label for="nome">Nome da Categoria</label>
        </div>

        <div class="my-3">
            <label for="foto" class="form-label">Foto</label>
            <input class="form-control" type="file" id="foto" name="foto">
        </div>


        <button class="btn btn-primary w-100 py-2" type="submit">Atualizar</button>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";
?>