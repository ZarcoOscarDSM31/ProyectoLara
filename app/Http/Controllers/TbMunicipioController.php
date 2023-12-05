<?php

namespace App\Http\Controllers;

use App\Models\TbMunicipio;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
/**
 * Class TbMunicipioController
 * @package App\Http\Controllers
 */
class TbMunicipioController extends Controller
{
    //--------------------- LÓGICA: Lista de municipios ---------------------
    public function index()
    {
        $tbMunicipios = TbMunicipio::paginate(10);

        return view('tb-municipio.index', compact('tbMunicipios'))
            ->with('i', (request()->input('page', 1) - 1) * $tbMunicipios->perPage());
    }

    //--------------------- LÓGICA: Mostrar municipios ---------------------
    public function show($id)
    {
        $tbMunicipio = TbMunicipio::find($id);

        return view('tb-municipio.show', compact('tbMunicipio'));
    }
}
