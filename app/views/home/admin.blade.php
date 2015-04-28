@extends('layout')

@section('head')
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Panel de Control</div>
				<div class="panel-body">
					<h3>Bienvenido "Nombre Usuario"</h3>
					<div class="quote">{{ HTML::link('user/list','Usuarios') }}</div>
					<div class="quote">{{ HTML::link('categories/list','Categorias') }}</div>
					<div class="quote">{{ HTML::link('orders/list','Ordenes') }}</div>
				</div>
			</div>
		</div>
	</div>
</div>



@stop