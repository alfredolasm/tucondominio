@extends('admin.template.main')

@section('title')
    Listado de Normas y Reglas
@endsection

@section('content')
    <a href="{{ route('rules.create') }}" class="btn btn-primary">Registrar nueva Norma</a>              
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Titulo</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($rules as $rule)
                <tr>
                    <td>{{$rule->id}}</td>
                    <td>{{$rule->title}}</td>
                    <td>{{$rule->type_rule}}</td>
                    <td>{{$rule->description}}</td>
                    <td>
                        <a href=" {{ route('rules.edit', $rule->id)}} " class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href=" {{ route('rules.destroy',$rule->id) }} " onclick="return confirm('Seguro desea eliminar la Norma?');" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="row justify-content-center">
        
            {!! $rules->render() !!}
        
    </div>  
@endsection
