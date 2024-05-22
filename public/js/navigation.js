// funcion para abrir y cerrar el user
function dropDownUser() {
    const dropdownUser = document.getElementById('dropdown-user');
    dropdownUser.classList.toggle('hidden')
}
// Funcion para abrir y cerrar el sidebar
function sidebar() {
    const sidebar = document.getElementById('logo-sidebar');
    sidebar.classList.toggle('-translate-x-full')
}
// Datatable
$(document).ready(function () {
    $('#dataTable').DataTable();

});

// Cerrar alertas
function cerrarAlerta() {
    var alerta = document.getElementById('miAlerta');
    alerta.style.display = 'none';
}
// Select2
$(document).ready(function() {
    $('.js-example-basic-single').select2({
        width: 'resolve'
    });
});