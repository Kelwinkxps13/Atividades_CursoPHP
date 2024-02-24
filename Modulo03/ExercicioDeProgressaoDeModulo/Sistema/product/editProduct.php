<?php

    # - `nome` (Nome do produto)
    # - `codigoBarras` (Código do produto)
    # - `preco1` (Preço do produto em Varejo)
    # - `preco2` (Preço do produto em atacado)     
    # - `descricao` (Descrição do produto)
    # - `categoria` (Categoria do produto)
    require_once 'conexao.php';
    include_once 'crud.php';

    if (isset($_GET['token'])) {
        $acessToken = base64_decode($_GET['token']);

        global $conexao;
        $query = "SELECT * FROM `produtos` WHERE `id` = '$acessToken'";
        $result = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
        $data = mysqli_fetch_assoc($result);
    }

?>

    
    <div class="container">
        <div class="card">
            <div class="card-header bg-success">
                Ediçao de Prudutos
            </div>
            <form action="product/validations.php?accessToken=<?= $acessToken?>" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Nome</label>
                            <input type="text" class="form-control" required  name="nome" id="exampleFormControlInput1" placeholder="" value="<?= $data['nome']?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Codigo de Barras</label>
                            <input type="text" class="form-control" required name="codigoBarras" id="exampleFormControlInput1" placeholder="" value="<?= $data['codigoBarras']?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Preço de Varejo</label>
                            <input type="text" class="form-control" required name="preco1" id="exampleFormControlInput1" placeholder="" value="<?= $data['preco1']?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Preço de Atacado</label>
                            <input type="text" class="form-control" required name="preco2" id="exampleFormControlInput1" placeholder="" value="<?= $data['preco2']?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                            <textarea class="form-control" required name="descricao" id="exampleFormControlTextarea1" rows="4"><?= $data['descricao']?></textarea>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                            <input type="text" class="form-control" required name="categoria" id="exampleFormControlInput1" placeholder="" value="<?= $data['categoria']?>">
                        </div>
                        <input type="hidden" name="validate" value="edit">
                        <div class="col-12 mt-3">
                                <p class="text-end">
                                    <button type="submit" class="btn btn-outline-success">
                                        Enviar Dados
                                    </button>
                                </p>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
