<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ['Product 1', 'Product 2', 'Product 3'];

        return $products;
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
