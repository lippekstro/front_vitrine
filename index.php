<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/models/categoria.php";

try {
    $lista = Categoria::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<section>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center hero">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="fw-normal text-muted mb-3">Veja Nosso Catálogo</h1>
        </div>
</section>

<section class="m-3 d-flex justify-content-evenly align-items-center flex-wrap">
    <?php foreach ($lista as $cat) : ?>
        <a href="/front_vitrine/views/produtos.php?cat=<?= $cat['id_categoria'] ?>" class="text-decoration-none m-3">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h2><?= $cat['nome_categoria'] ?></h2>
                <img src="data:image;charset=utf8;base64,<?= base64_encode($cat['foto_categoria']) ?>" class="rounded-circle" alt="..." width="200rem" height="200rem">
            </div>
        </a>
    <?php endforeach; ?>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";
?>