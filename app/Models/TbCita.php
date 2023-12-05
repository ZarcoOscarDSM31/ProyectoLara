<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCita
 *
 * @property $id
 * @property $fecha
 * @property $hora_inicio
 * @property $hora_final
 * @property $descripcion
 * @property $lugar
 * @property $fk_id_usuario
 * @property $created_at
 * @property $updated_at
 *
 * @property TbUsuario $tbUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbCita extends Model
{

    static $rules = [
		'fecha' => 'required',
		'hora_inicio' => 'required',
		'hora_final' => 'required',
		'descripcion' => 'required',
		'lugar' => 'required',
		'fk_id_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','hora_inicio','hora_final','descripcion','lugar','fk_id_usuario'];

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
