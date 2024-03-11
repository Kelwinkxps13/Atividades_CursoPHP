<?php

# Ler o arquivo de dados
$data = file('views/produtos/database.product.txt');

?>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header bg-primary">
                    Lista de Produtos
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-stripped" id="myTable">
                        <thead class="text-center">
                            <th>Nome</th>
                            <th>Código</th>
                            <th>EAN</th>
                            <th>Preço Compra</th>
                            <th>Preço Venda</th>
                            <th>Estoque</th>
                            <th>Custo</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $key => $dt) : ?>
                                <?php $token = base64_encode($dt); ?>
                                <?php $dt = explode(" - ", $dt); ?>
                                <tr>
                                    <td><?= $dt[0]; ?></td>
                                    <td><?= $dt[1]; ?></td>
                                    <td><?= $dt[2]; ?></td>
                                    <td><?= $dt[3]; ?></td>
                                    <td><?= $dt[4]; ?></td>
                                    <td><?= $dt[5]; ?></td>
                                    <td>R$ <?= number_format((str_replace(",", ".", $dt[3]) * $dt[5]), 2); ?></td>
                                    <td>

                                        <a href="?page=updateProduct&id=<?= $key; ?>&token=<?= $token; ?>" class="btn btn-sm btn-secondary">
                                            <span class="iconify" data-icon="ph:pencil-bold"></span>
                                        </a>

                                        <button class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal-<?= $key; ?>">
                                            <span class="iconify" data-icon="ph:trash-bold"></span>
                                        </button>
                                    </td>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal-<?= $key; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="views/produtos/product.php" method="POST">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                            Excluir Produto
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tem certeza que deseja excluir o produto
                                                        <strong><?= $dt[0]; ?></strong>?
                                                    </div>
                                                    <input type="hidden" name="action" value="delete">
                                                    <input type="hidden" name="id" value="<?= $key; ?>">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button type="submit" class="btn btn-danger">Sim, excluir! </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>