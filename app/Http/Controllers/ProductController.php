<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = date('Y');
        $titulo = "Mostrando todos os produtos";
        $idade = 19;
        $lista = ['Item 1','Item 2','Item 3','Item 4','Item 5'];
        //$lista = [];
        return view('admin.pages.produtos.index', compact('data', 'titulo', 'idade', 'lista'));
    }

    public function show($id)
    {
        return "Mostrando produto id: {$id}";
    }

    public function create()
    {
        return "Exibindo o form para cadastro de um novo produto";
    }

    public function edit($id)
    {
        return "Exibindo o form para edição do produto: {$id}";
    }

    public function store()
    {
        return "Cadastrando um novo produto no banco";
    }

    public function update($id)
    {
        return "Editando o produto: {$id} no banco";
    }

    public function destroy($id)
    {
        return "Deletando o produto: {$id}";
    }
}
