<form action="{{url('/product')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="Nombre">Nombre del producto</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>

    <label for="Precio">Precio</label>
    <input type="text" name="Precio" id="Precio">
    <br>


    <label for="Descripcion">Descripción del producto</label>
    <input type="text" name="Descripcion" id="Descripcion">
    <br>

    <label for="Foto">Foto<label>
    <input type="file" name="Foto" id="Foto">
    <br>

<input type="submit" value="Guardar datos">
<br>

</form>
