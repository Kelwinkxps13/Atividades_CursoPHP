<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Sistema</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " href="?page=dashboard">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="?page=addProduct">Cadastrar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="?page=listProduct">produtos Ativos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="?page=addClient">Cadastrar Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="?page=listClient">Clientes Ativos</a>
                </li>

                <!-- tentei ao maximo colocar esse sair no final -->
                <div class="text-end">
                    <li class="nav-item">
                        <form action="controllers/validateLogout.php" method="post">
                            <button type="submit" class="btn btn-outline-danger">Sair</button>
                        </form>
                    </li>
                </div>
                <!-- </ul>
            <form class="d-flex" role="search" action="search/result.php" method="post">
                <input type="hidden" name="validate" value="search">
                <input class="form-control me-2" type="search" name="search" placeholder="Pesquisar Produto" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Pesquisar</button>
            </form> -->
        </div>
    </div>
</nav>