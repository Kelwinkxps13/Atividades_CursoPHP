<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  
    <?php

    global $conexao;
    $code = $_POST['search'];
    unset($_POST);
    $resultado = mysqli_query($conexao, "SELECT * FROM `produtos` WHERE `codigoBarras` = $code") or die(mysqli_error($conexao));
            
    $dados = array();
    while($linha = mysqli_fetch_assoc($resultado)){
        $dados[] = $linha; 
    }

    ?>

    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Resultado da Pesquisa por:<br><?= $code?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="row">
        <div class="col-10 offset-1 mt-3">
        <table class="table table-bordered table-hover table-stripped">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Codigo EAN</th>
                <th>Preço Varejo</th>
                <th>Preço Atacado</th>
                <th>Categoria</th>
                <th>Descrição</th>
            </thead>

            <tbody>
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
        </div>
    </div>


      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>





<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>