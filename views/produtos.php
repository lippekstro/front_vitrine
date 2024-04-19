<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/models/produto.php";

try {
    $lista = Produto::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section class="m-3 d-grid justify-content-evenly align-items-center cards grid-template">
    <?php foreach ($lista as $p) : ?>
        <div class="card col-sm-12 m-3" style="width: 18rem;">
            <img src="data:image;base64,<?= base64_encode($p['foto_produto']) ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $p['nome_produto'] ?></h5>
                <p class="card-text">R$ <?= $p['preco'] ?></p>
                <a href="/front_vitrine/views/detalhes.php" class="btn btn-primary">Saiba Mais</a>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";
?>