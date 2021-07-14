<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function games(){

        $subtitulo = 'Lista de games';

        $games = ['Super Mario', 'Contra', 'Couter Strike: Go'];
        $desenvolvedoras = ['Nintendo'];

        return view('Admin.Games.index', compact('subtitulo','games'));
        
        
    }
}
