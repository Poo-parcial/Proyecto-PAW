$(document).ready(function(){
    $(".user").click(funtion(event){
        $("#contenido").load("usuarios/principal.php");
        event.preventDefault();
    })

    /*btn salir */
    $(".exit-sys").click(function(){
        if(confirm("seguro/a en cerrar sesion"))
        {
            location.herf = "../../index.php";
        } else {
            alert("cierre de secsion cancelado...");
        }
    })
}).