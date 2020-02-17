<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastelController extends Controller
{
    public function index(){
         $pasteles = ['tiramisu', 'brouny', 'croasan'];

        return view('pasteles.index')->with('pasteles', $pasteles);
    }

    public function show($id)
    {
        return view('pasteles.show', ['id' => $id]);
    }
}
