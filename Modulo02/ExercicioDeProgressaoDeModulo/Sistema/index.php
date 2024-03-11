<?php

session_start();

if (isset($_SESSION[sha1("user")])) {
    header("location: sistema.php?page=dashboard");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - tela de login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-3">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        Formulário de Login
                    </div>
                    <div class="card-body">
                        <form action="controllers/validateLogin.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input required="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Senha</label>
                                <input required type="password" name="pass" class="form-control" id="exampleInputPassword1">
                            </div>
                            <input type="hidden" name="validate" value="accessAccepted">
                            <div class="col-12">
                                <p class="text-end">
                                    <button type="submit" class="btn btn-outline-primary">Enviar</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>