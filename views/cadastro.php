<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";
?>

<section class="d-flex justify-content-center m-3">
    <form action="/front_vitrine/controllers/usuario_add_controller.php" method="post" enctype="multipart/form-data">
        <div class="d-flex justify-content-center">
            <img class="mb-4 w-25" src="/front_vitrine/imgs/vitrine_logo.png" alt="">
        </div>

        <h1 class="h3 mb-3 fw-normal">Cadastro</h1>

        <div class="form-floating my-3">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
            <label for="nome">Nome</label>
        </div>

        <div class="form-floating my-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
            <label for="email">Email</label>
        </div>

        <div class="form-floating my-3">
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
            <label for="senha">Senha</label>
        </div>

        <div class="my-3">
            <label for="foto" class="form-label">Foto de Perfil</label>
            <input class="form-control" type="file" id="foto" name="foto">
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Cadastrar</button>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";
?>