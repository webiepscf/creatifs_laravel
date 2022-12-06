<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Projet;

class ProjetsController extends Controller
{
    public function index()
    {
        return view('projets.index', [
            'projets' => Projet::orderBy('dateCreation', 'desc')
                ->take(5)->get()
        ]);
    }
}
