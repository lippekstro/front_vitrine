<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";

?>

<!-- <section class="d-flex justify-content-center m-3">
    <div id="carouselExampleAutoplaying" class="carousel slide w-50" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/random/1920x1080/?cat" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/1920x1080/?dog" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/1920x1080/?duck" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section> -->

<section>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center hero">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h3 class="fw-normal text-muted mb-3">Veja Nosso Catálogo</h3>
        </div>
</section>

<section class="m-3 d-flex justify-content-center flex-column align-items-center cards">
    <?php for ($i = 0; $i < 2; $i++) : ?>
        <div class="row w-75">
            <?php for ($j = 0; $j < 4; $j++) : ?>
                <div class="card col-sm-12 m-3" style="width: 18rem;">
                    <img src="https://source.unsplash.com/random/1920x1080/?product" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Produto</h5>
                        <p class="card-text">R$ 999,99</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    <?php endfor; ?>
</section>

<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";

?>