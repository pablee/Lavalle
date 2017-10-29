

function verMediosPago()
{
    var url = 'https://www.mercadopago.com.ar/promociones';
    var myWindow = window.open(url, "MsgWindow", "width=500,height=600");
}


function campoModificado(id)
{
    document.getElementById(id+"-modificado").value=1;
}