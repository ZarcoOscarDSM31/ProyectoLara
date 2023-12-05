<?php

namespace App\Http\Controllers;

use App\Models\TbTipousu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
/**
 * Class TbTipousuController
 * @package App\Http\Controllers
 */
class TbTipousuController extends Controller
{
    //--------------------- LÓGICA: Lista tipo de usuarios ---------------------
    public function index()
    {
        $tbTipousu = TbTipousu::paginate(10);

        return view('tb-tipousu.index', compact('tbTipousu'))
            ->with('i', (request()->input('page', 1) - 1) * $tbTipousu->perPage());
    }

    //--------------------- LÓGICA: Mostrar tipo de usuarios ---------------------
    public function show($id)
    {
        $tb_tipousu = TbTipousu::find($id);

        return view('tb-tipousu.show', compact('tb_tipousu'));
    }

}
