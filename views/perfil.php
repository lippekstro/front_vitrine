<?php
require_once "../templates/_cabecalho.php";
?>

<section class="row m-3">

    <div class="col-md-3 d-flex flex-md-column align-items-center justify-content-center">
        <div class="position-relative">
            <img class="rounded-circle m-3" src="/front_vitrine/imgs/dummy_usuario.png" alt="" width="100px" height="100px">
            <a href="/front_vitrine/views/perfil_foto_edt_form.php" class="position-absolute top-50 start-50 translate-middle edt-foto" title="Editar Foto"><span class="material-symbols-outlined">add_photo_alternate</span></a>
        </div>
        
        <ul class="list-group">
            <li class="list-group-item"><?= $_SESSION['usuario']['nome'] ?></li>
            <li class="list-group-item"><?= $_SESSION['usuario']['email'] ?></li>
            <li class="list-group-item">
                <a href="/front_vitrine/views/perfil_edt_form.php" class="btn btn-primary d-flex align-items-center justify-content-between">Editar Perfil</a>
            </li>
            <li class="list-group-item">
                <a href="/front_vitrine/views/perfil_senha_edt_form.php" class="btn btn-primary d-flex align-items-center justify-content-between">Editar Senha</a>
            </li>
            <li class="list-group-item">
                <a href="/front_vitrine/controllers/logout_controller.php" class="btn btn-danger d-flex align-items-center justify-content-between">Sair <span class="material-symbols-outlined">logout</span></a>
            </li>
        </ul>
    </div>

    <div class="col-md-9">
        <div class="d-flex justify-content-center m-3">
            <a href="/front_vitrine/views/admin/categorias_gerenciar.php" class="btn btn-primary m-3">Gerenciar Categorias</a>
            <a href="/front_vitrine/views/admin/produtos_gerenciar.php" class="btn btn-primary m-3">Gerenciar Produtos</a>
        </div>
    </div>

</section>

<?php
require_once "../templates/_rodape.php";
?>