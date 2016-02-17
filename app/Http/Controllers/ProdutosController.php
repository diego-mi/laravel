<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Produto;
use App\Http\Requests\ProdutoRequest;

/**
 * Class ProdutosController
 * @package App\Http\Controllers
 */
class ProdutosController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * @param ProdutoRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProdutoRequest $request)
    {
        $input = $request->all();
        Produto::create($input);

        return redirect('produtos');
    }
}
