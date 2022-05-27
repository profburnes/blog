<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    public function categorias($id) {
        $noticias = Noticias::select('noticias.*','categorias.categoria',DB::RAW('date_format(noticias.data,"%d/%m/%Y") data1'))
            ->join('categorias','categorias.id','=','noticias.categorias_id')
            ->where('categorias.id','=',$id)
            ->orderby('noticias.data','desc')->paginate(3);

        return view('categorias',['noticias'=>$noticias]);
    }
}
