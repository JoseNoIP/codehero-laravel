<h1>
	Usuarios
</h1>

<ul>
	@foreach($usuarios as $usuario)
	<!-- Equivalente en Blade a <?php// foreach($usuarios as $usuario) ?> -->
	<li>
		{{ $usuario->nombre.' '.$usuario->apellido }}
		<!-- Equivalente en Blade a <?php// echo $usuario->nombre.' '.$usuario->apellido ?> -->
	</li>
	@endforeach
</ul>