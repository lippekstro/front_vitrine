<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";

?>

<section class="m-3 d-flex justify-content-center flex-column align-items-center cards">
    <?php for ($i = 0; $i < 10; $i++) : ?>
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