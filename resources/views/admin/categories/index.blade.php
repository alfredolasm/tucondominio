@extends('admin.template.main')

@section('title')
    Listado de Categorias
@endsection

@section('content')
<a href="{{ route('categories.create') }}" class="btn btn-info" >Registrar nueva categoria</a><hr>
<table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acción</th>
            
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id}} </td>
                    <td>{{ $category->name}}  </td>
                    
                    <td >
                    <a href=" {{route('categories.edit', $category->id)}} " class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="{{route('categories.destroy',$category->id)}}" 
                         onclick="return confirm('¿Seguro desea eliminar la categoria?');"
                         class="btn btn-danger "><i class="far fa-trash-alt"></i></a>
                         
                    </td>
                </tr>
            @endforeach

        </tbody>


    </table>
    <div class="row justify-content-center"">
        <div class4>
            {!! $categories->render() !!}
        </div>
    </div>  
@endsection