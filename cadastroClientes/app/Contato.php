<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model 
{
	protected $table = "ContatosClientes";
    protected $fillable = [
        'TipoContato',
        'IdCliente',
        'DescContato',
        'BolAtivo'
    ];

}