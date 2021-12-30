<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Opinione
 *
 * @property $id
 * @property $opinion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Opinione extends Model
{
    
    static $rules = [
		'opinion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['opinion'];


    //Relación uno a muchos con usuarios
    public function clientes() {
      return $this->belongsTo('App\Models\Cliente');
    }

    public function habitacion(){
      return $this->belongsTo('App\Models\Habitacione');
    }

}
