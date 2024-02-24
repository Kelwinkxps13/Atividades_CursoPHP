<?php

    if(isset($_GET['query'])){
        $code = $_GET['query'];
        unset($_POST);
        global $conexao;
        $resultado = mysqli_query($conexao, "SELECT * FROM `produtos` WHERE `codigoBarras` = '$code'") or die(mysqli_error($conexao));
                
        $dados = array();
        while($linha = mysqli_fetch_assoc($resultado)){
            $dados[] = $linha; 
        }

    }

    

?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <p>
                    <h1>Resultado da Pesquisa por:</h1><br>
                    <h4><?= $code?></h4>
                </p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-10 offset-1 mt-3">
                        <?php if($resultado):?>
                            <table id="example" class="table table-bordered table-hover table-striped">
                                <thead class="table-dark">
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Codigo EAN</th>
                                    <th>Preço Varejo</th>
                                    <th>Preço Atacado</th>
                                    <th>Categoria</th>
                                    <th>Descrição</th>
                                </thead>

                                <tbody class="table-success">
                                    <?php foreach($dados as $linha): ?>
                                        <?php if($linha['isdeleted']==''): ?>
                                            <tr>
                                                <td> <?= $linha['id'] ?></td>                
                                                <td> <?= $linha['nome'] ?></td>                
                                                <td> <?= $linha['codigoBarras'] ?></td>                
                                                <td> <?= $linha['preco1'] ?></td>                
                                                <td> <?= $linha['preco2'] ?></td>                
                                                <td> <?= $linha['categoria'] ?></td>
                                                <td> <?= $linha['descricao'] ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        <?php endif;?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>