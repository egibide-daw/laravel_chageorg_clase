<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\File;
use App\Models\Peticione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPeticionesController extends Controller
{
    public function index(Request $request){
       $peticiones = Peticione::paginate(5);
       return view('adminpeticiones.index',compact('peticiones'));
    }

    public function show(Request $request, $id)
    {
        try{
            $peticion = Peticione::findOrFail($id);
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage()->withInput());
        }
        return view('adminpeticiones.show',compact('peticion'));
    }

    public function create(Request $request){
        $peticion = new Peticione();
        return view('adminpeticiones.edit-add',compact('peticion'));
    }

    public function edit(Request $request, $id){
        try{
            $peticion = Peticione::findOrFail($id);
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage()->withInput());
        }
        return view('adminpeticiones.edit-add',compact('peticion'));
    }

    public function update(Request $request, $id){
        try{
            $peticion = Peticione::findOrFail($id);
            $peticion->update($request->all());
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage()->withInput());
        }
        return redirect(route('adminpeticiones.index'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'destinatario' => 'required',
            'categoria' => 'required',
            'file' => 'required'
        ]);

        $input = $request->all();
        try{
            $categoria = Categoria::findOrFail($input['categoria']);
            $user = Auth::user();
            $peticion = new Peticione($input);
            $peticion->categoria()->associate($categoria);
            $peticion->user()->associate($user);

            $peticion->firmantes = 0;
            $peticion->estado = 'pendiente';

            $res=$peticion->save();
            if($res){
                $res_file = $this->fileUploads($request, $peticion->id);
                if($res_file){
                    return redirect(route('adminpeticiones.index'));
                }
                return back()->withErrors('Error creando la petición')-withInput();
            }
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage()->withInput);
        }
    }

    public function fileUpload(Request $request, $peticione_id = null) : int|File{
        $file = $request->file('file');
        $fileModel = new File();
        $fileModel->peticione_id = $peticione_id;
        if ($request->hasFile('file')) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('images/peticiones', $filename, 'local');
            $fileModel->name = $filename;
            $fileModel->file_path = $filePath;
            $res = $fileModel->save();
            if($res) {
                return 0;
            }else{
                return 1;
            }
        }
        return 1;
    }

    public function delete(Request $request, $id){
        try{
            $peticion = Peticione::findOrFail($id);
            $peticion->delete();
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage());
        }
        return redirect()->back();
    }

    public function cambiarEstado(Request $request, $id){
        try{
            $peticion = Peticione::findOrFail($id);
            if ($request->user()->cannot('cambiarEstado', $peticion)) {
                abort(403);
            }
            $peticion->estado = 'aceptada';
            $peticion->save();
        }catch (\Exception $exception){
            return back()->withError($exception->getMessage());
        }
        return redirect()->back();
    }


}
