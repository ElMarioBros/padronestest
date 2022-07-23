<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntriesController extends Controller
{

    public function index()
    {

        $entries = Entry::all();

        //return view('index',["entries"=>$entries]);
    }

    public function store(Request $request)
    {
        
        $entry = new Entry;
        $entry->n_id = $request->n_id; 
        $entry->name = $request->name;
        $entry->sindicato = $request->sindicato;
        $entry->federacion = $request->federacion;
        $entry->confederacion = $request->confederacion;
        $entry->empleo = $request->empleo;
        $entry->n_contacto = $request->n_contacto;
        $entry->supervisor = $request->supervisor;
        $entry->email = $request->email;
        $entry->curp = $request->curp;
        $entry->rfc = $request->rfc;
        $entry->beneficiarios = $request->beneficiarios; 
        $entry->save();

        return redirect()->route('success')->with('success','Entrada Enviada con Éxito');
        
    }

}
