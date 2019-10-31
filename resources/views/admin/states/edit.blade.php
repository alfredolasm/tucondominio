@extends('admin.template.main')

@section('title')
    Modificar {{$state->name}}
@endsection

@section('content')
@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </div>
    
  @endif

{!! Form::open(['route' => ['states.update',$state], 'method' => 'PUT']) !!}
    
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name',$state->name,['class'=> 'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Modificar',['class'=>'btn btn-primary'] )!!}

    </div>

{!! Form::close()!!}
@endsection