<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carer;

class CarerController extends Controller
{
    public function store(Request $request)
    {
        
        $entry = new Carer;
        $entry->name = $request->name;
        $entry->curp = $request->curp;
        $entry->rfc = $request->rfc;
        $entry->email = $request->email;
        $entry->n_contacto = $request->n_contacto;
        $entry->address = $request->address;
        $entry->tipo_sangre = $request->tipo_sangre;
        $entry->carer_type = $request->carer_type;        
        $entry->work_experience = $request->work_experience; 
        $entry->save();

        return redirect()->route('success')->with('success','Entrada Enviada con Éxito');
        
    }

}
