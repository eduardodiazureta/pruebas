{{-- Mi comentario de HTML--}}

@include('contacto.cabecera', array('nombre' => $nombre))

<h1>Pagina de contacto {!!$nombre!!} {{--isset($edad) && !is_null($edad) ? $edad :"No existe la edad"--}}</h1>

@if(is_null($edad))
	No existe la edad
@else
	Si existe la edad: {{$edad}}
@endif

<p>
	<?php $numero=6; ?>
	Tabla del {{$numero}}
</p>

@for($i=1; $i<=10; $i++)
	{{$i.' x'.$numero.($i*$numero)}}<br/>
@endfor

<?php $f=1; ?>
@while($f<=7)
	<p>{{'Hola Mundo'.$f}}
	{{$f++}}</p>
@endwhile

@include('contacto.cabecera')

@foreach($frutas as $fruta)
	<p>{{$fruta}}</p>
@endforeach