<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Peticione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PeticioneController extends Controller
{
    public function __construct(){
        //$this->middleware('auth')->except(['index', 'show']);
    }
    public function index(Request $request){
        $peticiones = Peticione::where('estado','aceptada')->get();
        return view('peticiones.index', compact('peticiones'));
    }
    public function listMine(Request $request){
        $user= Auth::user();
        $peticiones = Peticione::where('user_id',$user->id)->get();
        return view('peticiones.index', compact('peticiones'));
    }
    public function show(Request $request, $id){
        $peticion = Peticione::findOrFail($id);
        return view('peticiones.show', compact('peticion'));
    }
    public function show2(Peticione $id){
        return view('peticiones.show', compact('id'));
    }

    public function create(Request $request){
        return view('peticiones.edit-add');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'destinatario' => 'required',
            'categoria' => 'required',
            'file' => 'required|image|max:5120',
        ]);

        if ($validator->fails()) {
            return back()->withError("Error validando la petición")->withInput();
        }
        $input = $request->all();

        try{
            $categoria = Categoria::findOrFail($input['categoria']);
            $user= Auth::user();
            $peticion = new Peticione($input);
            $peticion->categoria()->associate($categoria);
            $peticion->user()->associate($user);
            $peticion->firmantes = 0;
            $peticion->estado = 'pendiente';
            $res=$peticion->save();
            if ($res)
            {
                $res_file = $this->fileUpload($request, $peticion->id);
                if ($res_file)
                {
                    return redirect('/mispeticiones');
                }
                return back()->withError( 'Error creando la peticion')->withInput();
            }
        }
        catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
}
