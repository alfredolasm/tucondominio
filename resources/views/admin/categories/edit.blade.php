@extends('admin.template.main')

@section('title')
    Editar Categoria {{$category->name}}
@endsection

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
@endif

@section('content')

{!! Form::open(['route' => ['categories.update',$category], 'method' => 'PUT']) !!}
    
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name',$category->name,['class'=> 'form-control', 'placeholder'=>'Categoria', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary'] )!!}

    </div>

{!! Form::close()!!}
@endsection