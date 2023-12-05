<?php

namespace App\Http\Controllers;

use App\Models\TbEstado;
use App\Models\TbTipousu;
use App\Models\TbUsuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
/**
 * Class TbUsuarioController
 * @package App\Http\Controllers
 */
class TbUsuarioController extends Controller
{
    //--------------------- LÓGICA: Lista usuarios ---------------------
    public function index()
    {
        $tbUsuario = TbUsuario::all();
        return view('/tb-usuario/index', compact('tbUsuario'));
    }

    //--------------------- LÓGICA: Alta usuarios ---------------------
    public function crea()
    {
        $tbUsuario = TbUsuario::all();
        $estados = TbEstado::all();
        $tipousu = TbTipousu::all();
        return view('/tb-usuario/create', compact('tbUsuario', 'estados', 'tipousu'));
    }

    //--------------------- LÓGICA: Salvar usuarios ---------------------
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'app' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'pass' => 'required',
            'fk_id_estado' => 'required',
            'fk_id_tipousu' => 'required'
        ]);

        TbUsuario::create(array(
            'nombre' => $request->input('nombre'),
            'app' => $request->input('app'),
            'apm' => $request->input('apm'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),
            'fk_id_estado' => $request->input('estado'),
            'fk_id_tipousu' => $request->input('tipo_usuario')
        ));

        return redirect()->route('index');
    }

    //--------------------- LÓGICA: Mostrar usuario ---------------------
    public function show($id)
    {
        $tbUsuario = TbUsuario::find($id);
        return view('tb-usuario.show', compact('tbUsuario'));
    }

    //--------------------- LÓGICA: Eliminar usuario ---------------------
    public function destroy($id)
    {
        $tbUsuario = TbUsuario::find($id)->delete();
        return redirect()->route('tb-usuario.index')
            ->with('Eliminado', 'Usuario eliminado correctamente');
    }

    //--------------------- LÓGICA: Editar usuario ---------------------
    public function edit($id)
    {
        $tbUsuario = TbUsuario::find($id);
        $estados = TbEstado::all();
        $tipousu = TbTipousu::all();
        return view('/tb-usuario/edit', compact('tbUsuario', 'estados', 'tipousu'));
    }

    //--------------------- LÓGICA: Modificar usuario ---------------------
    public function update(TbUsuario $id, Request $request)
    {
        $query = TbUsuario::find($id->id);
            $query -> nombre = $request -> nombre;
            $query -> app = $request -> app;
            $query -> apm = $request -> apm;
            $query -> telefono = $request -> telefono;
            $query -> email = $request -> email;
            $query -> pass = $request -> pass;
            $query -> fk_id_estado = $request -> estado;
            $query -> fk_id_tipousu = $request -> tipo_usuario;
        $query->save();

        return redirect()->route("index", ['id' => $id->id]);
    }


}
