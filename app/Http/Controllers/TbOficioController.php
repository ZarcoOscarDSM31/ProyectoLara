<?php

namespace App\Http\Controllers;

use App\Models\TbOficio;
use Illuminate\Http\Request;

/**
 * Class TbOficioController
 * @package App\Http\Controllers
 */
class TbOficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbOficios = TbOficio::paginate(10);

        return view('tb-oficio.index', compact('tbOficios'))
            ->with('i', (request()->input('page', 1) - 1) * $tbOficios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbOficio = new TbOficio();
        return view('tb-oficio.create', compact('tbOficio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbOficio::$rules);

        $tbOficio = TbOficio::create($request->all());

        return redirect()->route('tb-oficios.index')
            ->with('success', 'TbOficio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbOficio = TbOficio::find($id);

        return view('tb-oficio.show', compact('tbOficio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbOficio = TbOficio::find($id);

        return view('tb-oficio.edit', compact('tbOficio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbOficio $tbOficio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbOficio $tbOficio)
    {
        request()->validate(TbOficio::$rules);

        $tbOficio->update($request->all());

        return redirect()->route('tb-oficios.index')
            ->with('success', 'TbOficio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbOficio = TbOficio::find($id)->delete();

        return redirect()->route('tb-oficios.index')
            ->with('success', 'TbOficio deleted successfully');
    }
}
