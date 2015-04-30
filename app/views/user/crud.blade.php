@extends('layout')

@section('head')
@stop

@section('content')
<script src="{{ asset('js/user.js') }}"></script>
	{{ $edit }}
@stop