@extends('admin.template.main')

@section('title')
   Editar Usuarios {{$user->name}}
@endsection

@section('content')

  {!! Form::open(['route' => ['users.update',$user], 'method'=>'PUT']) !!}

  <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('email', 'Corre Electronico') !!}
      {!! Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
    </div>
    
    <div class="form-group">
      {!! Form::label('type','Tipo') !!}
      {!! Form::select('type',['admin'=>'Administrador','member'=>'Miembro'],
        'null', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}

@endsection
