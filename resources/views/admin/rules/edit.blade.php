
@extends('admin.template.main')

@section('title')
    Editar Normas {{$rule->title}}
@endsection

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
    
    @endif

    {!! Form::open(['route' => ['rules.update', $rule], 'method' => 'PUT']) !!}
    
    <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title',$rule->title,['class'=> 'form-control', 'placeholder'=>'Titulo', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::textarea('description',$rule->description,['class'=> 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type',[''=>'Selecione una opción...',
        'RE'=>'Regular','EX'=>'Extraordinaria'
        ,'EV'=>'Eventual','UR'=>'Urgente'],
        'null', ['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Modificar',['class'=>'btn btn-primary'] )!!}

    </div>

{!! Form::close()!!}
@endsection

