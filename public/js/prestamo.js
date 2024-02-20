const formatterValor = new Intl.NumberFormat('es-CO', { 
    style: 'currency', 
    currency: 'COP' ,
    minimumFractionDigits: 0,
});

function calcularValorCuota() {
    const valorPrestamo = document.getElementById('prestamo').value
    const cuotas = document.getElementById('cuotas').value
    const intereses = document.getElementById('intereses').value
    const valorCuota = document.getElementById('valorCuota')
    const valorLimpio = limpiador(valorPrestamo);
    valorCuota.value = formatterValor.format(Math.round(((valorLimpio*intereses)/100)+(valorLimpio/cuotas)));
}

// Función para dar formato de moneda al valor en tiempo real
function currencyFormatter(input) {
    var valor = input.value;
    valor = limpiador(valor);
    valor = formatterValor.format(valor);
    input.value = valor;
}

// Funcion que retorna el dato limpio
function limpiador(data) {
    return data.replace(/[^\d]/g, '');
}
