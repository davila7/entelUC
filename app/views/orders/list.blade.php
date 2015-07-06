@extends('layout')

@section('head')
@stop

@section('content')
	{{ $filter }}
	<table class="table table-striped">
    <thead>
    <tr>
                 <th>
                                                <a href="http://local.entel.cl/orders/list?ord=id">
                        <span class="glyphicon glyphicon-arrow-up"></span>
                    </a>
                                                    <a href="http://local.entel.cl/orders/list?ord=-id">
                        <span class="glyphicon glyphicon-arrow-down"></span>
                    </a>
                                             ID
            </th>
                 <th>
                                                <a href="http://local.entel.cl/orders/list?ord=status">
                        <span class="glyphicon glyphicon-arrow-up"></span>
                    </a>
                                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                             Status
            </th>
                 <th>
                            Usuario
            </th>
                 <th>
                            Editar/Borrar
            </th>
         </tr>
    </thead>
    <tbody>
			@foreach($grid->data as $item)
            <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->user->username }}</td>
                        <td><a class="" title="Selección" href="http://local.entel.cl/selection/{{ $item->id_selection }}/{{ $item->user->id }}">Ver Selección</a>
												</td>
                    </tr>
				@endforeach
        </tbody>
</table>
{{ $grid->links() }}
@stop
