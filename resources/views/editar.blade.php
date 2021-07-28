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
                    <a class="nav-link" href="#">Listar</a>
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





                <h1>Editar Usuários</h1>
                <form id="formulario" method="POST" class="form " action="#">

                    <div class="form-row">
                        <input type="hidden" name="id" value="">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name: </label>
                            <input type="text" name="nome" class="form-control " id="inputName" placeholder="digite o nome completo" value="#"><br>


                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail">E-mail: </label>
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="digite o seu e-mail principal" value="#"><br>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputCpf">CPF: </label>
                            <input type="text" name="cpf" id="inputCpf" class="form-control" placeholder="digite o CPF" value="#">

                        </div>

                        <div class="form-group col-md-5">
                            <label for="inputPhone">Phone: </label>
                            <input type="text" name="phone" id="inputPhone" class="form-control" placeholder="digite o numero de telefone principal" value="#">


                        </div>

                        <div class="form-group col-md-3">
                            <label>birthday:</label>
                            <input type="date" name="birthday" class="form-control" value="#"></input>

                        </div>
                    </div>

                    <input class="btn btn-primary mx-auto d-block" type="submit" value="editar">
                    </ul>
                </form>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
