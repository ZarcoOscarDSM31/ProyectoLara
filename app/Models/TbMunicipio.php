<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbMunicipio
 *
 * @property $id
 * @property $fk_id_estado
 * @property $clave
 * @property $municipio
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @property TbEstado $tbEstado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbMunicipio extends Model
{

    static $rules = [
		'fk_id_estado' => 'required',
		'clave' => 'required',
		'municipio' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_id_estado','clave','municipio','activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbEstado()
    {
        return $this->hasOne('App\Models\TbEstado', 'id', 'fk_id_estado');
    }
    
    public function estado(){
        return $this->belongsTo(tbEstado::class, 'fk_id_estado');
    }

}
