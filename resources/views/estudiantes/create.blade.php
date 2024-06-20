<h1>Agregar estudiante nuevo</h1>
<form action="{{route('estudiantes.store')}}" method="POST">
    @csrf
<div>
    <label >Nombre:
        <input type="text" name="name">

    </label>
</div>
<div>
    <label >Ficha:
        <input type="text" name="ficha">
    </label>
</div>

<button>Eviar</button>
</form>
