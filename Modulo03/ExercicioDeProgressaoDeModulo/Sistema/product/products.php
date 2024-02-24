<?php

    $dados = selecionar("produtos", null, null, null);

    include_once 'deletar.php';
?>
 
    <p class="text-center">
        <h5>
            <?php
                if(isset($_GET['delete'])){
                    if($_GET['delete'] == "ok"){
                        echo "Produto deletado com sucesso!!";
                    }else if($_GET['delete'] == "jaDeletado"){
                        echo "Produto já deletado!!";
                    }
                }else if(isset($_GET['action'])){
                    if($_GET['action'] == "insert"){
                        echo "Produto Adicionado com Sucesso";
                    }else if($_GET['action'] == "update"){
                        echo "Produto Atualizado com sucesso";
                    }
                }
            ?>
        </h5>
    </p>

    <table id="example" class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <th>ID</th>
            <th>Nome</th>
            <th>Codigo EAN</th>
            <th>Preço Varejo</th>
            <th>Preço Atacado</th>
            <th>Categoria</th>
            <th> Ações </th>
        </thead>

        <tbody class="table-primary">
            <?php foreach($dados as $linha): ?>
                <?php if($linha['isdeleted']==''): ?>
                    <tr>
                        <td> <?= $linha['id'] ?></td>                
                        <td> <?= $linha['nome'] ?></td>                
                        <td> <?= $linha['codigoBarras'] ?></td>                
                        <td> <?= $linha['preco1'] ?></td>                
                        <td> <?= $linha['preco2'] ?></td>                
                        <td> <?= $linha['categoria'] ?></td>                
                        <td> 
                            <a href="?page=products&id=<?= $linha['id'] ?>&isdeleted=<?= $linha['isdeleted']?>"> Excluir </a>
                            <?php 
                                $acessToken = base64_encode($linha['id']);
                            
                            ?>
                            <a href="?page=editProduct&token=<?= $acessToken?>"> Editar </a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach;?>
        </tbody>
    </table>