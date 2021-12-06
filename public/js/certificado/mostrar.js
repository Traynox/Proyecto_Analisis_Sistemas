
function mostrar_alerta() {
    $('.alert').addClass("show");
    $('.alert').removeClass("hide");
    $('.alert').addClass("showAlert");
    setTimeout(function() {
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    }, 5000);
    setTimeout(function() {
        //reacomoda el size de la pagina
        $('.alert').removeClass("showAlert");
        $('.alert').removeClass("hide");

    }, 5900);
}