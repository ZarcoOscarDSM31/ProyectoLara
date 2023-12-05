<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTipousu
 *
 * @property $id
 * @property $tipo_usuario
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbTipousu extends Model
{

    static $rules = [
        'id' => 'required',
		'tipo_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_usuario'];



}
