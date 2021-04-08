<div class="form-group">
  {!! Form::label('name', 'Nombre: ') !!}
  {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Ingrese el nombre del Rol']) !!}
  @error('name')
      <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<h2 class="h3">Lista de permisos</h2>
@foreach ($permissions as $permission)
    <div class="row">
      <label>
        {!! Form::checkbox('permissions[]', $permission->id,null, ['class' => 'br-1']) !!}
        {{$permission->description}}
      </label>
    </div>
@endforeach