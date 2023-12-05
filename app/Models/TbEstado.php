<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEstado
 *
 * @property $id_estado
 * @property $clave
 * @property $estado
 * @property $abrev
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbEstado extends Model
{

    static $rules = [
		'id' => 'required',
		'clave' => 'required',
		'estado' => 'required',
		'abrev' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','clave','estado','abrev','activo'];



}
