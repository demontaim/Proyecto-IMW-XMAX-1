<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Habitacione
 *
 * @property $id
 * @property $categoria_id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Habitacione extends Model
{
    
    static $rules = [
		'categoria_id' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','nombre', 'opinion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }

    //Relación con Opiniones
    public function opiniones(){
      return $this->hasMany('App\Models\Opiniones', 'id', 'opinion_id');
    }
}
