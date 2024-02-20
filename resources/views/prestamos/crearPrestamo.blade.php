@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Agregar prestamo</title>
</head>
<body>
  @section('content')
    <h1 class="mb-8 mt-9 text-center text-2xl font-bold sm:text-3xl">Agregar prestamo</h1>
    <div class="flex justify-center bg-gray-50">
      <form action="" class="w-full justify-center border p-6 shadow-md sm:w-1/2">
        <div class="mb-5">
          <label for="prestamo" class="block">Valor prestamo</label>
          <input type="text" name="Valor_prestamo" id="prestamo" value="" class="w-full rounded-md border p-2" placeholder="Ingrese el valor prestamo" min="1" oninput="currencyFormatter(this)" required />
        </div>
        <label for="">Intereses</label>
        <div class="relative mb-5">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none font-bold">
            %
          </div>
          <input type="number" oninput="calcularValorCuota()" name="intereses" id="intereses" class="bg-gray-50 border  text-gray-900 rounded-md block w-full ps-10 p-2.5 " placeholder="Ingrese el interes" min="1" required />
        </div>
        <div class="mb-5">
          <label for="cuotas">Número cuotas</label>
          <input type="number" name="numero_cuotas" oninput="calcularValorCuota()" id="cuotas" class="w-full rounded-md border p-2" placeholder="Ingrese el número de cuotas" required />
        </div>
        <div class="mb-5">
          <label for="periodicidad">Periodicidad</label>
          <select name="periodicidad" id="periodicidad" class="w-full rounded-md border p-2" required>
            <option value="">Seleccione</option>
          </select>
        </div>
        <div class="mb-5">
          <label for="valorCuota">Valor cuota</label>
          <input type="text" name="valor_cuota" id="valorCuota" value="" class="w-full rounded-md border p-2 bg-slate-300" placeholder="Ingrese el teléfono" readonly/>
        </div>
        <div>
          <button class="w-full rounded-md bg-sky-600 p-2 text-white hover:bg-sky-700">Guardar</button>
        </div>
      </form>
    </div>
  @endsection
</body>
</html>