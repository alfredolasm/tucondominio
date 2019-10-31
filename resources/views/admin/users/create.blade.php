@extends('admin.template.main')

@section('title')
   Crear Usuarios
@endsection

@section('content')

  @if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </div>
    
  @endif   

  {!! Form::open(['route' => 'users.store', 'method'=>'POST']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('email', 'Corre Electronico') !!}
      {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('password', 'Contraseña') !!}
      {!! Form::password('password',['class'=>'form-control','placeholder'=>'******','required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('type','Tipo') !!}
      {!! Form::select('type',[''=>'Selecione un Nivel..',
        'admin'=>'Administrador','member'=>'Miembro'],
        'null', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}

@endsection
