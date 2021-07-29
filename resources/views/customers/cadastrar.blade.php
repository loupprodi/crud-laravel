@extends('layout')
@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand " href="#">Cadastro Usuários</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            
            <li class="nav-item">
                <a class="nav-link" href="/listar">listar</a>
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
        </div>
    </div>
</div>

@endsection
