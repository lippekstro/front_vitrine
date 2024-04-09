<?php
require_once "../templates/_cabecalho.php";
?>

<section class="d-flex justify-content-center m-3">
    <!-- action = para onde vai os dados, method = get ou post, enctype = permite envio de arquivos nesse caso a foto, mas se fosse docs, pdfs, audios, videos etc tambem teria que usar -->
    <form action="/front_vitrine/controllers/cadastro_usuario_controller.php" method="post" enctype="multipart/form-data">
        <div class="d-flex justify-content-center">
            <img class="mb-4 w-25" src="/front_vitrine/imgs/vitrine_logo.png" alt="">
        </div>

        <h1 class="h3 mb-3 fw-normal">Cadastro</h1>

        <div class="form-floating my-3">
            <!-- adicionando o atributo name nos inputs, o modelo do BS nao tras isso, e é importante para acessar os dados no backend -->
            <input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome">
            <label for="nome">Nome</label>
        </div>

        <div class="form-floating my-3">
            <input type="email" class="form-control" id="email" placeholder="email@exemplo.com" name="email">
            <label for="email">Email</label>
        </div>

        <div class="form-floating my-3">
            <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
            <label for="senha">Senha</label>
        </div>

        <div class="my-3">
            <label for="foto" class="form-label">Foto de Perfil</label>
            <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Cadastrar</button>
    </form>
</section>

<?php
require_once "../templates/_rodape.php";
?>