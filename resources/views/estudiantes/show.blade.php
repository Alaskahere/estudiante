
<h1>Detalles de {{$estudiante->name}}</h1>
<p><strong>id:</strong>{{$estudiante->id}}</p>
<p><strong>Nombre:</strong>{{$estudiante->name}}</p>
<p><strong>Ficha:</strong>{{$estudiante->ficha}}</p>

<h2>Clases</h2>
<ul>
    @foreach($estudiante->clases as $clase)
        <li>
            <h3>{{ $clase->name }}</h3>
            <p><strong>Valor por hora:</strong> {{ $clase->precioHora }}</p>
            <p><strong>Instructor:</strong> {{ $clase->nameInstructor }}</p>
        </li>
    @endforeach
</ul>


