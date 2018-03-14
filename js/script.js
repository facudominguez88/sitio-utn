// script.js

var caja = $("#caja");

var mostrar = $("#mostrar");
var ocultar = $("#ocultar");

ocultar.click(function (){
    caja.slideToggle();
});