@extends('layout')
@section('content')
@include('components.navbar')

<div class="container mt-2">
    <div class="row mb-2">
        <div class="col">
            <a href="/" class="btn btn-success">
                <span>Novo registro</span>
            </a>
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
                        <td>
                            <a href="/visualizar"> <button type="button" class="btn btn-info">Visualizar</button> </a>
                            <a href="/editar"> <button type="button" class="btn btn-primary">Editar</button> </a>
                            <button type="button" class="btn btn-danger">Remover</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
