@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Nuevo Rol</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
      {{session('info')}}
    </div>
@endif
<div class="card">
  <div class="card-body">
      {!! Form::open(['route'=> 'admin.roles.store', 'autocomplete'=> 'off', 'files' => true]) !!}
        @include('admin.roles.partials.form')
      {!! Form::submit('Crear Rol', ['class'=> 'btn btn-primary']) !!}
      {!! Form::close() !!}
  </div>
</div>
@stop