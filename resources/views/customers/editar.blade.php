@extends('layout')
@section('content')
@include('components.navbar')


<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 my-3">
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
        </div>
    </div>
</div>

@endsection
