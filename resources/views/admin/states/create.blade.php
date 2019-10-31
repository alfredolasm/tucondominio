@extends('admin.template.main')

@section('title')
    Lista de Estados
@endsection

@section('content')
@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </div>
    
  @endif

{!! Form::open(['route' => 'states.store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name',null,['class'=> 'form-control', 'placeholder'=>'Estado', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary'] )!!}

    </div>

{!! Form::close()!!}
@endsection