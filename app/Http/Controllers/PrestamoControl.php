<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;

class PrestamoControl extends Controller
{
    public function index(){
        return response()->json(Prestamo::all());
    }
}
