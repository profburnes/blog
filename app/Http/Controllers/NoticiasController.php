<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function noticia($id) {
        $noticia = Noticias::find($id);
        return view('noticia',['noticia'=>$noticia]);
    }
}
