<?php

namespace App\Http\Controllers;

use App\Licitacao;
use Illuminate\Http\Request;

class LicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licitacaos = Licitacao::all();
        return view('licitacoes.index', compact('licitacaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('licitacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $licitacao = new Licitacao;
        $licitacao->tipo         = $request->tipo;
        $licitacao->objeto       = $request->objeto;
        $licitacao->numlicitacao = $request->numlicitacao;
        $licitacao->dataabertura = $request->dataabertura;
        $licitacao->status       = $request->status;
        $licitacao->documentos   = $request->documentos;
        $licitacao->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Licitacao  $licitacao
     * @return \Illuminate\Http\Response
     */
    public function show(Licitacao $licitacao)
    {
        return view('licitacoes.show',compact('licitacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Licitacao  $licitacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Licitacao $licitacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Licitacao  $licitacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licitacao $licitacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Licitacao  $licitacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licitacao $licitacao)
    {
        //
    }
}
