$(document).ready(function() { 
    $('main').addClass("campo");

    $("#diagnostico\\.continuar").on("click", function(){
        application.controller();
    });

    $("#diagnostico\\.reset").on("click", function(){
        application.reset();
    });
});

var soporteVibracion = "vibrate" in navigator;
var application = {
    steps: 5,
    step: 0,
    cultivo:0,
    cultivos: ["Seleccione","Arándanos", "Frambuesa", "Cereza", "Uva o vid", "Mora"],
    fenologico:0,
    fenologia: [
        {
            img: "img/base.png",
            texto: "Seleccione",
            riesgo: 0
        }, 
        {
            img: "img/base.png",
            texto: "Floración",
            riesgo: 0
        }, 
        {
            img: "img/base.png",
            texto: "Cuaja",
            riesgo: 0
        }, 
        {
            img: "img/base.png",
            texto: "Crecimiento de fruto",
            riesgo: 1
        }, 
        {
            img: "img/base.png",
            texto: "Pinta",
            riesgo: 2
        }, 
        {
            img: "img/base.png",
            texto: "Cosecha",
            riesgo: 2
        }, 
        {
            img: "img/base.png",
            texto: "Post Cosecha",
            riesgo: 1
        }
    ],
    controller: function(){
        switch (application.step) {
            case 0:
                application.bienvenida();
                $("#diagnostico\\.continuar").text("Siguiente paso");
                break;
            case 1:
                application.uno();
                break;
            case 2:
                application.dos();
                break;
        }
    },
    bienvenida: function(){
        $("#card\\.bienvenida").fadeOut();
        $("#card\\.uno").delay(100).fadeIn();
        $("#progreso").css({"width":"100%"}).animate({"width":"20%"}, "slow");
        application.step = 1;
        $("#cultivo").empty();
        $.each(application.cultivos, function(i,element){
            $("#cultivo").append('<option value="' + i + '">' + element + '</option>');
        });
    },
    reset: function(){
        $("#card\\.algoritmo").fadeOut();
        $("#header\\.algoritmo").fadeOut();
        $("#card\\.bienvenida").delay(100).fadeIn();
        $("#progreso").css({"width":"100%"}).removeClass("bg-danger").addClass("bg-success");
        $("#diagnostico\\.reset").removeClass("d-block").addClass("d-none");
        application.step = 0;
        $("#cultivo").empty();
        $("#fenologia").empty();
        $("#diagnostico\\.continuar").html("Realizar <br>Diagnóstico").removeClass("d-none").addClass("d-block");
    },
    uno: function(){
        let cultivo = $("#cultivo option:selected").text();

        if (cultivo == "Seleccione"){
            if (soporteVibracion = true){
                navigator.vibrate([1000, 500, 2000]);
            }
        }
        else if (cultivo == "Arándanos"){
            $("#card\\.uno").fadeOut();
            $("#card\\.dos").delay(100).fadeIn();
            $("#progreso").css({"width":"20%"}).animate({"width":"40%"}, "slow");
            application.step = 2;
            $("#fenologia").empty();
            $.each(application.fenologia, function(i,element){
                $("#fenologia").append('<option value="' + i + '" data-riesgo="' + element.riesgo +'">' + element.texto + '</option>');
            });
        }
        else{
            $("#progreso").addClass("bg-danger").removeClass("bg-success").css({"width":"20%"}).animate({"width":"100%"}, "slow");
            $("#header\\.algoritmo").removeClass("d-none");
            $("#card\\.uno").fadeOut();
            $("#card\\.algoritmo").delay(100).fadeIn();
            $("#diagnostico\\.reset").removeClass("d-none").addClass("d-block");
            $("#diagnostico\\.continuar").removeClass("d-block").addClass("d-none");
        }
    },
    dos: function(){
        let cultivo = $("#cultivo option:selected").text();

        if (cultivo == "Arándanos"){
            $("#card\\.uno").fadeOut();
            $("#card\\.dos").delay(100).fadeIn();
            $("#progreso").css({"width":"20%"}).animate({"width":"40%"}, "slow");
            application.step = 2;
            $("#fenologia").empty();
            $.each(application.fenologia, function(i,element){
                $("#fenologia").append('<option value="' + i + '" data-riesgo="' + element.riesgo +'">' + element.texto + '</option>');
            });
        }
        else{
            $("#progreso").addClass("bg-danger").removeClass("bg-success").css({"width":"20%"}).animate({"width":"100%"}, "slow");
            $("#header\\.algoritmo").removeClass("d-none");
            $("#card\\.uno").fadeOut();
            $("#card\\.algoritmo").delay(100).fadeIn();
            $("#diagnostico\\.reset").removeClass("d-none").addClass("d-block");
            $("#diagnostico\\.continuar").removeClass("d-block").addClass("d-none");
        }
    }
}