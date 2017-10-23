function cargarVista()
{
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
        document.getElementById("contenido").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "vista/productos/cascos.php", true);
    xhttp.send();
}


function verMediosPago()
{
    var url = 'https://www.mercadopago.com.ar/promociones';
    var myWindow = window.open(url, "MsgWindow", "width=500,height=600");
}


function campoModificado(id)
{
    //alert(id);
    document.getElementById(id+"-modificado").value=1;
}