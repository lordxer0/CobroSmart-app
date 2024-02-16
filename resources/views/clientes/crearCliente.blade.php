@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear cliente</title>
</head>
<body>
  @section('content')
    <h1 class="mb-8 mt-9 text-center text-2xl font-bold sm:text-3xl">Agregar cliente</h1>
    <div class="mb-1 flex justify-end">
      <a href="{{route('clientes')}}" class="rounded border border-sky-600 px-5 py-1.5 font-medium text-sky-600 hover:bg-sky-600 hover:text-white">Atras</a>
    </div>
    <div class="flex justify-center bg-gray-50">
      <form action="" class="w-full justify-center border p-6 shadow-md sm:w-1/2">
        <div class="mb-5">
          <label for="nombre" class="block">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="w-full rounded-md border p-2" placeholder="Ingrese el nombre" />
        </div>
        <div class="mb-5">
          <label for="apellido" class="block">Apellido</label>
          <input type="text" name="apellido" id="apellido" class="w-full rounded-md border p-2" placeholder="Ingrese el apellido" />
        </div>
        <div class="mb-5">
          <label for="tipoDocumento">Tipo documento</label>
          <select name="tipo_documento" id="tipoDocumento" class="w-full rounded-md border p-2">
            <option value="">Seleccione</option>
            <option value="cc">Cédula ciudadanía</option>
            <option value="ce">Cédula extranjería</option>
            <option value="ti">Tarjeta identidad</option>
            <option value="ppt">Pasaporte</option>
          </select>
        </div>
        <div class="mb-5">
          <label for="identidad">Identificación</label>
          <input type="number" name="identificacion" id="identidad" class="w-full rounded-md border p-2" placeholder="Ingrese el número de identificación" />
        </div>
        <div class="mb-5">
          <label for="telefono">Teléfono</label>
          <input type="text" name="telefono" id="telefono" class="w-full rounded-md border p-2" placeholder="Ingrese el teléfono" />
        </div>
        <div class="mb-5">
          <label for="celular">Celular</label>
          <input type="text" name="celular" id="celular" class="w-full rounded-md border p-2" placeholder="Ingrese el celular" />
        </div>
        <div class="mb-5">
          <label for="direccion">Dirección</label>
          <input type="text" name="direccion" id="direccion" class="w-full rounded-md border p-2" placeholder="Ingrese la dirección" />
        </div>
        <div class="mb-5">
          <label for="observaciones">Observaciones</label>
          <textarea name="observaciones" id="observaciones" cols="30" rows="5" class="w-full rounded-md border"></textarea>
        </div>
        <div>
          <button class="w-full rounded-md bg-sky-600 p-2 text-white hover:bg-sky-700">Guardar</button>
        </div>
      </form>
    </div>
  @endsection
</body>
</html>