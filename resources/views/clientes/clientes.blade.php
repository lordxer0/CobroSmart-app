@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <title>Clientes</title>
</head>
<body>
@section('content')
<div class="mx-20 mt-24 grid">
  <div class="text-center">
    <h1 class="mb-8 text-center text-3xl font-bold">Clientes</h1>
  </div>
  <x-alert-success />
  <div class="mb-1 flex justify-end">
    <a href="{{route('crearclientes')}}" class="rounded border border-sky-600 px-5 py-1.5 font-medium text-sky-600 hover:bg-sky-600 hover:text-white">Crear Cliente</a>
  </div>
  <div class="mb-1 flex justify-end">
    <a href="{{route('dashboard')}}" class="rounded border border-sky-600 px-5 py-1.5 font-medium text-sky-600 hover:bg-sky-600 hover:text-white">Atras</a>
  </div>
  <div class="shadow-md sm:rounded-lg" >
    <table class="text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400" id="dataTable">
      <thead class="bg-gray-50 text-xs uppercase text-gray-700">
        <tr>
          <th class="px-6 py-3">{{__('Nombre')}}</th>
          <th class="px-6 py-3">{{__('Identificación')}}</th>
          <th class="px-6 py-3">{{__('Teléfono')}}</th>
          <th class="px-6 py-3">{{__('Celular')}}</th>
          <th class="px-6 py-3">{{__('Dirección')}}</th>
          <th class="px-6 py-3">{{__('Observaciones')}}</th>
          <th class="px-6 py-3">{{__('Action')}}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($clientes as $cliente)
          <tr class="border-b odd:bg-white even:bg-gray-50">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">{{ $cliente->nombres }} {{ $cliente->apellidos }}</th>
            {{-- <td class="px-6 py-4">{{ $cliente->tipo_documento }}</td> --}}
            <td class="px-6 py-4 ">{{ $cliente->identificacion }}</td>
            <td class="px-6 py-4 ">{{ $cliente->telefono }}</td>
            <td class="px-6 py-4 ">{{ $cliente->celular }}</td>
            <td class="px-6 py-4 ">{{ $cliente->direccion }}</td>
            <td class="px-6 py-4 ">{{ $cliente->observaciones }}</td>
            <td class="flex gap-1 px-6 py-4">
              <a href="{{url('/editarCliente/'.$cliente->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-black ">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                  <title>Editar</title>
                </svg>
              </a>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-black ">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  <title>Activar</title>
                </svg>
              </a>
              <a href="{{url('/prestamos/'.$cliente->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-black">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                  <title>Prestamos</title>
                </svg>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
</body>
<script>
</script>
</html>
