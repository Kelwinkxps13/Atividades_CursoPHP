<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    Cadastro de Cliente
                </div>
                <div class="card-body">
                    <form action="views/clientes/client.php" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Nome do Cliente </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="name">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Email </label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="email">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Senha </label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="password">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> CPF </label>
                                    <input type="text" class="form-control" id="cpf" placeholder1="Nome do Produto" name="cpf">
                                </div>
                            </div>


                            <input type="hidden" name="action" value="insert">

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
        </div>
    </div>
</div>