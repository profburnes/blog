<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function home() {
        $noticias = Noticias::select('noticias.*','categorias.categoria',DB::RAW('date_format(noticias.data,"%d/%m/%Y") data1'))
            ->join('categorias','categorias.id','=','noticias.categorias_id')
            ->orderby('noticias.data','desc')->paginate(3);
        return view('home',["noticias"=>$noticias]);
    }

    public function quemsomos() {
        return view('quemsomos');
    }
}
