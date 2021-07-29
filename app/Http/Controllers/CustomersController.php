<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function cadastrar()
    {
        return view("customers.cadastrar", [
            'title' => 'Cadastrar Cliente'
        ]);
    }

    public function editar()
    {
        return view("customers.editar", [
            'title' => 'Editar Clientes'
        ]);
    }

    public function listar()
    {
        return view("customers.listar", [
            'title' => 'Listar Clientes'
        ]);
    }
    public function visualizar()
    {
        return view("customers.visualizar", [
            'title' => 'Visualizar Clientes'
        ]);
    }
}
