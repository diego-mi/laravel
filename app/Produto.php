<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produto
 * @package App
 */
class Produto extends Model
{

    protected $fillable = ['nome', 'descricao'];

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos', ['produtos' => $produtos]);
    }
}
