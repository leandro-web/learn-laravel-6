<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = date('Y');
        $titulo = "Mostrando todos os produtos";
        $idade = 19;
        $lista = ['Item 1','Item 2','Item 3','Item 4','Item 5'];

        //$produtos = Produto::all(); pegando todos sem paginação
        $produtos = Produto::paginate(10); /* 15 é o valor default caso deixar vazio */
        //$lista = [];
        return view('admin.pages.produtos.index', compact('data', 'titulo', 'idade', 'lista', 'produtos'));
    }

    public function show($id)
    {
        return "Mostrando produto id: {$id}";
    }

    public function create()
    {
        return view('admin.pages.produtos.create');
    }

    public function store(StoreUpdateProdutoRequest $request)
    {

        /*
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'foto' => 'required|image',
        ]);
        */


        //dd($request->all());
        /*dd($request->only(['name','description']));
        dd($request->input('teste','default'));
        dd($request->except('_token'));
        dd($request->has('name'));
        dd($request->name);*/
        //dd($request->file('foto')->isValid());

        if($request->file('foto')->isValid())
        {
            dd($request->foto->store('produtos'));
        }
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
