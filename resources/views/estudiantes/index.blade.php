<h1>lista de Estudiantes</h1>
<ul>
    @foreach ($estudiantes as $estudiante )
    <li><a href="{{route('estudiantes.show',$estudiante)}}">{{$estudiante->name}}</a></li>
    @endforeach
</ul>
