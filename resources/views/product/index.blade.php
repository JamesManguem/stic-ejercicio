<table class="table table-light">
    <thead class="thead-light">
    <tr>
        <th>Id</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>

    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->Foto}}</td>
            <td>{{$product->Nombre}}</td>
            <td>{{$product->Precio}}</td>
            <td>{{$product->Descripcion}}</td>
            <td>Editar |


                <form action="{{ url('/product/'.$product->id) }}" class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}


                    <input class="btn btn-danger" type="submit"  onclick="return confirm('¿Estas seguro que deseas eliminar este producto?')" value="Eliminar">

                </form>





            </td>
        </tr>

    @endforeach
    </tbody>


</table>
