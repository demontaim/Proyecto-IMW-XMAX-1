<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','email'];


    //Relación uno a muchos con opiniones
    public function opiniones()
    {
        return $this->hasMany('App\Models\Opinione');
    }

}
