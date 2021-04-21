@extends("../layouts/plantilla")
@section("cabecera")
<h1>EDITAR REGISTROS</h1>
@section("contenido")
<form method="post" action="/productos/{{$producto->id}}">
    <label>Nombre del Producto</label>
    <input type="text" name="Nombre" value="{{$producto->Nombre}}">
    <br>
    <label>Descripcion del Producto</label>
    <input type="text" name="Descripcion" value="{{$producto->Descripcion}}">
    <br>
    <label>Precio del Producto</label>
    <input type="text" name="Precio" value="{{$producto->Precio}}">
    <br>
    <label>Contenido del Producto</label>
    <input type="text" name="Contenido" value="{{$producto->Contenido}}">
    <br>
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <input type="submit" name="Enviar" value="Enviar">
    <input type="reset" name="Limpiar Formulario" value="Borrar">
</form>
<form method="post" action="/productos/{{$producto->id}}">
{{csrf_field()}}
<input type="hidden" name="_method" value="DELETE">
<input type="submit" value="Eliminar Registro">
</form>
@section("pie")