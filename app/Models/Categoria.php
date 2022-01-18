<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

  
    // protected $fillable = [
    //   'nombre',
      
    // ];

    protected $guarded = [];


    public function habitaciones()
    {
        return $this->hasMany('App\Models\Habitacione', 'categoria_id', 'id');
    }
    

}
