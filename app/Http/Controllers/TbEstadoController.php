<?php

namespace App\Http\Controllers;

use App\Models\TbEstado;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
/**
 * Class TbEstadoController
 * @package App\Http\Controllers
 */
class TbEstadoController extends Controller
{
    //--------------------- LÓGICA: Lista de estados ---------------------
    public function index()
    {
        $tbEstados = TbEstado::paginate(10);
        return view('tb-estado.index', compact('tbEstados'))
            ->with('i', (request()->input('page', 1) - 1) * $tbEstados->perPage());
    }

    //--------------------- LÓGICA: Mostrar estados ---------------------
    public function show($id)
    {
        $tbEstado = TbEstado::find($id);
        return view('tb-estado.show', compact('tbEstado'));
    }
}
