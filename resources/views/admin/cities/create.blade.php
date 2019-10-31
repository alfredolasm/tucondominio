@extends('admin.template.main')

@section('title')

@endsection

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
    
    @endif

    {!! Form::open(['route' => 'cities.store', 'method' => 'POST']) !!}
    
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name',null,['class'=> 'form-control', 'placeholder'=>'Ciudad', 'required']) !!}
            
        </div>
        <div class="form-group">
            {!! Form::label('state_id','Estado') !!}
            {!! Form::select('state_id', $states,null,['class' => 'form-control ', 'required'])  !!}
		
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary'] )!!}

        </div>

    {!! Form::close()!!}

@endsection 