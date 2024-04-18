<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";
?>

<section class="d-flex justify-content-center m-3">
    <form>
        <div class="d-flex justify-content-center">
            <img class="mb-4 w-25" src="/front_vitrine/imgs/vitrine_logo.png" alt="">
        </div>

        <h1 class="h3 mb-3 fw-normal">Editar Senha</h1>

        <div class="form-floating my-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
        </div>

        <div class="form-floating my-3">
            <input type="password" class="form-control" id="floatingPassword1" placeholder="Repita a Senha">
            <label for="floatingPassword1">Repita a Senha</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Atualizar</button>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";
?>