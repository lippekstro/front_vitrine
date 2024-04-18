<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";
?>

<section class="row m-3">
    <div class="col-md-8">
        <img src="https://source.unsplash.com/random/1920x1080/?cat" alt="" class="w-100">
    </div>

    <div class="col-md-4">
        <form>
            <div class="d-flex justify-content-center">
                <img class="mb-4 w-25" src="/front_vitrine/imgs/vitrine_logo.png" alt="">
            </div>

            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating my-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="email@exemplo.com">
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating my-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                <label for="floatingPassword">Senha</label>
            </div>

            <div class="my-3 text-center">
                <p>Não tem conta? <a href="/front_vitrine/views/cadastro.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Registre-se</a></p>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
        </form>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";
?>