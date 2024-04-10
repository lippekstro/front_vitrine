<?php
require_once "../templates/_cabecalho.php";
?>

<section class="m-3 d-grid justify-content-evenly align-items-center cards grid-template">
    <?php for ($j = 0; $j < 9; $j++) : ?>
        <div class="card col-sm-12 m-3" style="width: 18rem;">
            <img src="https://source.unsplash.com/random/1920x1080/?product" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nome do Produto</h5>
                <p class="card-text">R$ 999,99</p>
                <a href="/front_vitrine/views/detalhes.php" class="btn btn-primary">Saiba Mais</a>
            </div>
        </div>
    <?php endfor; ?>
</section>

<?php
require_once "../templates/_rodape.php";
?>