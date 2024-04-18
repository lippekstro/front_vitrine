<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";
?>

<section class="d-flex justify-content-center m-3">
    <form>
        <div class="d-flex justify-content-center">
            <img class="mb-4 w-25" src="/front_vitrine/imgs/vitrine_logo.png" alt="">
        </div>

        <h1 class="h3 mb-3 fw-normal">Cadastro</h1>

        <div class="form-floating my-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nome Completo">
            <label for="floatingInput">Nome</label>
        </div>

        <div class="form-floating my-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="email@exemplo.com">
            <label for="floatingInput">Email</label>
        </div>

        <div class="form-floating my-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
        </div>

        <div class="my-3">
            <label for="formFile" class="form-label">Foto de Perfil</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Cadastrar</button>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";
?>