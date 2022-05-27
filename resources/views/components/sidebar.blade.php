<h2>Categorias</h2>
<ul>
@foreach ($categorias as $categoria) 
    <li>
        <a href="{{route('categorias',['id'=>$categoria->id])}}">{{$categoria->categoria}}</a>
    </li>
@endforeach
</ul>