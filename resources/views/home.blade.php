<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand " href="#">Cadastro Usuários</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="listar.php">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>

            </ul>

        </div>
    </nav>



    <div class="container">

        <div class="row">
            <div class="col-lg-2"></div>

            <div class="col-lg-8 my-3">


                <div class="container">
                    <h1 class="my-4">Cadastrar Usuário</h1>

                    <form>
                        <label>Nome</label><br><input class="form-control" type="text" name="nome" placeholder="Digite o nome completo"><br>

                        <label>CPF</label><br><input class="form-control" type="text" name="cpf" placeholder="Digite o CPF"><br>

                        <label>E-mail</label><br><input class="form-control" type="text" name="email" placeholder="Digite o E-mail"><br>

                        <label>Telefone</label><br><input class="form-control" type="text" name="telefone" placeholder="Digite o telefone"><br>

                        <input class="btn btn-primary mx-auto d-block" type="submit" value="cadastrar-se">
                    </form>
                </div>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
