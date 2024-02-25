<p class="text-center">
    <h1>
        <?php

            if (isset($_GET['validate']) && $_GET['validate']=="negado") {
                echo "<h1 class='text-center'> Acesso Negado! </h1>";
            }

        ?>
    </h1>
</p>

<div class="col-6 offset-3 mt-3">
    <div class="card">
        <div class="card-header text-center bg-primary">
            Formulário de Login
        </div>
        <div class="card-body">
        <form action="modulos/validate.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <input type="hidden" name="validate" value="accessAccepted">
            <div class="col-12">
                <p class="text-end">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </p>
            </div>
        </form>
        </div>
    </div>
</div>