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
        //$produto = Produto::where('id',$id)->get(); //retorna um array
        //$produto = Produto::where('id',$id)->first(); //Retorna item especifico opção 1
        $produto = Produto::find($id); //Retorna item especifico opção 2

        if(!$produto)
            return redirect()->back();

        return view('admin.pages.produtos.show',[
            'produto' => $produto,
        ]);
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

        /*
        if($request->file('image')->isValid())
        {
            dd($request->image->store('produtos'));
        }
        */

        $data = $request->only('name', 'description', 'price');
        Produto::create($data);

        return redirect('produtos');

    }

    public function edit($id)
    {
        $produto = Produto::find($id); //Retorna item especifico opção 2

        if(!$produto)
            return redirect()->back();

        return view('admin.pages.produtos.edit', compact('produto'));
    }

    //public function update(Request $request, $id)
    public function update(StoreUpdateProdutoRequest $request, $id)
    {
        $produto = Produto::find($id);

        if(!$produto)
            return redirect()->back();

        $produto->update($request->all());

        return redirect('produtos');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id); //Retorna item especifico

        if(!$produto)
            return redirect()->back();

        $produto->delete();

        return redirect('produtos');
    }
}
