
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Sistema</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " href="?page=main">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="?page=cadastrarProduto">Cadastrar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="?page=products">Ativos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="?page=deletedProd">Deletados</a>
                </li>
            </ul>
            <form class="d-flex" role="search" action="search/result.php" method="post">
                <input type="hidden" name="validate" value="search">
                <input class="form-control me-2" type="search" name="search" placeholder="Pesquisar Produto" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Pesquisar</button>
            </form>
            </div>
        </div>
    </nav>
