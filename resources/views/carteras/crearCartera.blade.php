@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{empty($cartera) ? 'Crear' : 'Editar' }} cartera</title>
</head>
<body>
    @section('content')
        <h1 class="mb-8 text-center text-3xl font-bold">{{empty($cartera) ? 'Crear' : 'Editar' }} cartera</h1>
        <div class="flex justify-center">
            <form action="{{route('guardarCartera')}}" method="post" class="w-full justify-center border p-6 shadow-md sm:w-1/2 ">
                @csrf
                <input type="hidden" name="id" value="{{ @$cartera->id }}">
                <div class="mb-5">
                    <label for="nombres" class="block">Nombre</label>
                    <input type="text" name="nombres" id="nombres" class="w-full rounded-md border p-2" placeholder="Ingrese el nombre de cartera" value="{{!empty($cartera) ? $cartera->nombre : '' }}" />
                </div>
                <div>
                    <button class="w-full rounded-md bg-sky-600 p-2 text-white hover:bg-sky-700">Guardar</button>
                </div>
            </form>
        </div>
    @endsection
</body>
</html>