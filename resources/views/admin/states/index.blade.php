@extends('admin.template.main')

@section('title')
    Lista de Estados
@endsection

@section('content')

    <a href=" {{ route('states.create')}} " class="btn btn-info">Registar un nuevo estado</a><hr>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acción</th>
        </thead>

        <tbody>
            @foreach($states as $state)
                <tr>
                    <td>{{$state->id}}</td>
                    <td>{{$state->name}}</td>
                    <td>
                        <a href=" {{ route('states.edit',$state->id)}} " class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href=" {{ route('states.destroy',$state->id)}} " class="btn btn-danger" onclick="return confirm('Seguro desea elimina el Estado?');"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="row justify-content-center"">
        <div class4>
            {!! $states->render() !!}
        </div>
    </div>  

@endsection