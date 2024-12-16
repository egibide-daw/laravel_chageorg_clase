<?php

namespace App\Http\Controllers;

use App\Models\Peticione;
use Illuminate\Http\Request;

class AdminCategoriasController extends Controller
{
    public function index(Request $request){
        $peticiones = Peticione::paginate(5);
        return view('admincategorias.index',compact('peticiones'));
    }

    public function show(Request $request, $id)
    {
        try{
            $peticion = Peticione::findOrFail($id);
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage()->withInput());
        }
        return view('admincategorias.show',compact('peticion'));
    }

    public function create(Request $request){
        $peticion = new Peticione();
        return view('admincategorias.edit-add',compact('peticion'));
    }

    public function edit(Request $request, $id){
        try{
            $peticion = Peticione::findOrFail($id);
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage()->withInput());
        }
        return view('admincategorias.edit-add',compact('peticion'));
    }

    public function update(Request $request, $id){
        try{
            $peticion = Peticione::findOrFail($id);
            $peticion->update($request->all());
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage()->withInput());
        }
        return redirect(route('admincategorias.index'));
    }

    public function delete(Request $request, $id){
        try{
            $peticion = Peticione::findOrFail($id);
            $peticion->delete();
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage()->withInput());
        }
        return redirect()->back();
    }
}
