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
        return view('admin.pages.produtos.create');
    }

    public function store(Request $request)
    {
        dd('Cadastrando');
    }

    public function edit($id)
    {
        return view('admin.pages.produtos.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        dd("Editando o produto: {$id}");
    }

    public function destroy($id)
    {
        return "Deletando o produto: {$id}";
    }
}
