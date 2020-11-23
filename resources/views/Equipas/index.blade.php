@foreach($equipas as $equipa)
    <h3>
        <a href="{{route('equipas.show',['id'=>$equipa->id_equipa])}}">
        {{$equipa->designacao}}
        </a></h3>
@endforeach