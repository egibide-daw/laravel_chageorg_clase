<?php

namespace App\Http\Controllers;

use App\Models\Peticione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
