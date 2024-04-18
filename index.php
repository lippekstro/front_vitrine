<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";

?>

<section>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center hero">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="fw-normal text-muted mb-3">Veja Nosso Catálogo</h1>
        </div>
</section>

<section class="m-3 d-flex justify-content-evenly align-items-center flex-wrap">
    <?php for ($j = 0; $j < 3; $j++) : ?>
        <a href="/front_vitrine/views/produtos.php" class="text-decoration-none m-3">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h2>Roupas</h2>
                <img src="https://source.unsplash.com/random/1920x1080/?product" class="rounded-circle" alt="..." width="200rem" height="200rem">
            </div>
        </a>
    <?php endfor; ?>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";
?>