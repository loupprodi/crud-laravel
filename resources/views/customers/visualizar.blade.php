@extends('layout')
@section('content')
@include('components.navbar')

<div class="container mt-2">
    <div class="row mb-2">
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Código</td>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>Ações</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>luiz felipe</td>
                        <td>luiz@crud.com</td>
                        <td> <a href="/listar" class="btn btn-success">
                                <span>voltar</span>
                                <a href="/editar" class="btn btn-primary">
                                    <span>Editar</span>
                                </a>
                            </a></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
