<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contato;
use Session;

class ContatosClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contatos = Contato::all();
       return view('contatos.index')->with('contatos',$contatos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('contatos.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      $this->validate($request, [
        'TipoContato' => 'required',
        'IdCliente' => 'required',
        'DescContato' => 'required',
        'BolAtivo' => 'required'
      ]);

      $input = $request->all();

      Contato::create($input);

      Session::flash('flash_message', 'contato cadastrado com sucesso!');

      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idContato)
    {
        $contato = Contato::find($idContato);
        return view('contatos.show')->with('contato',$contato);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($idContato)
    {
        $contato = Contato::find($idContato);
        return view('contatos.edit')->with('contato',$contato);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idContato)
    {
        $contato = Contato::find($idContato);

        $this->validate($request, [
            'TipoContato' => 'required',
            'IdCliente' => 'required',
            'DescContato' => 'required',
            'BolAtivo' => 'required'
        ]);

        $input = $request->all();

        $contato->fill($input)->save();

        Session::flash('flash_message', 'contato atualizado!');

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idContato)
    {
        $contato = Contato::find($idContato);

        $contato->delete();

        Session::flash('flash_message', 'contato excluido!');

        return redirect()->route('contatos.index');
        
    }
}
