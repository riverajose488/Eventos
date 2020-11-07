<h1> Listado de Eventos </h1>
<table>
	<tr>
		
		<td>title</td>
		<td>url</td>
		<td>arl</td>

	
	</tr>
        
	<tr>
	<tr>

     	 <td>{{$personas->title}}</td> 
		 <td>{{$personas->url}}</td>
		 <td>{{$personas->arl}}</td>
		
	</tr>
	</tr>
</table>


<form method="POST" action="{{route('personas.destroy',$personas->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="delete">

<button>Eliminar</button>
</form>


