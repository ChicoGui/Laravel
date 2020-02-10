<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use Session;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clientes = Cliente::all();
       return view('clientes.index')->with('clientes',$clientes);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('clientes.create');
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
        'razaoSocial' => 'required',
        'BolAtivo' => 'required'
      ]);

      $input = $request->all();

      Cliente::create($input);

      Session::flash('flash_message', 'Cliente cadastrado com sucesso!');

      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($IdCliente)
    {
        $cliente = Cliente::find($idCliente);
        return view('clientes.show')->with('cliente',$cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($IdCliente)
    {
        $cliente = Cliente::find($idCliente);
        return view('clientes.edit')->with('cliente',$cliente);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $IdCliente)
    {
        $cliente= Cliente::find($IdCliente);

        $this->validate($request, [
            'razaoSocial' => 'required',
            'BolAtivo' => 'required'
        ]);

        $input = $request->all();

        $cliente->fill($input)->save();

        Session::flash('flash_message', 'cliente atualizado!');

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($IdCliente)
    {
        $cliente = Cliente::find($IdCliente);

        $cliente->delete();

        Session::flash('flash_message', 'Cliente excluido!');

        return redirect()->route('clientes.index');
        
    }
}
