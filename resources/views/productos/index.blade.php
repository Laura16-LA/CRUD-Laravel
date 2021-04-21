@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")
<table border="1">
<tr>
<td>Nombre</td>
<td>Descripción</td>
<td>Precio</td>
<td>Contenido</td>
<td>Eliminar</td>
<td>Actualizar</td>
</tr>
@foreach($productos as $producto)
<tr>
    <td>{{$producto->Nombre}}</td>
    <td>{{$producto->Descripcion}}</td>
    <td>{{$producto->Precio}}</td>
    <td>{{$producto->Contenido}}</td>
    <td><a href="{{route('productos.destroy', $producto->id)}}">Eliminar</a></td>
    <td><a href="{{route('productos.edit', $producto->id)}}">Actualizar</a></td>
</tr>
@endforeach
</table>
<br>
<td><a href="{{route('productos.create')}}">Nuevo Registro</a></td>
@section("pie")