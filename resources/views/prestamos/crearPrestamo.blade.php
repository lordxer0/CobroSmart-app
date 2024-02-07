<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Agregar prestamo</title>
</head>
<body>
    <h1 class="mb-2 mt-9 text-center text-2xl font-bold sm:text-3xl">Agregar prestamo</h1>
    <div class="flex justify-center bg-gray-50">
      <form action="" class="w-full justify-center border p-6 shadow-md sm:w-1/2">
        <div class="mb-5">
          <label for="prestamo" class="block">Valor prestamo</label>
          <input type="number" name="Valor_prestamo" id="prestamo" class="w-full rounded-md border p-2" placeholder="Ingrese el valor prestamo" min="1" required />
        </div>
        <div class="mb-5">
          <label for="intereses" class="block">Intereses</label>
          <input type="number" name="intereses" id="intereses" class="w-full rounded-md border p-2" placeholder="Ingrese el interes" min="1" required />
        </div>
        <div class="mb-5">
          <label for="cuotas">Número cuotas</label>
          <input type="number" name="numero_cuotas" id="cuotas" class="w-full rounded-md border p-2" placeholder="Ingrese el número de cuotas" required />
        </div>
        <div>
            <div class="mt-2"> <select class="select2 w-full">
                <option value="1">Leonardo DiCaprio</option>
                <option value="2">Johnny Deep</option>
                <option value="3">Robert Downey, Jr</option>
                <option value="4">Samuel L. Jackson</option>
                <option value="5">Morgan Freeman</option>
            </select> </div>
        </div>
        <div class="mb-5">
          <label for="periodicidad">Periodicidad</label>
          <select name="periodicidad" id="periodicidad" class="w-full rounded-md border p-2" required>
            <option value="">Seleccione</option>
          </select>
        </div>
        <div class="mb-5">
          <label for="valorCuota">Valor cuota</label>
          <input type="text" name="valor_cuota" id="valorCuota" class="w-full rounded-md border p-2" placeholder="Ingrese el teléfono" readonly/>
        </div>
        <div>
          <button class="w-full rounded-md bg-sky-600 p-2 text-white hover:bg-sky-700">Guardar</button>
        </div>
      </form>
    </div>
    <script>
        $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    </script>
</body>
</html>