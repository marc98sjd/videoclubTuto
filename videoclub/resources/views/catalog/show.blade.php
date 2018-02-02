
	@extends('layouts.master')

    @section('content')

        <div class="row">

		    <div class="col-sm-4">

		    	<img src="{{$pelicula['poster']}}" style="height:350px; width: 250px;"/>
	           	<h4 style="min-height:45px;margin:5px 0 10px 0"></h4>

		    </div>
		    <div class="col-sm-8" style="color: white;">	
		        <h1>{{$pelicula['title']}}</h1>
	            <p><b>Año: </b>{{$pelicula['year']}}</p>
	            <p><b>Director: </b>{{$pelicula['director']}}</p>
	            <p><b>Resumen: </b>{{$pelicula['synopsis']}}</p>
	            <p><b>Estado: </b> @if($pelicula['rented'] == true) Pelicula actualmente alquilada @else Película disponible @endif</p>
				<p>
					@if($pelicula['rented'] == true)
						<button type="button" class="btn btn-danger">Devolver Pelicula</button> 
					@else 
						<button type="button" class="btn btn-primary">Alquilar Pelicula</button> 
					@endif 
					<button onclick="window.location.href='/catalog/edit/{{$id}}'" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Editar Pelicula</button>
					<button type="button" onclick="window.location.href='/catalog/index'" style="border: 1px solid grey;" class="btn btn-light"><span class="glyphicon glyphicon-chevron-left"></span> Volver al Listado</button>
				</p>
		    </div>
		</div>
    @stop