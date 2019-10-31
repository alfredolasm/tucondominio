@extends('admin.template.main')

@section('title')
    Crear Normas
@endsection

@section('content')
@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </div>
    
  @endif

{!! Form::open(['route' => 'rules.store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title',null,['class'=> 'form-control', 'placeholder'=>'Titulo', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::textarea('description',null,['class'=> 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type',[''=>'Selecione un tipo..',
        'RE'=>'Regular','EX'=>'Extraordinaria'
        ,'EV'=>'Eventual','UR'=>'Urgente'],
        'null', ['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary'] )!!}

    </div>

{!! Form::close()!!}
@endsection