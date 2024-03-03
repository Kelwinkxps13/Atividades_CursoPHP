
<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $titleSection; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active"><?= $titleSection; ?></li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $titleSection; ?>
        </div>
        <div class="card-body">
            <!-- Conteúdo real da página -->
            <form action="<?=Config::urlBase();?>/controllers/Agendamentos.php?" method="POST" class="form-horizontal mt-4" enctype="multipart/form-data">
                <div class="row">
                    
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Nome do Médico </label>
                            <input name="nomeMedico" type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" value="">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Data da Consulta </label>
                            <input name="dataConsulta" type="data" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" value="">
                        </div>
                    </div>

                    <input type="hidden" value="insert" name="action">
                    
                    <div class="col-12 mt-3">
                        <p class="text-end">
                            <button class="btn btn-outline-success" type="submit">
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