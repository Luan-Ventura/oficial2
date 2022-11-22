<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Participante;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participantes = Participante::all();

        return view('participantes.index', [
            'participantes' => $participantes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participantes.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:100',
            'sobrenome'  => 'required|min:3|max:100',
            'data_nascimento'  => 'required|date|before:tomorrow',
            'email'  => 'required|unique:participantes|max:100|email'
        ]);
        
        $participante = new Participante($request->all());
            
        if($participante->save()) {
            Session::flash('participante_success', 'Participante cadastrado com sucesso!');
            return redirect()->back();
        } else {
            Session::flash('participante_error', 'Error ao cadastrar participante!');
            return redirect()->back();
        }  
    }

    
}
