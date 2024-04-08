<?php
require_once "../templates/_cabecalho.php";
?>

<section class="d-flex justify-content-center m-3">
    <div class="row">
        <form class="col-md-8">
            <h1 class="h3 mb-3 fw-normal">Editar Foto</h1>

            <div class="my-3">
                <label for="formFile" class="form-label">Foto de Perfil</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Atualizar</button>
        </form>

        <div class="align-items-center col-md-4 d-flex justify-content-center">
            <img class="rounded-circle m-3" src="/front_vitrine/imgs/dummy_usuario.png" alt="" width="100px" height="100px">
        </div>
    </div>

</section>

<?php
require_once "../templates/_rodape.php";
?>