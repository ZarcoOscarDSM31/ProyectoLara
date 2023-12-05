<?php

namespace App\Http\Controllers;

use App\Models\TbResena;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
/**
 * Class TbResenaController
 * @package App\Http\Controllers
 */
class TbResenaController extends Controller
{
    //--------------------- LÓGICA: Lista de reseñas ---------------------

    public function index()
    {
        $tbResenas = TbResena::paginate(10);
        return view('tb-resena.index', compact('tbResenas'))
            ->with('i', (request()->input('page', 1) - 1) * $tbResenas->perPage());
    }

    //--------------------- LÓGICA: alta de reseñas ---------------------
    public function create()
    {
        $tbResena = new TbResena();
        return view('tb-resena.create', compact('tbResena'));
    }

    //--------------------- LÓGICA: Salvar reseñas ---------------------
    public function store(Request $request)
    {
        request()->validate(TbResena::$rules);

        $tbResena = TbResena::create($request->all());

        return redirect()->route('tb-resena.index')
            ->with('success', 'TbResena created successfully.');
    }

    //--------------------- LÓGICA: Mostrar reseñas ---------------------
    public function show($id)
    {
        $tbResena = TbResena::find($id);

        return view('tb-resena.show', compact('tbResena'));
    }

    //--------------------- LÓGICA: Eliminar reseñas ---------------------
    public function destroy($id)
    {
        $tbResena = TbResena::find($id)->delete();
        return redirect()->route('tb-resena.index')
            ->with('success', 'TbResena deleted successfully');
    }
    //--------------------- LÓGICA: Editar reseñas ---------------------
    public function edit($id)
    {
        $tbResena = TbResena::find($id);

        return view('tb-resena.edit', compact('tbResena'));
    }

    //--------------------- LÓGICA: Modificar reseñas ---------------------

    public function update(Request $request, TbResena $tbResena)
    {
        request()->validate(TbResena::$rules);

        $tbResena->update($request->all());

        return redirect()->route('tb-resena.index')
            ->with('success', 'TbResena updated successfully');
    }


}
