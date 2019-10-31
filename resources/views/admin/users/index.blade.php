@extends('admin.template.main')

@section('title')
    Lista de Usuario
@endsection


@section('content')
<a href="{{ route('users.create') }}" class="btn btn-info" >Registrar nuevo usuario</a><hr>
<table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>   
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id}} </td>
                    <td>{{ $user->name}}  </td>
                    <td>{{ $user->email}}  </td>
                    <td>
                        @if($user->type == "admin")
                            <span class="btn btn-danger">{{ $user->type }}</span>
                        @else
                            <span class="btn btn-primary" >{{$user->type}}  </span>

                        @endif
                    </td>
                    <td >
                    <a href=" {{route('users.edit', $user->id)}} " class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="{{route('users.destroy',$user->id)}}" 
                         onclick="return confirm('¿Seguro desea eliminar el ususario?');"
                         class="btn btn-danger "><i class="far fa-trash-alt"></i></a>
                         
                    </td>
                </tr>
            @endforeach

        </tbody>


    </table>
    <div class="row justify-content-center"">
        <div class4>
            {!! $users->render() !!}
        </div>
    </div>  
@endsection