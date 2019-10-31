@extends('admin.template.main')

@section('title')
    Lista de ciudades
@endsection

@section('content')
    <a href=" {{ route('cities.create') }} " class="btn btn-info">Registrar nueva ciudad</a><hr>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($cities as $city)
                <tr>
                    <td>{{$city->id}} </td>
                    <td>{{$city->name}} </td>
                    <td>{{$city->states }} revisar la relacion</td>
                    <td>
                        <a href="{{ route('cities.edit', $city->id) }}  " class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="{{ route('cities.destroy', $city->id) }}  " class="btn btn-danger" onclick="return confirm('Seguro desea eliminar la ciudad');"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>


    </table>
    <div class="row justify-content-center">
        {!! $cities->render() !!}
    </div>
    

@endsection
