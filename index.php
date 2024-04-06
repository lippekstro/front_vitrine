<?php
require_once "templates/_cabecalho.php";
?>

<section>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center hero">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h3 class="fw-normal text-muted mb-3">Veja Nosso Catálogo</h3>
        </div>
</section>

<section class="m-3 d-flex justify-content-evenly align-items-center flex-wrap cards">
    <?php for ($j = 0; $j < 3; $j++) : ?>
        <div class="card col-sm-12 m-3" style="width: 18rem;">
            <img src="https://source.unsplash.com/random/1920x1080/?product" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nome do Produto</h5>
                <p class="card-text">R$ 999,99</p>
                <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
        </div>
    <?php endfor; ?>
</section>

<?php
require_once "templates/_rodape.php";
?>