<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

protected $primatyKey = 'idCliente';
protected $foreingKey = 'idProducto';
protected $table = 'clientes';
protected $fillable = [

            'nombre',
            'apellidoPaterno',
            'apellidoMaterno',
            'rfc',
            'telefono',
            'correo',
            'direccion',
            'idProducto',
];

     public function producto(){
         return $this->bolongsTo('App\Models\ProductoModel','idProducto','idProducto');
     }
}
