<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class CategoriasController extends Controller
{
    public function index(Request $request) //listar
    {
        $categorias = [
            'CELULARES',
            'INFORMÁTICA',
            'MÓVEIS',
            'AUTOMOTIVA',
            'LIVROS',
            'BELEZA',
            'ESPORTE',
            'LUXO'
        ];
        return view('listar-categorias')->with('categorias', $categorias);

    }
}
