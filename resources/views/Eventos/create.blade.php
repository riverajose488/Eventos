<h1>Ingrese una Nueva Persona</h1>


<form method="POST" action="{{route('personas.store')}}">
{{csrf_field()}}

<label for="title">Nombre de Evento</label>
<input type="text" name="title" >   

<label for="url">Fecha de Evento</label>
<input type="date" name="date" >   

<label for="arl">Nombre de Persona</label>
<input type="text" name="arl" >   


<button >Guardar</button>
</form>
