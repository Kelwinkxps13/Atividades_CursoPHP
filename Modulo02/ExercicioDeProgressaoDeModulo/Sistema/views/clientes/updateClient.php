<?php

//var_dump("Token descriptografado: ".base64_decode($_GET['token']));
// $data = base64_decode($_GET['token']);    
// $data = explode(" - ", $data);
$data = explode(" - ", base64_decode($_GET['token']));

?>


<div class="card">
    <div class="card-header bg-primary">
        Edição de Produto
    </div>
    <div class="card-body">
        <form action="views/clientes/client.php" method="POST">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Nome do Cliente </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="name" value="<?= $data[0]; ?>">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Email </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="email" value="<?= $data[1]; ?>">
                    </div>
                </div>

                <input type="hidden" name="password" value="<?= $data[2]; ?>">

                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> CPF </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="cpf" value="<?= $data[3]; ?>">
                    </div>
                </div>

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">


                <div class="col-12 mt-3">
                    <p class="text-end">
                        <button class="btn btn-outline-success">
                            <span class="iconify" data-icon="material-symbols:save-sharp" style="color: #198754;"></span>
                            Salvar Dados
                        </button>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>