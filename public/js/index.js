$(document).ready(function() { 
    $('body').bootstrapMaterialDesign();

    $("#wetrust\\.menu\\.inicio").on("click", function(){
        $("#wetrust\\.home").removeClass("d-none");
        $("#wetrust\\.status").addClass("d-none");
    });

    $("#wetrust\\.menu\\.estado").on("click", function(){
        $("#wetrust\\.home").addClass("d-none");
        $("#wetrust\\.status").removeClass("d-none");
    });
});