<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table='productos';
    protected $primaryKey='pro_id';

     protected $fillable = [
        'pro_nombre','pro_descripcion',
    ];
}
