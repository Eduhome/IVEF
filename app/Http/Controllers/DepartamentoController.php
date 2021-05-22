<?php

namespace App\Http\Controllers;
use App\Models\Departamento;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function graphic()
    {
        $departamentos = Departamento::where ('estado',1)->get();
       
        return view('graphic/index')->with('departamentos', $departamentos);
        //add($departamentos);

    }
}
