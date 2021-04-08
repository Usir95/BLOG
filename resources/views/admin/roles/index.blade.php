@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{route('admin.roles.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo Rol</a>
    <h1>Lista de Roles</h1>
@stop

@section('content')
    <div class="card">
      <div class="card-body">
        <table class="table table-stripped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Rol</th>
              <th colspan="2"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($roles as $rol)
                <tr>
                  <td>{{$rol->id}}</td>
                  <td>{{$rol->name}}</td>
                  <td width="10px">
                    <a href="{{route('admin.roles.edit',$rol)}}" class="btn btn-primary btn-sm">Editar</a>
                  </td>
                  <td width="10px">
                    <form action="{{route('admin.roles.destroy', $rol)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@stop