<h1>Registros</h1>

@forelse($personas as $persona)

    <li> <a href="{{route('personas.show',$persona['id'])}}">
    {{$persona->title}}</li>
    

    @empty<li>No hay Personas para mostrar</li>

@endforelse    