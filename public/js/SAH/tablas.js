var nombre;



  

 function tablaBeneficiarios(){
    $(document).ready(function() {
        var table = $('#tablaBeneficiarios').DataTable({
            responsive: true,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No hay datos para mostrar - lo siento",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
  
        });
  
  
    });
 }
 function tablaAutorizados(){
    $(document).ready(function() {
        var table = $('#tablaAutorizados').DataTable({
            responsive: true,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No hay datos para mostrar - lo siento",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
  
        });
  
  
    });
 }
//Obtener datos de la tabla
 $(function() {
    $('[data-toggle="tooltip"]').tooltip()
})

  $('#tabla tr').on('click', function() {
      nombre = $(this).find('td:nth-child(1)').html();

  });