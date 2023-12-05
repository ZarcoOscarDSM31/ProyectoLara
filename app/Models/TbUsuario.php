<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TbUsuario extends Model
{
    use HasFactory;
    protected $table = 'tb_usuarios';
    protected $primaryKey = 'id';
    protected $fillable = [
		'nombre' => 'required',
		'app' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'pass' => 'required',
		'fk_id_estado' => 'required',
		'fk_id_tipousu' => 'required',
    ];

    static $rules = [
		'nombre' => 'required',
		'app' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'pass' => 'required',
		'fk_id_estado' => 'required',
		'fk_id_tipousu' => 'required',
    ];

    public function estado(){
        return $this->belongsTo(tbEstado::class, 'fk_id_estado');
    }
    public function tipousu(){
        return $this->belongsTo(TbTipousu::class, 'fk_id_tipousu');
    }
}
