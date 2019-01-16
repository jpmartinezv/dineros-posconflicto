jQuery(document).ready(function ($) {
    var location = window.location.href.split('?')[0];
    var tipo_de_fondo = $("#tipo_de_fondo").val();
    var tipo_de_licitacion = $("#tipo_de_licitacion").val();

    $("#tipo_de_fondo").on('change', function(){
        tipo_de_fondo = this.value;
        updateResults();
    });
    $("#tipo_de_licitacion").on('change', function(){
        tipo_de_licitacion = this.value;
        updateResults();
    });

    function updateResults() {
        console.log('-->', tipo_de_fondo)
        console.log(tipo_de_licitacion)

        window.location.href = location + '?tipo_de_fondo=' + tipo_de_fondo + '&tipo_de_licitacion=' + tipo_de_licitacion;
    }
});