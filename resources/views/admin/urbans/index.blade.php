@extends('admin.template.main')

@section('title')

@endsection

@section('content')
    <a href=" {{ route('urbans.create') }} " class="btn btn-info">Registrar nuevo urbanismo</a><hr>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Urbanización</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($urbans as $urban)
                <tr>
                    <td>{{$urban->id}} </td>
                    <td>{{$urban->name}} </td>
                    <td>{{$urban->cities}} revisar la relacion</td>
                    <td>
                        <a href="{{ route('urbans.edit', $urban->id) }}  " class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="{{ route('urbans.destroy', $urban->id) }}  " class="btn btn-danger" onclick="return confirm('Seguro desea eliminar la ciudad');"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>


    </table>
    <div class="row justify-content-center">
        {!! $urbans->render() !!}
    </div>

@endsection
