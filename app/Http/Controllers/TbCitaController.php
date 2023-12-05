<?php

namespace App\Http\Controllers;

use App\Models\TbCita;
use Illuminate\Http\Request;

/**
 * Class TbCitaController
 * @package App\Http\Controllers
 */
class TbCitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbCita = TbCita::paginate(10);

        return view('tb-cita.index', compact('tbCita'))
            ->with('i', (request()->input('page', 1) - 1) * $tbCita->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbCita = new TbCita();
        return view('tb-cita.create', compact('tbCita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbCita::$rules);

        $tbCita = TbCita::create($request->all());

        return redirect()->route('tb-cita.index')
            ->with('success', 'TbCita created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbCita = TbCita::find($id);

        return view('tb-cita.show', compact('tbCita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbCita = TbCita::find($id);

        return view('tb-cita.edit', compact('tbCita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbCita $tbCita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbCita $tbCita)
    {
        request()->validate(TbCita::$rules);

        $tbCita->update($request->all());

        return redirect()->route('tb-cita.index')
            ->with('success', 'TbCita updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbCita = TbCita::find($id)->delete();

        return redirect()->route('tb-cita.index')
            ->with('success', 'TbCita deleted successfully');
    }
}
