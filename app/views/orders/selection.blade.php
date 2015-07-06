@extends('layout')

@section('head')
@stop

@section('content')
<h1>Selección de {{ $user->username }}</h1>
	<table class="table">
    <tbody>
      <tr>
        <th>
          Categoría
        </th>
        <td>
          {{ $selection->option->subcategories->categories->name }}
        </td>
      </tr>
      <tr>
        <th>
          Subcategoría
        </th>
        <td>
          {{ $selection->option->subcategories->name }}
        </td>
      </tr>
      <tr>
        <th>
          Opción
        </th>
        <td>
          {{ $selection->option->name }}
        </td>
      </tr>
      <tr>
        <th>
          Color Smartphone
        </th>
        <td>
          @if($selection->preselection->step_one == 1)
          Blanco
          @elseif($selection->preselection->step_one == 2)
          Negro
          @elseif($selection->preselection->step_one == 3)
          Dorado
          @else
          Plateado
          @endif
        </td>
      </tr>
    </tbody>
  </table>
@stop
