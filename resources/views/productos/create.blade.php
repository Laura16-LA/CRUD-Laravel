@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")
<form method="post" action="/productos">
    <label>Nombre del Producto</label>
    <input type="text" name="Nombre">
    <br>
    <label>Descripcion del Producto</label>
    <input type="text" name="Descripcion">
    <br>
    <label>Precio del Producto</label>
    <input type="text" name="Precio">
    <br>
    <label>Contenido del Producto</label>
    <input type="text" name="Contenido">
    <br>
    {{csrf_field()}}
    <input type="submit" name="Enviar" value="Enviar">
</form>
@section("pie")