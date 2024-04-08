<?php
require_once "../templates/_cabecalho.php";
?>

<section class="d-flex justify-content-center m-3">
    <form>
        <div class="d-flex justify-content-center">
            <img class="mb-4 w-25" src="/front_vitrine/imgs/vitrine_logo.png" alt="">
        </div>

        <h1 class="h3 mb-3 fw-normal">Editar</h1>

        <div class="form-floating my-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nome Completo" value="Fulano">
            <label for="floatingInput">Nome</label>
        </div>

        <div class="form-floating my-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="email@exemplo.com" value="fulano@mail.com">
            <label for="floatingInput">Email</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Atualizar</button>
    </form>
</section>

<?php
require_once "../templates/_rodape.php";
?>