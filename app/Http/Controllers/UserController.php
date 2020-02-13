<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Usuarios';
    }

    public function show($id){
        return 'Mostrando el detalle del usuario '.$id;
    }

    public function create(){
        return 'Crear un Nuevo Ususario';
    }

    public function edit($id){
        return 'Edita el usuario '. $id;
    }

}
