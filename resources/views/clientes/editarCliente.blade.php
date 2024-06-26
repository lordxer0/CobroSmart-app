@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Editar' . ' cliente') }}</title>
</head>

<body>
    @section('content')
        <h1 class="mb-8 mt-9 text-center text-2xl font-bold sm:text-3xl">{{ __('Editar' . ' cliente') }}</h1>
        <div class="mb-1 flex justify-end">
            <a href="{{ route('clientes') }}"
                class="rounded border border-sky-600 px-5 py-1.5 font-medium text-sky-600 hover:bg-sky-600 hover:text-white">Atras</a>
        </div>
        <div class="flex justify-center bg-gray-50">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('actualizarCliente') }}" method="POST"
                class="w-full justify-center border p-6 shadow-md sm:w-1/2">
                @csrf
                <input class="form-control" type="hidden" name="id" value="{{ $cliente->id }}">
                <div class="mb-5">
                    <label for="nombres" class="block">Nombre</label>
                    <input type="text" name="nombres" id="nombres" class="w-full rounded-md border p-2"
                        placeholder="Ingrese el nombre" value="{{ $cliente->nombres ?? '' }}" />
                </div>
                <div class="mb-5">
                    <label for="apellidos" class="block">Apellido</label>
                    <input type="text" name="apellidos" id="apellidos" class="w-full rounded-md border p-2"
                        placeholder="Ingrese el apellido" value="{{ $cliente->apellidos ?? '' }}" />
                </div>
                <div class="mb-5">
                    <label for="tipo_documento">Tipo documento</label>
                    <select name="tipo_documento" id="tipo_documento" class="w-full rounded-md border p-2">
                        <option value="">Seleccione</option>
                        <option value="cc" {{ !empty($cliente) && $cliente->tipo_documento == 'cc' ? 'selected' : '' }}>
                            Cédula ciudadanía
                        </option>
                        <option value="ce" {{ !empty($cliente) && $cliente->tipo_documento == 'ce' ? 'selected' : '' }}>
                            Cédula
                            extranjería</option>
                        <option value="ti"
                            {{ !empty($cliente) && $cliente->tipo_documento == 'ti' ? 'selected' : '' }}>Tarjeta
                            identidad</option>
                        <option value="ppt"
                            {{ !empty($cliente) && $cliente->tipo_documento == 'ppt' ? 'selected' : '' }}>Pasaporte
                        </option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="identidad">Identificación</label>
                    <input type="number" name="identificacion" id="identidad" class="w-full rounded-md border p-2"
                        placeholder="Ingrese el número de identificación" value="{{ $cliente->identificacion ?? '' }}" />
                </div>
                <div class="mb-5">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" class="w-full rounded-md border p-2"
                        placeholder="Ingrese el teléfono" value="{{ $cliente->telefono ?? '' }}" />
                </div>
                <div class="mb-5">
                    <label for="celular">Celular</label>
                    <input type="text" name="celular" id="celular" class="w-full rounded-md border p-2"
                        placeholder="Ingrese el celular" value="{{ $cliente->celular ?? '' }}" />
                </div>
                <div class="mb-5">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="w-full rounded-md border p-2"
                        placeholder="Ingrese la dirección" value="{{ $cliente->direccion ?? '' }}" />
                </div>
                <div class="mb-5">
                    <label for="observaciones">Observaciones</label>
                    <textarea name="observaciones" id="observaciones" cols="30" rows="5" class="w-full rounded-md border">{{ $cliente->observaciones ?? '' }}</textarea>
                </div>
                <div>
                    <button
                        class="w-full rounded-md bg-sky-600 p-2 text-white hover:bg-sky-700">{{ __(!empty($cliente) ? 'Actualizar' : 'Guardar') }}</button>
                </div>
            </form>
        </div>
    @endsection
</body>
</html>
