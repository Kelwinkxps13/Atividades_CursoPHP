<?php
    $dados = selecionar("produtos", null, null, null);

    include_once 'deletar.php';
?>

    <table id="example" class="table table-bordered table-hoover table-striped bg-success">
        <thead class="table-dark">
            <th>ID</th>
            <th>Nome</th>
            <th>Codigo EAN</th>
            <th>Preço Varejo</th>
            <th>Preço Atacado</th>
            <th>Descrição</th>
            <th>Categoria</th>
        </thead>

        <tbody class="table-danger">
            <?php foreach($dados as $linha): ?>
                <?php if($linha['isdeleted']=="*"): ?>
                    <tr>
                        <td> <?= $linha['id'] ?></td>                
                        <td> <?= $linha['nome'] ?></td>                
                        <td> <?= $linha['codigoBarras'] ?></td>                
                        <td> <?= $linha['preco1'] ?></td>                
                        <td> <?= $linha['preco2'] ?></td>                
                        <td> <?= $linha['descricao'] ?></td>                       
                        <td> <?= $linha['categoria'] ?></td>                       
                    </tr>
                <?php endif; ?>
            <?php endforeach;?>
        </tbody>
    </table>    