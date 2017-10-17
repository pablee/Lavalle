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


function verContacto()
{
    /*window.open(URL, name, specs, replace)*/
    var contacto = window.open("", "Contacto", "width=600, height=400");
    contacto.document.write('<input type="text" class="form-control" name="nombre "  placeholder="Nombre"> </input>');
    contacto.document.write('<input type="text" class="form-control" name="apellido" placeholder="Apellido"> </input>');
    contacto.document.write('<input type="text" class="form-control" name="telefono" placeholder="Telefono"> </input>');
    contacto.document.write('<textarea type="text" class="form-control" name="consulta" > </textarea>');
}