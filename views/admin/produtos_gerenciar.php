<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_cabecalho.php";
?>

<section class="m-3">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>

                <th scope="col" colspan="2" class="text-center">
                    <a href="/front_vitrine/views/admin/produtos_add_form.php" title="Adicionar Produto">
                        <span class="material-symbols-outlined text-success">add_box</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <tr>
                    <th scope="row">1</th>
                    <td>Camisa</td>
                    <td>R$50,00</td>
                    <td>Roupas</td>

                    <td class="text-center">
                        <a href="/front_vitrine/views/admin/produtos_edt_form.php" title="Editar Produto">
                            <span class="material-symbols-outlined">edit</span>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="" title="Deletar Produto">
                            <span class="material-symbols-outlined text-danger">delete</span>
                        </a>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/templates/_rodape.php";
?>