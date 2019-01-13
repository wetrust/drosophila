$(document).ready(function() { 
    $('main').addClass("campo");

    $("#diagnostico\\.bienvenida").on("click", function(){
        application.bienvenida();
    });

    $("#diagnostico\\.uno").on("click", function(){
        application.uno();
    });
});

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
    bienvenida: function(){
        $("#card\\.bienvenida").fadeOut();
        $("#card\\.uno").fadeIn();
        $("#progreso").css({"width":"100%"}).animate({"width":"20%"}, "slow");
        application.step = 1;
        $("#cultivo").empty();
        $.each(application.cultivos, function(i,element){
            $("#cultivo").append('<option value="' + i + '">' + element + '</option>');
        });
    },
    uno: function(){
        let cultivo = $("#cultivo option:selected").text();

        if (cultivo == "Arándanos"){
            $("#card\\.uno").fadeOut();
            $("#card\\.dos").fadeIn();
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
            $("#card\\.algoritmo").fadeIn();
        }
    }
}