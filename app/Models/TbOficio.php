<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbOficio
 *
 * @property $id
 * @property $nombre_prof
 * @property $especialidad
 * @property $fk_id_usuario
 * @property $created_at
 * @property $updated_at
 *
 * @property TbUsuario $tbUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TbOficio extends Model
{

    static $rules = [
		'nombre_prof' => 'required',
		'especialidad' => 'required',
		'fk_id_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_prof','especialidad','fk_id_usuario'];


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
