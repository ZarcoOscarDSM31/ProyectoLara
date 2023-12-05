<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbResena
 *
 * @property $id
 * @property $puntuacion
 * @property $descripcion
 * @property $fk_id_usuario
 * @property $created_at
 * @property $updated_at
 *
 * @property TbUsuario $tbUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbResena extends Model
{

    static $rules = [
		'puntuacion' => 'required',
		'descripcion' => 'required',
		'fk_id_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['puntuacion','descripcion','fk_id_usuario'];

    public function usuario(){
        return $this->belongsTo(TbUsuario::class, 'fk_id_usuario');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tbUsuario()
    {
        return $this->hasOne('App\Models\TbUsuario', 'id', 'fk_id_usuario');
    }


}
